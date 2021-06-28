@extends('layouts.admin')
@section('content')

<div class="card bg-blueGray-100">
    <div class="card-header">
        <div class="card-header-container">
            <h6 class="card-title">
                {{ trans('global.edit') }}
                {{ trans('cruds.clientType.title_singular') }}:
                {{ trans('cruds.clientType.fields.id') }}
                {{ $clientType->id }}
            </h6>
        </div>
    </div>

    <div class="card-body">
        @livewire('client-type.edit', [$clientType])
    </div>
</div>
@endsection