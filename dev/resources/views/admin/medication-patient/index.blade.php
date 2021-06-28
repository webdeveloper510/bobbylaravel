@extends('layouts.admin')
@section('content')
<div class="card bg-white">
    <div class="card-header border-b border-blueGray-200">
        <div class="card-header-container">
            <h6 class="card-title">
                {{ trans('cruds.medicationPatient.title_singular') }}
                {{ trans('global.list') }}
            </h6>

            @can('medication_patient_create')
                <a class="btn btn-indigo" href="{{ route('admin.medication-patients.create') }}">
                    {{ trans('global.add') }} {{ trans('cruds.medicationPatient.title_singular') }}
                </a>
            @endcan
        </div>
    </div>
    @livewire('medication-patient.index')

</div>
@endsection