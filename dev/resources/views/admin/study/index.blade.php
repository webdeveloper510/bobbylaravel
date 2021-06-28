@extends('layouts.admin')
@section('content')
<div class="card bg-white">
    <div class="card-header border-b border-blueGray-200">
        <div class="card-header-container">
            <h6 class="card-title">
                {{ trans('cruds.study.title_singular') }}
                {{ trans('global.list') }}
            </h6>

            @can('study_create')
                <a class="btn btn-indigo" href="{{ route('admin.studies.create') }}">
                    {{ trans('global.add') }} {{ trans('cruds.study.title_singular') }}
                </a>
            @endcan
        </div>
    </div>
    @livewire('study.index')

</div>
@endsection