<div>
    <div class="card-controls sm:flex">
        <div class="w-full sm:w-1/2">
            Per page:
            <select wire:model="perPage" class="form-select w-full sm:w-1/6">
                @foreach($paginationOptions as $value)
                    <option value="{{ $value }}">{{ $value }}</option>
                @endforeach
            </select>

            @can('medication_patient_delete')
                <button class="btn btn-rose ml-3 disabled:opacity-50 disabled:cursor-not-allowed" type="button" wire:click="confirm('deleteSelected')" wire:loading.attr="disabled" {{ $this->selectedCount ? '' : 'disabled' }}>
                    {{ __('Delete Selected') }}
                </button>
            @endcan

            @can('medication_patient_create')
                <x-csv-import route="{{ route('admin.medication-patients.csv.store') }}" />
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
                            {{ trans('cruds.medicationPatient.fields.id') }}
                            @include('components.table.sort', ['field' => 'id'])
                        </th>
                        <th>
                            {{ trans('cruds.medicationPatient.fields.patient') }}
                            @include('components.table.sort', ['field' => 'patient.patient'])
                        </th>
                        <th>
                            {{ trans('cruds.medicationPatient.fields.medication') }}
                            @include('components.table.sort', ['field' => 'medication.brand_name'])
                        </th>
                        <th>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($medicationPatients as $medicationPatient)
                        <tr>
                            <td>
                                <input type="checkbox" value="{{ $medicationPatient->id }}" wire:model="selected">
                            </td>
                            <td>
                                {{ $medicationPatient->id }}
                            </td>
                            <td>
                                @if($medicationPatient->Patient)
                                    <span class="badge badge-relationship">{{ $medicationPatient->Patient->patient ?? '' }}</span>
                                @endif
                            </td>
                            <td>
                                @if($medicationPatient->Medication)
                                    <span class="badge badge-relationship">{{ $medicationPatient->Medication->brand_name ?? '' }}</span>
                                @endif
                            </td>
                            <td>
                                <div class="flex justify-end">
                                    @can('medication_patient_show')
                                        <a class="btn btn-sm btn-info mr-2" href="{{ route('admin.medication-patients.show', $medicationPatient) }}">
                                            {{ trans('global.view') }}
                                        </a>
                                    @endcan
                                    @can('medication_patient_edit')
                                        <a class="btn btn-sm btn-success mr-2" href="{{ route('admin.medication-patients.edit', $medicationPatient) }}">
                                            {{ trans('global.edit') }}
                                        </a>
                                    @endcan
                                    @can('medication_patient_delete')
                                        <button class="btn btn-sm btn-rose mr-2" type="button" wire:click="confirm('delete', {{ $medicationPatient->id }})" wire:loading.attr="disabled">
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
            {{ $medicationPatients->links() }}
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