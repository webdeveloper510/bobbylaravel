<div>
    <div class="card-controls sm:flex">
        <div class="w-full sm:w-1/2">
            Per page:
            <select wire:model="perPage" class="form-select w-full sm:w-1/6">
                @foreach($paginationOptions as $value)
                    <option value="{{ $value }}">{{ $value }}</option>
                @endforeach
            </select>

            @can('patient_source_delete')
                <button class="btn btn-rose ml-3 disabled:opacity-50 disabled:cursor-not-allowed" type="button" wire:click="confirm('deleteSelected')" wire:loading.attr="disabled" {{ $this->selectedCount ? '' : 'disabled' }}>
                    {{ __('Delete Selected') }}
                </button>
            @endcan

            @can('patient_source_create')
                <x-csv-import route="{{ route('admin.patient-sources.csv.store') }}" />
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
                            {{ trans('cruds.patientSource.fields.id') }}
                            @include('components.table.sort', ['field' => 'id'])
                        </th>
                        <th>
                            {{ trans('cruds.patientSource.fields.patient') }}
                            @include('components.table.sort', ['field' => 'patient.patient'])
                        </th>
                        <th>
                            {{ trans('cruds.patientSource.fields.order') }}
                            @include('components.table.sort', ['field' => 'order.order'])
                        </th>
                        <th>
                            {{ trans('cruds.patientSource.fields.order_patient') }}
                            @include('components.table.sort', ['field' => 'order_patient.qualified'])
                        </th>
                        <th>
                            {{ trans('cruds.patientSource.fields.ip_address') }}
                            @include('components.table.sort', ['field' => 'ip_address'])
                        </th>
                        <th>
                            {{ trans('cruds.patientSource.fields.url_referrer') }}
                            @include('components.table.sort', ['field' => 'url_referrer'])
                        </th>
                        <th>
                            {{ trans('cruds.patientSource.fields.utm_campaign') }}
                            @include('components.table.sort', ['field' => 'utm_campaign'])
                        </th>
                        <th>
                            {{ trans('cruds.patientSource.fields.utm_content') }}
                            @include('components.table.sort', ['field' => 'utm_content'])
                        </th>
                        <th>
                            {{ trans('cruds.patientSource.fields.utm_medium') }}
                            @include('components.table.sort', ['field' => 'utm_medium'])
                        </th>
                        <th>
                            {{ trans('cruds.patientSource.fields.utm_source') }}
                            @include('components.table.sort', ['field' => 'utm_source'])
                        </th>
                        <th>
                            {{ trans('cruds.patientSource.fields.utm_term') }}
                            @include('components.table.sort', ['field' => 'utm_term'])
                        </th>
                        <th>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($patientSources as $patientSource)
                        <tr>
                            <td>
                                <input type="checkbox" value="{{ $patientSource->id }}" wire:model="selected">
                            </td>
                            <td>
                                {{ $patientSource->id }}
                            </td>
                            <td>
                                @if($patientSource->Patient)
                                    <span class="badge badge-relationship">{{ $patientSource->Patient->patient ?? '' }}</span>
                                @endif
                            </td>
                            <td>
                                @if($patientSource->Order)
                                    <span class="badge badge-relationship">{{ $patientSource->Order->order ?? '' }}</span>
                                @endif
                            </td>
                            <td>
                                @if($patientSource->OrderPatient)
                                    <span class="badge badge-relationship">{{ $patientSource->OrderPatient->qualified ?? '' }}</span>
                                @endif
                            </td>
                            <td>
                                {{ $patientSource->ip_address }}
                            </td>
                            <td>
                                {{ $patientSource->url_referrer }}
                            </td>
                            <td>
                                {{ $patientSource->utm_campaign }}
                            </td>
                            <td>
                                {{ $patientSource->utm_content }}
                            </td>
                            <td>
                                {{ $patientSource->utm_medium }}
                            </td>
                            <td>
                                {{ $patientSource->utm_source }}
                            </td>
                            <td>
                                {{ $patientSource->utm_term }}
                            </td>
                            <td>
                                <div class="flex justify-end">
                                    @can('patient_source_show')
                                        <a class="btn btn-sm btn-info mr-2" href="{{ route('admin.patient-sources.show', $patientSource) }}">
                                            {{ trans('global.view') }}
                                        </a>
                                    @endcan
                                    @can('patient_source_edit')
                                        <a class="btn btn-sm btn-success mr-2" href="{{ route('admin.patient-sources.edit', $patientSource) }}">
                                            {{ trans('global.edit') }}
                                        </a>
                                    @endcan
                                    @can('patient_source_delete')
                                        <button class="btn btn-sm btn-rose mr-2" type="button" wire:click="confirm('delete', {{ $patientSource->id }})" wire:loading.attr="disabled">
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
            {{ $patientSources->links() }}
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