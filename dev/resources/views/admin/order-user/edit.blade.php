@extends('layouts.admin')
@section('content')

<div class="card bg-blueGray-100">
    <div class="card-header">
        <div class="card-header-container">
            <h6 class="card-title">
                {{ trans('global.edit') }}
                {{ trans('cruds.orderUser.title_singular') }}:
                {{ trans('cruds.orderUser.fields.id') }}
                {{ $orderUser->id }}
            </h6>
        </div>
    </div>

    <div class="card-body">
        @livewire('order-user.edit', [$orderUser])
    </div>
</div>
@endsection