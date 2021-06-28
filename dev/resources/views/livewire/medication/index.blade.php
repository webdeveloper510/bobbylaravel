<div>
    <div class="card-controls sm:flex">
        <div class="w-full sm:w-1/2">
            Per page:
            <select wire:model="perPage" class="form-select w-full sm:w-1/6">
                @foreach($paginationOptions as $value)
                    <option value="{{ $value }}">{{ $value }}</option>
                @endforeach
            </select>

            @can('medication_delete')
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
                            {{ trans('cruds.medication.fields.id') }}
                            @include('components.table.sort', ['field' => 'id'])
                        </th>
                        <th>
                            {{ trans('cruds.medication.fields.brand_name') }}
                            @include('components.table.sort', ['field' => 'brand_name'])
                        </th>
                        <th>
                            {{ trans('cruds.medication.fields.sponsor_name') }}
                            @include('components.table.sort', ['field' => 'sponsor_name'])
                        </th>
                        <th>
                            {{ trans('cruds.medication.fields.application_number') }}
                            @include('components.table.sort', ['field' => 'application_number'])
                        </th>
                        <th>
                            {{ trans('cruds.medication.fields.dosage_form') }}
                            @include('components.table.sort', ['field' => 'dosage_form'])
                        </th>
                        <th>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($medications as $medication)
                        <tr>
                            <td>
                                <input type="checkbox" value="{{ $medication->id }}" wire:model="selected">
                            </td>
                            <td>
                                {{ $medication->id }}
                            </td>
                            <td>
                                {{ $medication->brand_name }}
                            </td>
                            <td>
                                {{ $medication->sponsor_name }}
                            </td>
                            <td>
                                {{ $medication->application_number }}
                            </td>
                            <td>
                                {{ $medication->dosage_form }}
                            </td>
                            <td>
                                <div class="flex justify-end">
                                    @can('medication_show')
                                        <a class="btn btn-sm btn-info mr-2" href="{{ route('admin.medications.show', $medication) }}">
                                            {{ trans('global.view') }}
                                        </a>
                                    @endcan
                                    @can('medication_edit')
                                        <a class="btn btn-sm btn-success mr-2" href="{{ route('admin.medications.edit', $medication) }}">
                                            {{ trans('global.edit') }}
                                        </a>
                                    @endcan
                                    @can('medication_delete')
                                        <button class="btn btn-sm btn-rose mr-2" type="button" wire:click="confirm('delete', {{ $medication->id }})" wire:loading.attr="disabled">
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
            {{ $medications->links() }}
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