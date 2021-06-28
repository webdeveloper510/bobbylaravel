@extends('layouts.admin')
@section('content')
<div class="card bg-white">
    <div class="card-header border-b border-blueGray-200">
        <div class="card-header-container">
            <h6 class="card-title">
                {{ trans('cruds.orderUser.title_singular') }}
                {{ trans('global.list') }}
            </h6>

            @can('order_user_create')
                <a class="btn btn-indigo" href="{{ route('admin.order-users.create') }}">
                    {{ trans('global.add') }} {{ trans('cruds.orderUser.title_singular') }}
                </a>
            @endcan
        </div>
    </div>
    @livewire('order-user.index')

</div>
@endsection