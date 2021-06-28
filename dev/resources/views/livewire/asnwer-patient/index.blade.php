<div>
    <div class="card-controls sm:flex">
        <div class="w-full sm:w-1/2">
            Per page:
            <select wire:model="perPage" class="form-select w-full sm:w-1/6">
                @foreach($paginationOptions as $value)
                    <option value="{{ $value }}">{{ $value }}</option>
                @endforeach
            </select>

            @can('asnwer_patient_delete')
                <button class="btn btn-rose ml-3 disabled:opacity-50 disabled:cursor-not-allowed" type="button" wire:click="confirm('deleteSelected')" wire:loading.attr="disabled" {{ $this->selectedCount ? '' : 'disabled' }}>
                    {{ __('Delete Selected') }}
                </button>
            @endcan



        </div>
        <div class="w-full sm:w-1/2 sm:text-right">
            Search:
            <input type="text" wire:model.debounce.300ms="search" class="w-full sm:w-1/3 inline-block" />
        </div>
    </div>
    <div wire:loading.delay class="col-12 alert alert-info">
        Loading...
    </div>

    <div class="overflow-hidden">
        <div class="overflow-x-auto">
            <table class="table table-index w-full">
                <thead>
                    <tr>
                        <th class="w-9">
                        </th>
                        <th class="w-28">
                            {{ trans('cruds.asnwerPatient.fields.id') }}
                            @include('components.table.sort', ['field' => 'id'])
                        </th>
                        <th>
                            {{ trans('cruds.asnwerPatient.fields.custom_patient') }}
                            @include('components.table.sort', ['field' => 'custom_patient.custom_patient'])
                        </th>
                        <th>
                            {{ trans('cruds.asnwerPatient.fields.order') }}
                            @include('components.table.sort', ['field' => 'order.custom_order'])
                        </th>
                        <th>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($asnwerPatients as $asnwerPatient)
                        <tr>
                            <td>
                                <input type="checkbox" value="{{ $asnwerPatient->id }}" wire:model="selected">
                            </td>
                            <td>
                                {{ $asnwerPatient->id }}
                            </td>
                            <td>
                                @if($asnwerPatient->CustomPatient)
                                    <span class="badge badge-relationship">{{ $asnwerPatient->CustomPatient->custom_patient ?? '' }}</span>
                                @endif
                            </td>
                            <td>
                                @if($asnwerPatient->Order)
                                    <span class="badge badge-relationship">{{ $asnwerPatient->Order->custom_order ?? '' }}</span>
                                @endif
                            </td>
                            <td>
                                <div class="flex justify-end">
                                    @can('asnwer_patient_show')
                                        <a class="btn btn-sm btn-info mr-2" href="{{ route('admin.asnwer-patients.show', $asnwerPatient) }}">
                                            {{ trans('global.view') }}
                                        </a>
                                    @endcan
                                    @can('asnwer_patient_edit')
                                        <a class="btn btn-sm btn-success mr-2" href="{{ route('admin.asnwer-patients.edit', $asnwerPatient) }}">
                                            {{ trans('global.edit') }}
                                        </a>
                                    @endcan
                                    @can('asnwer_patient_delete')
                                        <button class="btn btn-sm btn-rose mr-2" type="button" wire:click="confirm('delete', {{ $asnwerPatient->id }})" wire:loading.attr="disabled">
                                            {{ trans('global.delete') }}
                                        </button>
                                    @endcan
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="10">No entries found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <div class="card-body">
        <div class="pt-3">
            @if($this->selectedCount)
                <p class="text-sm leading-5">
                    <span class="font-medium">
                        {{ $this->selectedCount }}
                    </span>
                    {{ __('Entries selected') }}
                </p>
            @endif
            {{ $asnwerPatients->links() }}
        </div>
    </div>
</div>

@push('scripts')
    <script>
        Livewire.on('confirm', e => {
    if (!confirm("{{ trans('global.areYouSure') }}")) {
        return
    }
@this[e.callback](...e.argv)
})
    </script>
@endpush