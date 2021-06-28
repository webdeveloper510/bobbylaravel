@extends('layouts.admin')
@section('content')

<div class="card bg-blueGray-100">
    <div class="card-header">
        <div class="card-header-container">
            <h6 class="card-title">
                {{ trans('global.edit') }}
                {{ trans('cruds.network.title_singular') }}:
                {{ trans('cruds.network.fields.id') }}
                {{ $network->id }}
            </h6>
        </div>
    </div>

    <div class="card-body">
        @livewire('network.edit', [$network])
    </div>
</div>
@endsection