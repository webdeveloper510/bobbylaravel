<div>
    <div class="card-controls sm:flex">
        <div class="w-full sm:w-1/2">
            Per page:
            <select wire:model="perPage" class="form-select w-full sm:w-1/6">
                @foreach($paginationOptions as $value)
                    <option value="{{ $value }}">{{ $value }}</option>
                @endforeach
            </select>

            @can('indication_patient_delete')
                <button class="btn btn-rose ml-3 disabled:opacity-50 disabled:cursor-not-allowed" type="button" wire:click="confirm('deleteSelected')" wire:loading.attr="disabled" {{ $this->selectedCount ? '' : 'disabled' }}>
                    {{ __('Delete Selected') }}
                </button>
            @endcan

            @can('indication_patient_create')
                <x-csv-import route="{{ route('admin.indication-patients.csv.store') }}" />
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
                            {{ trans('cruds.indicationPatient.fields.id') }}
                            @include('components.table.sort', ['field' => 'id'])
                        </th>
                        <th>
                            {{ trans('cruds.indicationPatient.fields.patient') }}
                            @include('components.table.sort', ['field' => 'patient.patient'])
                        </th>
                        <th>
                            {{ trans('cruds.indicationPatient.fields.indication') }}
                            @include('components.table.sort', ['field' => 'indication.indication'])
                        </th>
                        <th>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($indicationPatients as $indicationPatient)
                        <tr>
                            <td>
                                <input type="checkbox" value="{{ $indicationPatient->id }}" wire:model="selected">
                            </td>
                            <td>
                                {{ $indicationPatient->id }}
                            </td>
                            <td>
                                @if($indicationPatient->Patient)
                                    <span class="badge badge-relationship">{{ $indicationPatient->Patient->patient ?? '' }}</span>
                                @endif
                            </td>
                            <td>
                                @if($indicationPatient->Indication)
                                    <span class="badge badge-relationship">{{ $indicationPatient->Indication->indication ?? '' }}</span>
                                @endif
                            </td>
                            <td>
                                <div class="flex justify-end">
                                    @can('indication_patient_show')
                                        <a class="btn btn-sm btn-info mr-2" href="{{ route('admin.indication-patients.show', $indicationPatient) }}">
                                            {{ trans('global.view') }}
                                        </a>
                                    @endcan
                                    @can('indication_patient_edit')
                                        <a class="btn btn-sm btn-success mr-2" href="{{ route('admin.indication-patients.edit', $indicationPatient) }}">
                                            {{ trans('global.edit') }}
                                        </a>
                                    @endcan
                                    @can('indication_patient_delete')
                                        <button class="btn btn-sm btn-rose mr-2" type="button" wire:click="confirm('delete', {{ $indicationPatient->id }})" wire:loading.attr="disabled">
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
            {{ $indicationPatients->links() }}
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