@extends('layouts.admin')
@section('content')
<div class="card bg-white">
    <div class="card-header border-b border-blueGray-200">
        <div class="card-header-container">
            <h6 class="card-title">
                {{ trans('cruds.patientSource.title_singular') }}
                {{ trans('global.list') }}
            </h6>

            @can('patient_source_create')
                <a class="btn btn-indigo" href="{{ route('admin.patient-sources.create') }}">
                    {{ trans('global.add') }} {{ trans('cruds.patientSource.title_singular') }}
                </a>
            @endcan
        </div>
    </div>
    @livewire('patient-source.index')

</div>
@endsection