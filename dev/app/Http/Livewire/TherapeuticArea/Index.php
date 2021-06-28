<?php

namespace App\Http\Livewire\TherapeuticArea;

use App\Http\Livewire\WithConfirmation;
use App\Http\Livewire\WithSorting;
use App\Models\TherapeuticArea;
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
        $this->orderable         = (new TherapeuticArea())->orderable;
    }

    public function render()
    {
        $query = TherapeuticArea::advancedFilter([
            's'               => $this->search ?: null,
            'order_column'    => $this->sortBy,
            'order_direction' => $this->sortDirection,
        ]);

        $therapeuticAreas = $query->paginate($this->perPage);

        return view('livewire.therapeutic-area.index', compact('query', 'therapeuticAreas', 'therapeuticAreas'));
    }

    public function deleteSelected()
    {
        abort_if(Gate::denies('therapeutic_area_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        TherapeuticArea::whereIn('id', $this->selected)->delete();

        $this->resetSelected();
    }

    public function delete(TherapeuticArea $therapeuticArea)
    {
        abort_if(Gate::denies('therapeutic_area_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $therapeuticArea->delete();
    }
}
