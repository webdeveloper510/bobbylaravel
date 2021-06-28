@extends('layouts.admin')
@section('content')

<div class="card bg-blueGray-100">
    <div class="card-header">
        <div class="card-header-container">
            <h6 class="card-title">
                {{ trans('global.view') }}
                {{ trans('cruds.patient.title_singular') }}:
                {{ trans('cruds.patient.fields.id') }}
                {{ $patient->id }}
            </h6>
        </div>
    </div>

    <div class="card-body">
        <div class="pt-3">
            <table class="table table-view">
                <tbody class="bg-white">
                    <tr>
                        <th>
                            {{ trans('cruds.patient.fields.id') }}
                        </th>
                        <td>
                            {{ $patient->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.patient.fields.role') }}
                        </th>
                        <td>
                            @foreach($patient->role as $key => $entry)
                                <span class="badge badge-relationship">{{ $entry->title }}</span>
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.patient.fields.user') }}
                        </th>
                        <td>
                            @if($patient->User)
                                <span class="badge badge-relationship">{{ $patient->User->email ?? '' }}</span>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.patient.fields.patient') }}
                        </th>
                        <td>
                            {{ $patient->patient }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.patient.fields.birth_date') }}
                        </th>
                        <td>
                            {{ $patient->birth_date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.patient.fields.height_ft') }}
                        </th>
                        <td>
                            {{ $patient->height_ft }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.patient.fields.height_in') }}
                        </th>
                        <td>
                            {{ $patient->height_in }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.patient.fields.weight') }}
                        </th>
                        <td>
                            {{ $patient->weight }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.patient.fields.bmi') }}
                        </th>
                        <td>
                            {{ $patient->bmi }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.patient.fields.gender') }}
                        </th>
                        <td>
                            @if($patient->Gender)
                                <span class="badge badge-relationship">{{ $patient->Gender->gender ?? '' }}</span>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.patient.fields.ethnicity') }}
                        </th>
                        <td>
                            @if($patient->Ethnicity)
                                <span class="badge badge-relationship">{{ $patient->Ethnicity->ethnicity ?? '' }}</span>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.patient.fields.contact_method') }}
                        </th>
                        <td>
                            @foreach($patient->contact_method as $key => $entry)
                                <span class="badge badge-relationship">{{ $entry->contact_method }}</span>
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.patient.fields.contact_time') }}
                        </th>
                        <td>
                            @foreach($patient->contact_time as $key => $entry)
                                <span class="badge badge-relationship">{{ $entry->contact_time }}</span>
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.patient.fields.distance') }}
                        </th>
                        <td>
                            @if($patient->Distance)
                                <span class="badge badge-relationship">{{ $patient->Distance->distance ?? '' }}</span>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.patient.fields.zip_code') }}
                        </th>
                        <td>
                            {{ $patient->zip_code }}
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="form-group">
            <a href="{{ route('admin.patients.index') }}" class="btn btn-secondary">
                {{ trans('global.back') }}
            </a>
        </div>
    </div>
</div>
@endsection