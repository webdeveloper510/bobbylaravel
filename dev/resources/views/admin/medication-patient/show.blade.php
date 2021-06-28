@extends('layouts.admin')
@section('content')

<div class="card bg-blueGray-100">
    <div class="card-header">
        <div class="card-header-container">
            <h6 class="card-title">
                {{ trans('global.view') }}
                {{ trans('cruds.medicationPatient.title_singular') }}:
                {{ trans('cruds.medicationPatient.fields.id') }}
                {{ $medicationPatient->id }}
            </h6>
        </div>
    </div>

    <div class="card-body">
        <div class="pt-3">
            <table class="table table-view">
                <tbody class="bg-white">
                    <tr>
                        <th>
                            {{ trans('cruds.medicationPatient.fields.id') }}
                        </th>
                        <td>
                            {{ $medicationPatient->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.medicationPatient.fields.patient') }}
                        </th>
                        <td>
                            @if($medicationPatient->Patient)
                                <span class="badge badge-relationship">{{ $medicationPatient->Patient->patient ?? '' }}</span>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.medicationPatient.fields.medication') }}
                        </th>
                        <td>
                            @if($medicationPatient->Medication)
                                <span class="badge badge-relationship">{{ $medicationPatient->Medication->brand_name ?? '' }}</span>
                            @endif
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="form-group">
            <a href="{{ route('admin.medication-patients.index') }}" class="btn btn-secondary">
                {{ trans('global.back') }}
            </a>
        </div>
    </div>
</div>
@endsection