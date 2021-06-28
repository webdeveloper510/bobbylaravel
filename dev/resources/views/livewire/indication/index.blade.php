<div>
    <div class="card-controls sm:flex">
        <div class="w-full sm:w-1/2">
            Per page:
            <select wire:model="perPage" class="form-select w-full sm:w-1/6">
                @foreach($paginationOptions as $value)
                    <option value="{{ $value }}">{{ $value }}</option>
                @endforeach
            </select>

            @can('indication_delete')
                <button class="btn btn-rose ml-3 disabled:opacity-50 disabled:cursor-not-allowed" type="button" wire:click="confirm('deleteSelected')" wire:loading.attr="disabled" {{ $this->selectedCount ? '' : 'disabled' }}>
                    {{ __('Delete Selected') }}
                </button>
            @endcan

            @can('indication_create')
                <x-csv-import route="{{ route('admin.indications.csv.store') }}" />
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
                            {{ trans('cruds.indication.fields.id') }}
                            @include('components.table.sort', ['field' => 'id'])
                        </th>
                        <th>
                            {{ trans('cruds.indication.fields.indication') }}
                            @include('components.table.sort', ['field' => 'indication'])
                        </th>
                        <th>
                            {{ trans('cruds.indication.fields.therapeutic_area') }}
                            @include('components.table.sort', ['field' => 'therapeutic_area.therapeutic_area'])
                        </th>
                        <th>
                            {{ trans('cruds.indication.fields.description') }}
                            @include('components.table.sort', ['field' => 'description'])
                        </th>
                        <th>
                            {{ trans('cruds.indication.fields.symptoms') }}
                            @include('components.table.sort', ['field' => 'symptoms'])
                        </th>
                        <th>
                            {{ trans('cruds.indication.fields.causes') }}
                            @include('components.table.sort', ['field' => 'causes'])
                        </th>
                        <th>
                            {{ trans('cruds.indication.fields.treatments') }}
                            @include('components.table.sort', ['field' => 'treatments'])
                        </th>
                        <th>
                            {{ trans('cruds.indication.fields.risk_factors') }}
                            @include('components.table.sort', ['field' => 'risk_factors'])
                        </th>
                        <th>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($indications as $indication)
                        <tr>
                            <td>
                                <input type="checkbox" value="{{ $indication->id }}" wire:model="selected">
                            </td>
                            <td>
                                {{ $indication->id }}
                            </td>
                            <td>
                                {{ $indication->indication }}
                            </td>
                            <td>
                                @if($indication->TherapeuticArea)
                                    <span class="badge badge-relationship">{{ $indication->TherapeuticArea->therapeutic_area ?? '' }}</span>
                                @endif
                            </td>
                            <td>
                                {{ $indication->description }}
                            </td>
                            <td>
                                {{ $indication->symptoms_label }}
                            </td>
                            <td>
                                {{ $indication->causes }}
                            </td>
                            <td>
                                {{ $indication->treatments_label }}
                            </td>
                            <td>
                                {{ $indication->risk_factors_label }}
                            </td>
                            <td>
                                <div class="flex justify-end">
                                    @can('indication_show')
                                        <a class="btn btn-sm btn-info mr-2" href="{{ route('admin.indications.show', $indication) }}">
                                            {{ trans('global.view') }}
                                        </a>
                                    @endcan
                                    @can('indication_edit')
                                        <a class="btn btn-sm btn-success mr-2" href="{{ route('admin.indications.edit', $indication) }}">
                                            {{ trans('global.edit') }}
                                        </a>
                                    @endcan
                                    @can('indication_delete')
                                        <button class="btn btn-sm btn-rose mr-2" type="button" wire:click="confirm('delete', {{ $indication->id }})" wire:loading.attr="disabled">
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
            {{ $indications->links() }}
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