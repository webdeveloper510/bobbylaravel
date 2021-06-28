<div>
    <div class="card-controls sm:flex">
        <div class="w-full sm:w-1/2">
            Per page:
            <select wire:model="perPage" class="form-select w-full sm:w-1/6">
                @foreach($paginationOptions as $value)
                    <option value="{{ $value }}">{{ $value }}</option>
                @endforeach
            </select>

            @can('order_patient_delete')
                <button class="btn btn-rose ml-3 disabled:opacity-50 disabled:cursor-not-allowed" type="button" wire:click="confirm('deleteSelected')" wire:loading.attr="disabled" {{ $this->selectedCount ? '' : 'disabled' }}>
                    {{ __('Delete Selected') }}
                </button>
            @endcan

            @can('order_patient_create')
                <x-csv-import route="{{ route('admin.order-patients.csv.store') }}" />
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
                            {{ trans('cruds.orderPatient.fields.id') }}
                            @include('components.table.sort', ['field' => 'id'])
                        </th>
                        <th>
                            {{ trans('cruds.orderPatient.fields.patient') }}
                            @include('components.table.sort', ['field' => 'patient.patient'])
                        </th>
                        <th>
                            {{ trans('cruds.orderPatient.fields.order') }}
                            @include('components.table.sort', ['field' => 'order.order'])
                        </th>
                        <th>
                            {{ trans('cruds.orderPatient.fields.diagnosis') }}
                            @include('components.table.sort', ['field' => 'diagnosis'])
                        </th>
                        <th>
                            {{ trans('cruds.orderPatient.fields.other_clinical_trials') }}
                            @include('components.table.sort', ['field' => 'other_clinical_trials'])
                        </th>
                        <th>
                            {{ trans('cruds.orderPatient.fields.qualified') }}
                            @include('components.table.sort', ['field' => 'qualified'])
                        </th>
                        <th>
                            {{ trans('cruds.orderPatient.fields.dnq_reason') }}
                            @include('components.table.sort', ['field' => 'dnq_reason'])
                        </th>
                        <th>
                            {{ trans('cruds.orderPatient.fields.patient_status') }}
                            @include('components.table.sort', ['field' => 'patient_status.status'])
                        </th>
                        <th>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($orderPatients as $orderPatient)
                        <tr>
                            <td>
                                <input type="checkbox" value="{{ $orderPatient->id }}" wire:model="selected">
                            </td>
                            <td>
                                {{ $orderPatient->id }}
                            </td>
                            <td>
                                @if($orderPatient->Patient)
                                    <span class="badge badge-relationship">{{ $orderPatient->Patient->patient ?? '' }}</span>
                                @endif
                            </td>
                            <td>
                                @if($orderPatient->Order)
                                    <span class="badge badge-relationship">{{ $orderPatient->Order->order ?? '' }}</span>
                                @endif
                            </td>
                            <td>
                                <input class="disabled:opacity-50 disabled:cursor-not-allowed" type="checkbox" disabled {{ $orderPatient->diagnosis ? 'checked' : '' }}>
                            </td>
                            <td>
                                <input class="disabled:opacity-50 disabled:cursor-not-allowed" type="checkbox" disabled {{ $orderPatient->other_clinical_trials ? 'checked' : '' }}>
                            </td>
                            <td>
                                <input class="disabled:opacity-50 disabled:cursor-not-allowed" type="checkbox" disabled {{ $orderPatient->qualified ? 'checked' : '' }}>
                            </td>
                            <td>
                                {{ $orderPatient->dnq_reason }}
                            </td>
                            <td>
                                @if($orderPatient->PatientStatus)
                                    <span class="badge badge-relationship">{{ $orderPatient->PatientStatus->status ?? '' }}</span>
                                @endif
                            </td>
                            <td>
                                <div class="flex justify-end">
                                    @can('order_patient_show')
                                        <a class="btn btn-sm btn-info mr-2" href="{{ route('admin.order-patients.show', $orderPatient) }}">
                                            {{ trans('global.view') }}
                                        </a>
                                    @endcan
                                    @can('order_patient_edit')
                                        <a class="btn btn-sm btn-success mr-2" href="{{ route('admin.order-patients.edit', $orderPatient) }}">
                                            {{ trans('global.edit') }}
                                        </a>
                                    @endcan
                                    @can('order_patient_delete')
                                        <button class="btn btn-sm btn-rose mr-2" type="button" wire:click="confirm('delete', {{ $orderPatient->id }})" wire:loading.attr="disabled">
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
            {{ $orderPatients->links() }}
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