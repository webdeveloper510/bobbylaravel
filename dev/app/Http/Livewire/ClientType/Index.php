<?php

namespace App\Http\Livewire\ClientType;

use App\Http\Livewire\WithConfirmation;
use App\Http\Livewire\WithSorting;
use App\Models\ClientType;
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
        $this->perPage           = 10;
        $this->paginationOptions = config('project.pagination.options');
        $this->orderable         = (new ClientType())->orderable;
    }

    public function render()
    {
        $query = ClientType::advancedFilter([
            's'               => $this->search ?: null,
            'order_column'    => $this->sortBy,
            'order_direction' => $this->sortDirection,
        ]);

        $clientTypes = $query->paginate($this->perPage);

        return view('livewire.client-type.index', compact('query', 'clientTypes', 'clientTypes'));
    }

    public function deleteSelected()
    {
        abort_if(Gate::denies('client_type_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        ClientType::whereIn('id', $this->selected)->delete();

        $this->resetSelected();
    }

    public function delete(ClientType $clientType)
    {
        abort_if(Gate::denies('client_type_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $clientType->delete();
    }
}
