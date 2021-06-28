@extends('layouts.admin')
@section('content')
<div class="card bg-white">
    <div class="card-header border-b border-blueGray-200">
        <div class="card-header-container">
            <h6 class="card-title">
                {{ trans('cruds.orderStatus.title_singular') }}
                {{ trans('global.list') }}
            </h6>

            @can('order_status_create')
                <a class="btn btn-indigo" href="{{ route('admin.order-statuses.create') }}">
                    {{ trans('global.add') }} {{ trans('cruds.orderStatus.title_singular') }}
                </a>
            @endcan
        </div>
    </div>
    @livewire('order-status.index')

</div>
@endsection