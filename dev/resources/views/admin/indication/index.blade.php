@extends('layouts.admin')
@section('content')
<div class="card bg-white">
    <div class="card-header border-b border-blueGray-200">
        <div class="card-header-container">
            <h6 class="card-title">
                {{ trans('cruds.indication.title_singular') }}
                {{ trans('global.list') }}
            </h6>

            @can('indication_create')
                <a class="btn btn-indigo" href="{{ route('admin.indications.create') }}">
                    {{ trans('global.add') }} {{ trans('cruds.indication.title_singular') }}
                </a>
            @endcan
        </div>
    </div>
    @livewire('indication.index')

</div>
@endsection