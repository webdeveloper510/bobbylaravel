<div>
    <div class="card-controls sm:flex">
        <div class="w-full sm:w-1/2">
            Per page:
            <select wire:model="perPage" class="form-select w-full sm:w-1/6">
                @foreach($paginationOptions as $value)
                    <option value="{{ $value }}">{{ $value }}</option>
                @endforeach
            </select>

            @can('patient_contact_log_delete')
                <button class="btn btn-rose ml-3 disabled:opacity-50 disabled:cursor-not-allowed" type="button" wire:click="confirm('deleteSelected')" wire:loading.attr="disabled" {{ $this->selectedCount ? '' : 'disabled' }}>
                    {{ __('Delete Selected') }}
                </button>
            @endcan

            @can('patient_contact_log_create')
                <x-csv-import route="{{ route('admin.patient-contact-logs.csv.store') }}" />
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
                            {{ trans('cruds.patientContactLog.fields.id') }}
                            @include('components.table.sort', ['field' => 'id'])
                        </th>
                        <th>
                            {{ trans('cruds.patientContactLog.fields.order_patient') }}
                            @include('components.table.sort', ['field' => 'order_patient.qualified'])
                        </th>
                        <th>
                            {{ trans('cruds.patientContactLog.fields.patient_status') }}
                            @include('components.table.sort', ['field' => 'patient_status.status'])
                        </th>
                        <th>
                            {{ trans('cruds.patientContactLog.fields.note') }}
                            @include('components.table.sort', ['field' => 'note'])
                        </th>
                        <th>
                            {{ trans('cruds.patientContactLog.fields.user') }}
                            @include('components.table.sort', ['field' => 'user.email'])
                        </th>
                        <th>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($patientContactLogs as $patientContactLog)
                        <tr>
                            <td>
                                <input type="checkbox" value="{{ $patientContactLog->id }}" wire:model="selected">
                            </td>
                            <td>
                                {{ $patientContactLog->id }}
                            </td>
                            <td>
                                @if($patientContactLog->OrderPatient)
                                    <span class="badge badge-relationship">{{ $patientContactLog->OrderPatient->qualified ?? '' }}</span>
                                @endif
                            </td>
                            <td>
                                @if($patientContactLog->PatientStatus)
                                    <span class="badge badge-relationship">{{ $patientContactLog->PatientStatus->status ?? '' }}</span>
                                @endif
                            </td>
                            <td>
                                {{ $patientContactLog->note }}
                            </td>
                            <td>
                                @if($patientContactLog->User)
                                    <span class="badge badge-relationship">{{ $patientContactLog->User->email ?? '' }}</span>
                                @endif
                            </td>
                            <td>
                                <div class="flex justify-end">
                                    @can('patient_contact_log_show')
                                        <a class="btn btn-sm btn-info mr-2" href="{{ route('admin.patient-contact-logs.show', $patientContactLog) }}">
                                            {{ trans('global.view') }}
                                        </a>
                                    @endcan
                                    @can('patient_contact_log_edit')
                                        <a class="btn btn-sm btn-success mr-2" href="{{ route('admin.patient-contact-logs.edit', $patientContactLog) }}">
                                            {{ trans('global.edit') }}
                                        </a>
                                    @endcan
                                    @can('patient_contact_log_delete')
                                        <button class="btn btn-sm btn-rose mr-2" type="button" wire:click="confirm('delete', {{ $patientContactLog->id }})" wire:loading.attr="disabled">
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
            {{ $patientContactLogs->links() }}
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