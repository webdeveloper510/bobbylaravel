@extends('layouts.admin')
@section('content')

<div class="card bg-blueGray-100">
    <div class="card-header">
        <div class="card-header-container">
            <h6 class="card-title">
                {{ trans('global.edit') }}
                {{ trans('cruds.medication.title_singular') }}:
                {{ trans('cruds.medication.fields.id') }}
                {{ $medication->id }}
            </h6>
        </div>
    </div>

    <div class="card-body">
        @livewire('medication.edit', [$medication])
    </div>
</div>
@endsection