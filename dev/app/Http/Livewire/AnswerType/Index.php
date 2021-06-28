<?php

namespace App\Http\Livewire\AnswerType;

use App\Http\Livewire\WithConfirmation;
use App\Http\Livewire\WithSorting;
use App\Models\AnswerType;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Gate;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    use WithSorting;
    use WithConfirmation;

    public int $perPage;

    public array $orderable;

    public string $search = '';

    public array $selected = [];

    public array $paginationOptions;

    protected $queryString = [
        'search' => [
            'except' => '',
        ],
        'sortBy' => [
            'except' => 'id',
        ],
        'sortDirection' => [
            'except' => 'desc',
        ],
    ];

    public function getSelectedCountProperty()
    {
        return count($this->selected);
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function updatingPerPage()
    {
        $this->resetPage();
    }

    public function resetSelected()
    {
        $this->selected = [];
    }

    public function mount()
    {
        $this->sortBy            = 'id';
        $this->sortDirection     = 'desc';
        $this->perPage           = 100;
        $this->paginationOptions = config('project.pagination.options');
        $this->orderable         = (new AnswerType())->orderable;
    }

    public function render()
    {
        $query = AnswerType::advancedFilter([
            's'               => $this->search ?: null,
            'order_column'    => $this->sortBy,
            'order_direction' => $this->sortDirection,
        ]);

        $answerTypes = $query->paginate($this->perPage);

        return view('livewire.answer-type.index', compact('query', 'answerTypes', 'answerTypes'));
    }

    public function deleteSelected()
    {
        abort_if(Gate::denies('answer_type_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        AnswerType::whereIn('id', $this->selected)->delete();

        $this->resetSelected();
    }

    public function delete(AnswerType $answerType)
    {
        abort_if(Gate::denies('answer_type_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $answerType->delete();
    }
}
