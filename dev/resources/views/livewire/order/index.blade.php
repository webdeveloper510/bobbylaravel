<div>
    <div class="card-controls sm:flex">
        <div class="w-full sm:w-1/2">
            Per page:
            <select wire:model="perPage" class="form-select w-full sm:w-1/6">
                @foreach($paginationOptions as $value)
                    <option value="{{ $value }}">{{ $value }}</option>
                @endforeach
            </select>

            @can('order_delete')
                <button class="btn btn-rose ml-3 disabled:opacity-50 disabled:cursor-not-allowed" type="button" wire:click="confirm('deleteSelected')" wire:loading.attr="disabled" {{ $this->selectedCount ? '' : 'disabled' }}>
                    {{ __('Delete Selected') }}
                </button>
            @endcan

            @can('order_create')
                <x-csv-import route="{{ route('admin.orders.csv.store') }}" />
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
                            {{ trans('cruds.order.fields.id') }}
                            @include('components.table.sort', ['field' => 'id'])
                        </th>
                        <th>
                            {{ trans('cruds.order.fields.order') }}
                            @include('components.table.sort', ['field' => 'order'])
                        </th>
                        <th>
                            {{ trans('cruds.order.fields.client_id_bill') }}
                            @include('components.table.sort', ['field' => 'client_id_bill.client_name'])
                        </th>
                        <th>
                            {{ trans('cruds.order.fields.client_id_ship') }}
                            @include('components.table.sort', ['field' => 'client_id_ship.client_name'])
                        </th>
                        <th>
                            {{ trans('cruds.order.fields.sponsor') }}
                            @include('components.table.sort', ['field' => 'sponsor.sponsor'])
                        </th>
                        <th>
                            {{ trans('cruds.order.fields.protocol') }}
                            @include('components.table.sort', ['field' => 'protocol.protocol'])
                        </th>
                        <th>
                            {{ trans('cruds.order.fields.cro') }}
                            @include('components.table.sort', ['field' => 'cro.cro_name'])
                        </th>
                        <th>
                            {{ trans('cruds.order.fields.package') }}
                        </th>
                        <th>
                            {{ trans('cruds.order.fields.referral_guarantee') }}
                            @include('components.table.sort', ['field' => 'referral_guarantee'])
                        </th>
                        <th>
                            {{ trans('cruds.order.fields.start_date') }}
                            @include('components.table.sort', ['field' => 'start_date'])
                        </th>
                        <th>
                            {{ trans('cruds.order.fields.end_date') }}
                            @include('components.table.sort', ['field' => 'end_date'])
                        </th>
                        <th>
                            {{ trans('cruds.order.fields.minimum_age') }}
                            @include('components.table.sort', ['field' => 'minimum_age'])
                        </th>
                        <th>
                            {{ trans('cruds.order.fields.maximum_age') }}
                            @include('components.table.sort', ['field' => 'maximum_age'])
                        </th>
                        <th>
                            {{ trans('cruds.order.fields.minimum_bmi') }}
                            @include('components.table.sort', ['field' => 'minimum_bmi'])
                        </th>
                        <th>
                            {{ trans('cruds.order.fields.maximum_bmi') }}
                            @include('components.table.sort', ['field' => 'maximum_bmi'])
                        </th>
                        <th>
                            {{ trans('cruds.order.fields.gender') }}
                            @include('components.table.sort', ['field' => 'gender.gender'])
                        </th>
                        <th>
                            {{ trans('cruds.order.fields.coupon_code') }}
                            @include('components.table.sort', ['field' => 'coupon_code'])
                        </th>
                        <th>
                            {{ trans('cruds.order.fields.discount_rate') }}
                            @include('components.table.sort', ['field' => 'discount_rate'])
                        </th>
                        <th>
                            {{ trans('cruds.order.fields.sub_total_price') }}
                            @include('components.table.sort', ['field' => 'sub_total_price'])
                        </th>
                        <th>
                            {{ trans('cruds.order.fields.total_price') }}
                            @include('components.table.sort', ['field' => 'total_price'])
                        </th>
                        <th>
                            {{ trans('cruds.order.fields.payment_type') }}
                            @include('components.table.sort', ['field' => 'payment_type'])
                        </th>
                        <th>
                            {{ trans('cruds.order.fields.credit_card') }}
                            @include('components.table.sort', ['field' => 'credit_card'])
                        </th>
                        <th>
                            {{ trans('cruds.order.fields.stripe_confirmation') }}
                            @include('components.table.sort', ['field' => 'stripe_confirmation'])
                        </th>
                        <th>
                            {{ trans('cruds.order.fields.recruitment_emails') }}
                        </th>
                        <th>
                            {{ trans('cruds.order.fields.notes') }}
                            @include('components.table.sort', ['field' => 'notes'])
                        </th>
                        <th>
                            {{ trans('cruds.order.fields.images') }}
                            @include('components.table.sort', ['field' => 'images.title'])
                        </th>
                        <th>
                            {{ trans('cruds.order.fields.order_status') }}
                            @include('components.table.sort', ['field' => 'order_status.status'])
                        </th>
                        <th>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($orders as $order)
                        <tr>
                            <td>
                                <input type="checkbox" value="{{ $order->id }}" wire:model="selected">
                            </td>
                            <td>
                                {{ $order->id }}
                            </td>
                            <td>
                                {{ $order->order }}
                            </td>
                            <td>
                                @if($order->ClientIdBill)
                                    <span class="badge badge-relationship">{{ $order->ClientIdBill->client_name ?? '' }}</span>
                                @endif
                            </td>
                            <td>
                                @if($order->ClientIdShip)
                                    <span class="badge badge-relationship">{{ $order->ClientIdShip->client_name ?? '' }}</span>
                                @endif
                            </td>
                            <td>
                                @if($order->Sponsor)
                                    <span class="badge badge-relationship">{{ $order->Sponsor->sponsor ?? '' }}</span>
                                @endif
                            </td>
                            <td>
                                @if($order->Protocol)
                                    <span class="badge badge-relationship">{{ $order->Protocol->protocol ?? '' }}</span>
                                @endif
                            </td>
                            <td>
                                @if($order->Cro)
                                    <span class="badge badge-relationship">{{ $order->Cro->cro_name ?? '' }}</span>
                                @endif
                            </td>
                            <td>
                                @foreach($order->package as $key => $entry)
                                    <span class="badge badge-relationship">{{ $entry->package }}</span>
                                @endforeach
                            </td>
                            <td>
                                {{ $order->referral_guarantee }}
                            </td>
                            <td>
                                {{ $order->start_date }}
                            </td>
                            <td>
                                {{ $order->end_date }}
                            </td>
                            <td>
                                {{ $order->minimum_age }}
                            </td>
                            <td>
                                {{ $order->maximum_age }}
                            </td>
                            <td>
                                {{ $order->minimum_bmi }}
                            </td>
                            <td>
                                {{ $order->maximum_bmi }}
                            </td>
                            <td>
                                @if($order->Gender)
                                    <span class="badge badge-relationship">{{ $order->Gender->gender ?? '' }}</span>
                                @endif
                            </td>
                            <td>
                                {{ $order->coupon_code }}
                            </td>
                            <td>
                                {{ $order->discount_rate }}
                            </td>
                            <td>
                                {{ $order->sub_total_price }}
                            </td>
                            <td>
                                {{ $order->total_price }}
                            </td>
                            <td>
                                {{ $order->payment_type }}
                            </td>
                            <td>
                                {{ $order->credit_card }}
                            </td>
                            <td>
                                {{ $order->stripe_confirmation }}
                            </td>
                            <td>
                                @foreach($order->recruitment_emails as $key => $entry)
                                    <span class="badge badge-relationship">{{ $entry->email }}</span>
                                @endforeach
                            </td>
                            <td>
                                {{ $order->notes }}
                            </td>
                            <td>
                                @if($order->Images)
                                    <span class="badge badge-relationship">{{ $order->Images->title ?? '' }}</span>
                                @endif
                            </td>
                            <td>
                                @if($order->OrderStatus)
                                    <span class="badge badge-relationship">{{ $order->OrderStatus->status ?? '' }}</span>
                                @endif
                            </td>
                            <td>
                                <div class="flex justify-end">
                                    @can('order_show')
                                        <a class="btn btn-sm btn-info mr-2" href="{{ route('admin.orders.show', $order) }}">
                                            {{ trans('global.view') }}
                                        </a>
                                    @endcan
                                    @can('order_edit')
                                        <a class="btn btn-sm btn-success mr-2" href="{{ route('admin.orders.edit', $order) }}">
                                            {{ trans('global.edit') }}
                                        </a>
                                    @endcan
                                    @can('order_delete')
                                        <button class="btn btn-sm btn-rose mr-2" type="button" wire:click="confirm('delete', {{ $order->id }})" wire:loading.attr="disabled">
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
            {{ $orders->links() }}
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