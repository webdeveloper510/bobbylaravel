@extends('layouts.admin')
@section('content')

<div class="card bg-blueGray-100">
    <div class="card-header">
        <div class="card-header-container">
            <h6 class="card-title">
                {{ trans('global.view') }}
                {{ trans('cruds.indicationPatient.title_singular') }}:
                {{ trans('cruds.indicationPatient.fields.id') }}
                {{ $indicationPatient->id }}
            </h6>
        </div>
    </div>

    <div class="card-body">
        <div class="pt-3">
            <table class="table table-view">
                <tbody class="bg-white">
                    <tr>
                        <th>
                            {{ trans('cruds.indicationPatient.fields.id') }}
                        </th>
                        <td>
                            {{ $indicationPatient->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.indicationPatient.fields.patient') }}
                        </th>
                        <td>
                            @if($indicationPatient->Patient)
                                <span class="badge badge-relationship">{{ $indicationPatient->Patient->patient ?? '' }}</span>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.indicationPatient.fields.indication') }}
                        </th>
                        <td>
                            @if($indicationPatient->Indication)
                                <span class="badge badge-relationship">{{ $indicationPatient->Indication->indication ?? '' }}</span>
                            @endif
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="form-group">
            <a href="{{ route('admin.indication-patients.index') }}" class="btn btn-secondary">
                {{ trans('global.back') }}
            </a>
        </div>
    </div>
</div>
@endsection