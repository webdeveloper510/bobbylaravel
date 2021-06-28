<div>
    <div class="card-controls sm:flex">
        <div class="w-full sm:w-1/2">
            Per page:
            <select wire:model="perPage" class="form-select w-full sm:w-1/6">
                @foreach($paginationOptions as $value)
                    <option value="{{ $value }}">{{ $value }}</option>
                @endforeach
            </select>

            @can('client_delete')
                <button class="btn btn-rose ml-3 disabled:opacity-50 disabled:cursor-not-allowed" type="button" wire:click="confirm('deleteSelected')" wire:loading.attr="disabled" {{ $this->selectedCount ? '' : 'disabled' }}>
                    {{ __('Delete Selected') }}
                </button>
            @endcan

            @can('client_create')
                <x-csv-import route="{{ route('admin.clients.csv.store') }}" />
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
                            {{ trans('cruds.client.fields.id') }}
                            @include('components.table.sort', ['field' => 'id'])
                        </th>
                        <th>
                            {{ trans('cruds.client.fields.client_name') }}
                            @include('components.table.sort', ['field' => 'client_name'])
                        </th>
                        <th>
                            {{ trans('cruds.client.fields.client_type') }}
                            @include('components.table.sort', ['field' => 'client_type.client_type'])
                        </th>
                        <th>
                            {{ trans('cruds.client.fields.address') }}
                            @include('components.table.sort', ['field' => 'address'])
                        </th>
                        <th>
                            {{ trans('cruds.client.fields.address_2') }}
                            @include('components.table.sort', ['field' => 'address_2'])
                        </th>
                        <th>
                            {{ trans('cruds.client.fields.city') }}
                            @include('components.table.sort', ['field' => 'city'])
                        </th>
                        <th>
                            {{ trans('cruds.client.fields.state') }}
                            @include('components.table.sort', ['field' => 'state'])
                        </th>
                        <th>
                            {{ trans('cruds.client.fields.zip_code') }}
                            @include('components.table.sort', ['field' => 'zip_code'])
                        </th>
                        <th>
                            {{ trans('cruds.client.fields.country') }}
                            @include('components.table.sort', ['field' => 'country'])
                        </th>
                        <th>
                            {{ trans('cruds.client.fields.phone_number') }}
                            @include('components.table.sort', ['field' => 'phone_number'])
                        </th>
                        <th>
                            {{ trans('cruds.client.fields.website') }}
                            @include('components.table.sort', ['field' => 'website'])
                        </th>
                        <th>
                            {{ trans('cruds.client.fields.tracker') }}
                            @include('components.table.sort', ['field' => 'tracker'])
                        </th>
                        <th>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($clients as $client)
                        <tr>
                            <td>
                                <input type="checkbox" value="{{ $client->id }}" wire:model="selected">
                            </td>
                            <td>
                                {{ $client->id }}
                            </td>
                            <td>
                                {{ $client->client_name }}
                            </td>
                            <td>
                                @if($client->ClientType)
                                    <span class="badge badge-relationship">{{ $client->ClientType->client_type ?? '' }}</span>
                                @endif
                            </td>
                            <td>
                                {{ $client->address }}
                            </td>
                            <td>
                                {{ $client->address_2 }}
                            </td>
                            <td>
                                {{ $client->city }}
                            </td>
                            <td>
                                {{ $client->state }}
                            </td>
                            <td>
                                {{ $client->zip_code }}
                            </td>
                            <td>
                                {{ $client->country }}
                            </td>
                            <td>
                                {{ $client->phone_number }}
                            </td>
                            <td>
                                {{ $client->website }}
                            </td>
                            <td>
                                {{ $client->tracker }}
                            </td>
                            <td>
                                <div class="flex justify-end">
                                    @can('client_show')
                                        <a class="btn btn-sm btn-info mr-2" href="{{ route('admin.clients.show', $client) }}">
                                            {{ trans('global.view') }}
                                        </a>
                                    @endcan
                                    @can('client_edit')
                                        <a class="btn btn-sm btn-success mr-2" href="{{ route('admin.clients.edit', $client) }}">
                                            {{ trans('global.edit') }}
                                        </a>
                                    @endcan
                                    @can('client_delete')
                                        <button class="btn btn-sm btn-rose mr-2" type="button" wire:click="confirm('delete', {{ $client->id }})" wire:loading.attr="disabled">
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
            {{ $clients->links() }}
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