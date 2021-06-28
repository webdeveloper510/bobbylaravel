@extends('layouts.admin')
@section('content')
<div class="card bg-white">
    <div class="card-header border-b border-blueGray-200">
        <div class="card-header-container">
            <h6 class="card-title">
                {{ trans('cruds.sponsor.title_singular') }}
                {{ trans('global.list') }}
            </h6>

            @can('sponsor_create')
                <a class="btn btn-indigo" href="{{ route('admin.sponsors.create') }}">
                    {{ trans('global.add') }} {{ trans('cruds.sponsor.title_singular') }}
                </a>
            @endcan
        </div>
    </div>
    @livewire('sponsor.index')

</div>
@endsection