@extends('layouts.admin')
@section('content')
<div class="card bg-white">
    <div class="card-header border-b border-blueGray-200">
        <div class="card-header-container">
            <h6 class="card-title">
                {{ trans('cruds.network.title_singular') }}
                {{ trans('global.list') }}
            </h6>

            @can('network_create')
                <a class="btn btn-indigo" href="{{ route('admin.networks.create') }}">
                    {{ trans('global.add') }} {{ trans('cruds.network.title_singular') }}
                </a>
            @endcan
        </div>
    </div>
    @livewire('network.index')

</div>
@endsection