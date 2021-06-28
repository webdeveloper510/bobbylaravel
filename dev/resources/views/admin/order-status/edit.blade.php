@extends('layouts.admin')
@section('content')

<div class="card bg-blueGray-100">
    <div class="card-header">
        <div class="card-header-container">
            <h6 class="card-title">
                {{ trans('global.edit') }}
                {{ trans('cruds.orderStatus.title_singular') }}:
                {{ trans('cruds.orderStatus.fields.id') }}
                {{ $orderStatus->id }}
            </h6>
        </div>
    </div>

    <div class="card-body">
        @livewire('order-status.edit', [$orderStatus])
    </div>
</div>
@endsection