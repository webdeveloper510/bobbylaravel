@extends('layouts.admin')
@section('content')

<div class="card bg-blueGray-100">
    <div class="card-header">
        <div class="card-header-container">
            <h6 class="card-title">
                {{ trans('global.view') }}
                {{ trans('cruds.order.title_singular') }}:
                {{ trans('cruds.order.fields.id') }}
                {{ $order->id }}
            </h6>
        </div>
    </div>

    <div class="card-body">
        <div class="pt-3">
            <table class="table table-view">
                <tbody class="bg-white">
                    <tr>
                        <th>
                            {{ trans('cruds.order.fields.id') }}
                        </th>
                        <td>
                            {{ $order->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.order.fields.order') }}
                        </th>
                        <td>
                            {{ $order->order }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.order.fields.client_id_bill') }}
                        </th>
                        <td>
                            @if($order->ClientIdBill)
                                <span class="badge badge-relationship">{{ $order->ClientIdBill->client_name ?? '' }}</span>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.order.fields.client_id_ship') }}
                        </th>
                        <td>
                            @if($order->ClientIdShip)
                                <span class="badge badge-relationship">{{ $order->ClientIdShip->client_name ?? '' }}</span>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.order.fields.sponsor') }}
                        </th>
                        <td>
                            @if($order->Sponsor)
                                <span class="badge badge-relationship">{{ $order->Sponsor->sponsor ?? '' }}</span>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.order.fields.protocol') }}
                        </th>
                        <td>
                            @if($order->Protocol)
                                <span class="badge badge-relationship">{{ $order->Protocol->protocol ?? '' }}</span>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.order.fields.cro') }}
                        </th>
                        <td>
                            @if($order->Cro)
                                <span class="badge badge-relationship">{{ $order->Cro->cro_name ?? '' }}</span>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.order.fields.package') }}
                        </th>
                        <td>
                            @foreach($order->package as $key => $entry)
                                <span class="badge badge-relationship">{{ $entry->package }}</span>
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.order.fields.referral_guarantee') }}
                        </th>
                        <td>
                            {{ $order->referral_guarantee }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.order.fields.start_date') }}
                        </th>
                        <td>
                            {{ $order->start_date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.order.fields.end_date') }}
                        </th>
                        <td>
                            {{ $order->end_date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.order.fields.minimum_age') }}
                        </th>
                        <td>
                            {{ $order->minimum_age }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.order.fields.maximum_age') }}
                        </th>
                        <td>
                            {{ $order->maximum_age }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.order.fields.minimum_bmi') }}
                        </th>
                        <td>
                            {{ $order->minimum_bmi }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.order.fields.maximum_bmi') }}
                        </th>
                        <td>
                            {{ $order->maximum_bmi }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.order.fields.gender') }}
                        </th>
                        <td>
                            @if($order->Gender)
                                <span class="badge badge-relationship">{{ $order->Gender->gender ?? '' }}</span>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.order.fields.coupon_code') }}
                        </th>
                        <td>
                            {{ $order->coupon_code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.order.fields.discount_rate') }}
                        </th>
                        <td>
                            {{ $order->discount_rate }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.order.fields.sub_total_price') }}
                        </th>
                        <td>
                            {{ $order->sub_total_price }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.order.fields.total_price') }}
                        </th>
                        <td>
                            {{ $order->total_price }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.order.fields.payment_type') }}
                        </th>
                        <td>
                            {{ $order->payment_type }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.order.fields.credit_card') }}
                        </th>
                        <td>
                            {{ $order->credit_card }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.order.fields.stripe_confirmation') }}
                        </th>
                        <td>
                            {{ $order->stripe_confirmation }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.order.fields.recruitment_emails') }}
                        </th>
                        <td>
                            @foreach($order->recruitment_emails as $key => $entry)
                                <span class="badge badge-relationship">{{ $entry->email }}</span>
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.order.fields.notes') }}
                        </th>
                        <td>
                            {{ $order->notes }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.order.fields.images') }}
                        </th>
                        <td>
                            @if($order->Images)
                                <span class="badge badge-relationship">{{ $order->Images->title ?? '' }}</span>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.order.fields.order_status') }}
                        </th>
                        <td>
                            @if($order->OrderStatus)
                                <span class="badge badge-relationship">{{ $order->OrderStatus->status ?? '' }}</span>
                            @endif
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="form-group">
            <a href="{{ route('admin.orders.index') }}" class="btn btn-secondary">
                {{ trans('global.back') }}
            </a>
        </div>
    </div>
</div>
@endsection