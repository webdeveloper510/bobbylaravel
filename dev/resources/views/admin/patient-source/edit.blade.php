@extends('layouts.admin')
@section('content')

<div class="card bg-blueGray-100">
    <div class="card-header">
        <div class="card-header-container">
            <h6 class="card-title">
                {{ trans('global.edit') }}
                {{ trans('cruds.patientSource.title_singular') }}:
                {{ trans('cruds.patientSource.fields.id') }}
                {{ $patientSource->id }}
            </h6>
        </div>
    </div>

    <div class="card-body">
        @livewire('patient-source.edit', [$patientSource])
    </div>
</div>
@endsection