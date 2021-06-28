@extends('layouts.admin')
@section('content')

<div class="card bg-blueGray-100">
    <div class="card-header">
        <div class="card-header-container">
            <h6 class="card-title">
                {{ trans('global.view') }}
                {{ trans('cruds.answerPatient.title_singular') }}:
                {{ trans('cruds.answerPatient.fields.id') }}
                {{ $answerPatient->id }}
            </h6>
        </div>
    </div>

    <div class="card-body">
        <div class="pt-3">
            <table class="table table-view">
                <tbody class="bg-white">
                    <tr>
                        <th>
                            {{ trans('cruds.answerPatient.fields.id') }}
                        </th>
                        <td>
                            {{ $answerPatient->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.answerPatient.fields.patient') }}
                        </th>
                        <td>
                            @if($answerPatient->Patient)
                                <span class="badge badge-relationship">{{ $answerPatient->Patient->patient ?? '' }}</span>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.answerPatient.fields.order') }}
                        </th>
                        <td>
                            @if($answerPatient->Order)
                                <span class="badge badge-relationship">{{ $answerPatient->Order->order ?? '' }}</span>
                            @endif
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="form-group">
            <a href="{{ route('admin.answer-patients.index') }}" class="btn btn-secondary">
                {{ trans('global.back') }}
            </a>
        </div>
    </div>
</div>
@endsection