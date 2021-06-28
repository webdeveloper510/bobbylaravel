@extends('layouts.admin')
@section('content')

<div class="card bg-blueGray-100">
    <div class="card-header">
        <div class="card-header-container">
            <h6 class="card-title">
                {{ trans('global.view') }}
                {{ trans('cruds.patientContactLog.title_singular') }}:
                {{ trans('cruds.patientContactLog.fields.id') }}
                {{ $patientContactLog->id }}
            </h6>
        </div>
    </div>

    <div class="card-body">
        <div class="pt-3">
            <table class="table table-view">
                <tbody class="bg-white">
                    <tr>
                        <th>
                            {{ trans('cruds.patientContactLog.fields.id') }}
                        </th>
                        <td>
                            {{ $patientContactLog->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.patientContactLog.fields.order_patient') }}
                        </th>
                        <td>
                            @if($patientContactLog->OrderPatient)
                                <span class="badge badge-relationship">{{ $patientContactLog->OrderPatient->qualified ?? '' }}</span>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.patientContactLog.fields.patient_status') }}
                        </th>
                        <td>
                            @if($patientContactLog->PatientStatus)
                                <span class="badge badge-relationship">{{ $patientContactLog->PatientStatus->status ?? '' }}</span>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.patientContactLog.fields.note') }}
                        </th>
                        <td>
                            {{ $patientContactLog->note }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.patientContactLog.fields.user') }}
                        </th>
                        <td>
                            @if($patientContactLog->User)
                                <span class="badge badge-relationship">{{ $patientContactLog->User->email ?? '' }}</span>
                            @endif
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="form-group">
            <a href="{{ route('admin.patient-contact-logs.index') }}" class="btn btn-secondary">
                {{ trans('global.back') }}
            </a>
        </div>
    </div>
</div>
@endsection