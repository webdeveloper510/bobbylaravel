@extends('layouts.admin')
@section('content')
<div class="card bg-white">
    <div class="card-header border-b border-blueGray-200">
        <div class="card-header-container">
            <h6 class="card-title">
                {{ trans('cruds.protocol.title_singular') }}
                {{ trans('global.list') }}
            </h6>

            @can('protocol_create')
                <a class="btn btn-indigo" href="{{ route('admin.protocols.create') }}">
                    {{ trans('global.add') }} {{ trans('cruds.protocol.title_singular') }}
                </a>
            @endcan
        </div>
    </div>
    @livewire('protocol.index')

</div>
@endsection