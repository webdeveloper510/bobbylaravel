@extends('layouts.admin')
@section('content')

<div class="card bg-blueGray-100">
    <div class="card-header">
        <div class="card-header-container">
            <h6 class="card-title">
                {{ trans('global.edit') }}
                {{ trans('cruds.ethnicity.title_singular') }}:
                {{ trans('cruds.ethnicity.fields.id') }}
                {{ $ethnicity->id }}
            </h6>
        </div>
    </div>

    <div class="card-body">
        @livewire('ethnicity.edit', [$ethnicity])
    </div>
</div>
@endsection