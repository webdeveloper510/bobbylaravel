@extends('layouts.admin')
@section('content')

<div class="card bg-blueGray-100">
    <div class="card-header">
        <div class="card-header-container">
            <h6 class="card-title">
                {{ trans('global.edit') }}
                {{ trans('cruds.medicationPatient.title_singular') }}:
                {{ trans('cruds.medicationPatient.fields.id') }}
                {{ $medicationPatient->id }}
            </h6>
        </div>
    </div>

    <div class="card-body">
        @livewire('medication-patient.edit', [$medicationPatient])
    </div>
</div>
@endsection