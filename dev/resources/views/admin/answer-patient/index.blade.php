@extends('layouts.admin')
@section('content')
<div class="card bg-white">
    <div class="card-header border-b border-blueGray-200">
        <div class="card-header-container">
            <h6 class="card-title">
                {{ trans('cruds.answerPatient.title_singular') }}
                {{ trans('global.list') }}
            </h6>

            @can('answer_patient_create')
                <a class="btn btn-indigo" href="{{ route('admin.answer-patients.create') }}">
                    {{ trans('global.add') }} {{ trans('cruds.answerPatient.title_singular') }}
                </a>
            @endcan
        </div>
    </div>
    @livewire('answer-patient.index')

</div>
@endsection