@extends('layouts.admin')
@section('content')
<div class="card bg-white">
    <div class="card-header border-b border-blueGray-200">
        <div class="card-header-container">
            <h6 class="card-title">
                {{ trans('cruds.orderPatient.title_singular') }}
                {{ trans('global.list') }}
            </h6>

            @can('order_patient_create')
                <a class="btn btn-indigo" href="{{ route('admin.order-patients.create') }}">
                    {{ trans('global.add') }} {{ trans('cruds.orderPatient.title_singular') }}
                </a>
            @endcan
        </div>
    </div>
    @livewire('order-patient.index')

</div>
@endsection