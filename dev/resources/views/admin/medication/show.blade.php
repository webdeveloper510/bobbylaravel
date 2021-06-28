@extends('layouts.admin')
@section('content')

<div class="card bg-blueGray-100">
    <div class="card-header">
        <div class="card-header-container">
            <h6 class="card-title">
                {{ trans('global.view') }}
                {{ trans('cruds.medication.title_singular') }}:
                {{ trans('cruds.medication.fields.id') }}
                {{ $medication->id }}
            </h6>
        </div>
    </div>

    <div class="card-body">
        <div class="pt-3">
            <table class="table table-view">
                <tbody class="bg-white">
                    <tr>
                        <th>
                            {{ trans('cruds.medication.fields.id') }}
                        </th>
                        <td>
                            {{ $medication->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.medication.fields.brand_name') }}
                        </th>
                        <td>
                            {{ $medication->brand_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.medication.fields.sponsor_name') }}
                        </th>
                        <td>
                            {{ $medication->sponsor_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.medication.fields.application_number') }}
                        </th>
                        <td>
                            {{ $medication->application_number }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.medication.fields.dosage_form') }}
                        </th>
                        <td>
                            {{ $medication->dosage_form }}
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="form-group">
            <a href="{{ route('admin.medications.index') }}" class="btn btn-secondary">
                {{ trans('global.back') }}
            </a>
        </div>
    </div>
</div>
@endsection