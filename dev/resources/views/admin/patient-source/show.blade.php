@extends('layouts.admin')
@section('content')

<div class="card bg-blueGray-100">
    <div class="card-header">
        <div class="card-header-container">
            <h6 class="card-title">
                {{ trans('global.view') }}
                {{ trans('cruds.patientSource.title_singular') }}:
                {{ trans('cruds.patientSource.fields.id') }}
                {{ $patientSource->id }}
            </h6>
        </div>
    </div>

    <div class="card-body">
        <div class="pt-3">
            <table class="table table-view">
                <tbody class="bg-white">
                    <tr>
                        <th>
                            {{ trans('cruds.patientSource.fields.id') }}
                        </th>
                        <td>
                            {{ $patientSource->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.patientSource.fields.patient') }}
                        </th>
                        <td>
                            @if($patientSource->Patient)
                                <span class="badge badge-relationship">{{ $patientSource->Patient->patient ?? '' }}</span>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.patientSource.fields.order') }}
                        </th>
                        <td>
                            @if($patientSource->Order)
                                <span class="badge badge-relationship">{{ $patientSource->Order->order ?? '' }}</span>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.patientSource.fields.order_patient') }}
                        </th>
                        <td>
                            @if($patientSource->OrderPatient)
                                <span class="badge badge-relationship">{{ $patientSource->OrderPatient->qualified ?? '' }}</span>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.patientSource.fields.ip_address') }}
                        </th>
                        <td>
                            {{ $patientSource->ip_address }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.patientSource.fields.url_referrer') }}
                        </th>
                        <td>
                            {{ $patientSource->url_referrer }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.patientSource.fields.utm_campaign') }}
                        </th>
                        <td>
                            {{ $patientSource->utm_campaign }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.patientSource.fields.utm_content') }}
                        </th>
                        <td>
                            {{ $patientSource->utm_content }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.patientSource.fields.utm_medium') }}
                        </th>
                        <td>
                            {{ $patientSource->utm_medium }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.patientSource.fields.utm_source') }}
                        </th>
                        <td>
                            {{ $patientSource->utm_source }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.patientSource.fields.utm_term') }}
                        </th>
                        <td>
                            {{ $patientSource->utm_term }}
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="form-group">
            <a href="{{ route('admin.patient-sources.index') }}" class="btn btn-secondary">
                {{ trans('global.back') }}
            </a>
        </div>
    </div>
</div>
@endsection