@extends('layouts.admin')
@section('content')
<div class="card bg-white">
    <div class="card-header border-b border-blueGray-200">
        <div class="card-header-container">
            <h6 class="card-title">
                {{ trans('cruds.ethnicity.title_singular') }}
                {{ trans('global.list') }}
            </h6>

            @can('ethnicity_create')
                <a class="btn btn-indigo" href="{{ route('admin.ethnicities.create') }}">
                    {{ trans('global.add') }} {{ trans('cruds.ethnicity.title_singular') }}
                </a>
            @endcan
        </div>
    </div>
    @livewire('ethnicity.index')

</div>
@endsection