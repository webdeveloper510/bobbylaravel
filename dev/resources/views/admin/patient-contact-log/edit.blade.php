@extends('layouts.admin')
@section('content')

<div class="card bg-blueGray-100">
    <div class="card-header">
        <div class="card-header-container">
            <h6 class="card-title">
                {{ trans('global.edit') }}
                {{ trans('cruds.patientContactLog.title_singular') }}:
                {{ trans('cruds.patientContactLog.fields.id') }}
                {{ $patientContactLog->id }}
            </h6>
        </div>
    </div>

    <div class="card-body">
        @livewire('patient-contact-log.edit', [$patientContactLog])
    </div>
</div>
@endsection