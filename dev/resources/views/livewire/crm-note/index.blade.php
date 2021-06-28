<div>
    <div class="card-controls sm:flex">
        <div class="w-full sm:w-1/2">
            Per page:
            <select wire:model="perPage" class="form-select w-full sm:w-1/6">
                @foreach($paginationOptions as $value)
                    <option value="{{ $value }}">{{ $value }}</option>
                @endforeach
            </select>

            @can('crm_note_delete')
                <button class="btn btn-rose ml-3 disabled:opacity-50 disabled:cursor-not-allowed" type="button" wire:click="confirm('deleteSelected')" wire:loading.attr="disabled" {{ $this->selectedCount ? '' : 'disabled' }}>
                    {{ __('Delete Selected') }}
                </button>
            @endcan

            @can('crm_note_create')
                <x-csv-import route="{{ route('admin.crm-notes.csv.store') }}" />
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
                            {{ trans('cruds.crmNote.fields.id') }}
                            @include('components.table.sort', ['field' => 'id'])
                        </th>
                        <th>
                            {{ trans('cruds.crmNote.fields.customer') }}
                            @include('components.table.sort', ['field' => 'customer.first_name'])
                        </th>
                        <th>
                            {{ trans('cruds.crmNote.fields.note') }}
                            @include('components.table.sort', ['field' => 'note'])
                        </th>
                        <th>
                            {{ trans('cruds.crmNote.fields.patient_contact_logs') }}
                        </th>
                        <th>
                            {{ trans('cruds.crmNote.fields.patient_status') }}
                        </th>
                        <th>
                            {{ trans('cruds.crmNote.fields.patient') }}
                        </th>
                        <th>
                            {{ trans('cruds.crmNote.fields.client') }}
                            @include('components.table.sort', ['field' => 'client.client_name'])
                        </th>
                        <th>
                            {{ trans('cruds.crmNote.fields.order') }}
                            @include('components.table.sort', ['field' => 'order.order'])
                        </th>
                        <th>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($crmNotes as $crmNote)
                        <tr>
                            <td>
                                <input type="checkbox" value="{{ $crmNote->id }}" wire:model="selected">
                            </td>
                            <td>
                                {{ $crmNote->id }}
                            </td>
                            <td>
                                @if($crmNote->Customer)
                                    <span class="badge badge-relationship">{{ $crmNote->Customer->first_name ?? '' }}</span>
                                @endif
                            </td>
                            <td>
                                {{ $crmNote->note }}
                            </td>
                            <td>
                                @foreach($crmNote->patient_contact_logs as $key => $entry)
                                    <span class="badge badge-relationship">{{ $entry->note }}</span>
                                @endforeach
                            </td>
                            <td>
                                @foreach($crmNote->patient_status as $key => $entry)
                                    <span class="badge badge-relationship">{{ $entry->status }}</span>
                                @endforeach
                            </td>
                            <td>
                                @foreach($crmNote->patient as $key => $entry)
                                    <span class="badge badge-relationship">{{ $entry->patient }}</span>
                                @endforeach
                            </td>
                            <td>
                                @if($crmNote->Client)
                                    <span class="badge badge-relationship">{{ $crmNote->Client->client_name ?? '' }}</span>
                                @endif
                            </td>
                            <td>
                                @if($crmNote->Order)
                                    <span class="badge badge-relationship">{{ $crmNote->Order->order ?? '' }}</span>
                                @endif
                            </td>
                            <td>
                                <div class="flex justify-end">
                                    @can('crm_note_show')
                                        <a class="btn btn-sm btn-info mr-2" href="{{ route('admin.crm-notes.show', $crmNote) }}">
                                            {{ trans('global.view') }}
                                        </a>
                                    @endcan
                                    @can('crm_note_edit')
                                        <a class="btn btn-sm btn-success mr-2" href="{{ route('admin.crm-notes.edit', $crmNote) }}">
                                            {{ trans('global.edit') }}
                                        </a>
                                    @endcan
                                    @can('crm_note_delete')
                                        <button class="btn btn-sm btn-rose mr-2" type="button" wire:click="confirm('delete', {{ $crmNote->id }})" wire:loading.attr="disabled">
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
            {{ $crmNotes->links() }}
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