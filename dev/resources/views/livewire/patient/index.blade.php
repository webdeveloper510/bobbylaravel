<div>
    <div class="card-controls sm:flex">
        <div class="w-full sm:w-1/2">
            Per page:
            <select wire:model="perPage" class="form-select w-full sm:w-1/6">
                @foreach($paginationOptions as $value)
                    <option value="{{ $value }}">{{ $value }}</option>
                @endforeach
            </select>

            @can('patient_delete')
                <button class="btn btn-rose ml-3 disabled:opacity-50 disabled:cursor-not-allowed" type="button" wire:click="confirm('deleteSelected')" wire:loading.attr="disabled" {{ $this->selectedCount ? '' : 'disabled' }}>
                    {{ __('Delete Selected') }}
                </button>
            @endcan

            @can('patient_create')
                <x-csv-import route="{{ route('admin.patients.csv.store') }}" />
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
                            {{ trans('cruds.patient.fields.id') }}
                            @include('components.table.sort', ['field' => 'id'])
                        </th>
                        <th>
                            {{ trans('cruds.patient.fields.role') }}
                        </th>
                        <th>
                            {{ trans('cruds.patient.fields.user') }}
                            @include('components.table.sort', ['field' => 'user.email'])
                        </th>
                        <th>
                            {{ trans('cruds.patient.fields.patient') }}
                            @include('components.table.sort', ['field' => 'patient'])
                        </th>
                        <th>
                            {{ trans('cruds.patient.fields.birth_date') }}
                            @include('components.table.sort', ['field' => 'birth_date'])
                        </th>
                        <th>
                            {{ trans('cruds.patient.fields.height_ft') }}
                            @include('components.table.sort', ['field' => 'height_ft'])
                        </th>
                        <th>
                            {{ trans('cruds.patient.fields.height_in') }}
                            @include('components.table.sort', ['field' => 'height_in'])
                        </th>
                        <th>
                            {{ trans('cruds.patient.fields.weight') }}
                            @include('components.table.sort', ['field' => 'weight'])
                        </th>
                        <th>
                            {{ trans('cruds.patient.fields.bmi') }}
                            @include('components.table.sort', ['field' => 'bmi'])
                        </th>
                        <th>
                            {{ trans('cruds.patient.fields.gender') }}
                            @include('components.table.sort', ['field' => 'gender.gender'])
                        </th>
                        <th>
                            {{ trans('cruds.patient.fields.ethnicity') }}
                            @include('components.table.sort', ['field' => 'ethnicity.ethnicity'])
                        </th>
                        <th>
                            {{ trans('cruds.patient.fields.contact_method') }}
                        </th>
                        <th>
                            {{ trans('cruds.patient.fields.contact_time') }}
                        </th>
                        <th>
                            {{ trans('cruds.patient.fields.distance') }}
                            @include('components.table.sort', ['field' => 'distance.distance'])
                        </th>
                        <th>
                            {{ trans('cruds.patient.fields.zip_code') }}
                            @include('components.table.sort', ['field' => 'zip_code'])
                        </th>
                        <th>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($patients as $patient)
                        <tr>
                            <td>
                                <input type="checkbox" value="{{ $patient->id }}" wire:model="selected">
                            </td>
                            <td>
                                {{ $patient->id }}
                            </td>
                            <td>
                                @foreach($patient->role as $key => $entry)
                                    <span class="badge badge-relationship">{{ $entry->title }}</span>
                                @endforeach
                            </td>
                            <td>
                                @if($patient->User)
                                    <span class="badge badge-relationship">{{ $patient->User->email ?? '' }}</span>
                                @endif
                            </td>
                            <td>
                                {{ $patient->patient }}
                            </td>
                            <td>
                                {{ $patient->birth_date }}
                            </td>
                            <td>
                                {{ $patient->height_ft }}
                            </td>
                            <td>
                                {{ $patient->height_in }}
                            </td>
                            <td>
                                {{ $patient->weight }}
                            </td>
                            <td>
                                {{ $patient->bmi }}
                            </td>
                            <td>
                                @if($patient->Gender)
                                    <span class="badge badge-relationship">{{ $patient->Gender->gender ?? '' }}</span>
                                @endif
                            </td>
                            <td>
                                @if($patient->Ethnicity)
                                    <span class="badge badge-relationship">{{ $patient->Ethnicity->ethnicity ?? '' }}</span>
                                @endif
                            </td>
                            <td>
                                @foreach($patient->contact_method as $key => $entry)
                                    <span class="badge badge-relationship">{{ $entry->contact_method }}</span>
                                @endforeach
                            </td>
                            <td>
                                @foreach($patient->contact_time as $key => $entry)
                                    <span class="badge badge-relationship">{{ $entry->contact_time }}</span>
                                @endforeach
                            </td>
                            <td>
                                @if($patient->Distance)
                                    <span class="badge badge-relationship">{{ $patient->Distance->distance ?? '' }}</span>
                                @endif
                            </td>
                            <td>
                                {{ $patient->zip_code }}
                            </td>
                            <td>
                                <div class="flex justify-end">
                                    @can('patient_show')
                                        <a class="btn btn-sm btn-info mr-2" href="{{ route('admin.patients.show', $patient) }}">
                                            {{ trans('global.view') }}
                                        </a>
                                    @endcan
                                    @can('patient_edit')
                                        <a class="btn btn-sm btn-success mr-2" href="{{ route('admin.patients.edit', $patient) }}">
                                            {{ trans('global.edit') }}
                                        </a>
                                    @endcan
                                    @can('patient_delete')
                                        <button class="btn btn-sm btn-rose mr-2" type="button" wire:click="confirm('delete', {{ $patient->id }})" wire:loading.attr="disabled">
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
            {{ $patients->links() }}
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