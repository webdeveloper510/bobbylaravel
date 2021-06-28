@extends('layouts.admin')
@section('content')
<div class="card bg-white">
    <div class="card-header border-b border-blueGray-200">
        <div class="card-header-container">
            <h6 class="card-title">
                {{ trans('cruds.image.title_singular') }}
                {{ trans('global.list') }}
            </h6>

            @can('image_create')
                <a class="btn btn-indigo" href="{{ route('admin.images.create') }}">
                    {{ trans('global.add') }} {{ trans('cruds.image.title_singular') }}
                </a>
            @endcan
        </div>
    </div>
    @livewire('image.index')

</div>
@endsection