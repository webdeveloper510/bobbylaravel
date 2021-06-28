@extends('layouts.admin')
@section('content')

<div class="card bg-blueGray-100">
    <div class="card-header">
        <div class="card-header-container">
            <h6 class="card-title">
                {{ trans('global.edit') }}
                {{ trans('cruds.patientStatus.title_singular') }}:
                {{ trans('cruds.patientStatus.fields.id') }}
                {{ $patientStatus->id }}
            </h6>
        </div>
    </div>

    <div class="card-body">
        @livewire('patient-status.edit', [$patientStatus])
    </div>
</div>
@endsection