@extends('layouts.admin')
@section('content')
<div class="card bg-white">
    <div class="card-header border-b border-blueGray-200">
        <div class="card-header-container">
            <h6 class="card-title">
                {{ trans('cruds.therapeuticArea.title_singular') }}
                {{ trans('global.list') }}
            </h6>

            @can('therapeutic_area_create')
                <a class="btn btn-indigo" href="{{ route('admin.therapeutic-areas.create') }}">
                    {{ trans('global.add') }} {{ trans('cruds.therapeuticArea.title_singular') }}
                </a>
            @endcan
        </div>
    </div>
    @livewire('therapeutic-area.index')

</div>
@endsection