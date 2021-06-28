@extends('layouts.admin')
@section('content')

<div class="card bg-blueGray-100">
    <div class="card-header">
        <div class="card-header-container">
            <h6 class="card-title">
                {{ trans('global.view') }}
                {{ trans('cruds.orderPatient.title_singular') }}:
                {{ trans('cruds.orderPatient.fields.id') }}
                {{ $orderPatient->id }}
            </h6>
        </div>
    </div>

    <div class="card-body">
        <div class="pt-3">
            <table class="table table-view">
                <tbody class="bg-white">
                    <tr>
                        <th>
                            {{ trans('cruds.orderPatient.fields.id') }}
                        </th>
                        <td>
                            {{ $orderPatient->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.orderPatient.fields.patient') }}
                        </th>
                        <td>
                            @if($orderPatient->Patient)
                                <span class="badge badge-relationship">{{ $orderPatient->Patient->patient ?? '' }}</span>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.orderPatient.fields.order') }}
                        </th>
                        <td>
                            @if($orderPatient->Order)
                                <span class="badge badge-relationship">{{ $orderPatient->Order->order ?? '' }}</span>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.orderPatient.fields.diagnosis') }}
                        </th>
                        <td>
                            <input class="disabled:opacity-50 disabled:cursor-not-allowed" type="checkbox" disabled {{ $orderPatient->diagnosis ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.orderPatient.fields.other_clinical_trials') }}
                        </th>
                        <td>
                            <input class="disabled:opacity-50 disabled:cursor-not-allowed" type="checkbox" disabled {{ $orderPatient->other_clinical_trials ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.orderPatient.fields.qualified') }}
                        </th>
                        <td>
                            <input class="disabled:opacity-50 disabled:cursor-not-allowed" type="checkbox" disabled {{ $orderPatient->qualified ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.orderPatient.fields.dnq_reason') }}
                        </th>
                        <td>
                            {{ $orderPatient->dnq_reason }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.orderPatient.fields.patient_status') }}
                        </th>
                        <td>
                            @if($orderPatient->PatientStatus)
                                <span class="badge badge-relationship">{{ $orderPatient->PatientStatus->status ?? '' }}</span>
                            @endif
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="form-group">
            <a href="{{ route('admin.order-patients.index') }}" class="btn btn-secondary">
                {{ trans('global.back') }}
            </a>
        </div>
    </div>
</div>
@endsection