@extends('layouts.admin')
@section('content')

<div class="card bg-blueGray-100">
    <div class="card-header">
        <div class="card-header-container">
            <h6 class="card-title">
                {{ trans('global.edit') }}
                {{ trans('cruds.image.title_singular') }}:
                {{ trans('cruds.image.fields.id') }}
                {{ $image->id }}
            </h6>
        </div>
    </div>

    <div class="card-body">
        @livewire('image.edit', [$image])
    </div>
</div>
@endsection