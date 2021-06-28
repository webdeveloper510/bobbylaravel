@extends('layouts.admin')
@section('content')
<div class="card bg-white">
    <div class="card-header border-b border-blueGray-200">
        <div class="card-header-container">
            <h6 class="card-title">
                {{ trans('cruds.clientType.title_singular') }}
                {{ trans('global.list') }}
            </h6>

            @can('client_type_create')
                <a class="btn btn-indigo" href="{{ route('admin.client-types.create') }}">
                    {{ trans('global.add') }} {{ trans('cruds.clientType.title_singular') }}
                </a>
            @endcan
        </div>
    </div>
    @livewire('client-type.index')

</div>
@endsection