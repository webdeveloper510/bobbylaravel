@extends('layouts.admin')
@section('content')

<div class="card bg-blueGray-100">
    <div class="card-header">
        <div class="card-header-container">
            <h6 class="card-title">
                {{ trans('global.view') }}
                {{ trans('cruds.indication.title_singular') }}:
                {{ trans('cruds.indication.fields.id') }}
                {{ $indication->id }}
            </h6>
        </div>
    </div>

    <div class="card-body">
        <div class="pt-3">
            <table class="table table-view">
                <tbody class="bg-white">
                    <tr>
                        <th>
                            {{ trans('cruds.indication.fields.id') }}
                        </th>
                        <td>
                            {{ $indication->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.indication.fields.indication') }}
                        </th>
                        <td>
                            {{ $indication->indication }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.indication.fields.therapeutic_area') }}
                        </th>
                        <td>
                            @if($indication->TherapeuticArea)
                                <span class="badge badge-relationship">{{ $indication->TherapeuticArea->therapeutic_area ?? '' }}</span>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.indication.fields.description') }}
                        </th>
                        <td>
                            {{ $indication->description }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.indication.fields.symptoms') }}
                        </th>
                        <td>
                            {{ $indication->symptoms_label }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.indication.fields.causes') }}
                        </th>
                        <td>
                            {{ $indication->causes }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.indication.fields.treatments') }}
                        </th>
                        <td>
                            {{ $indication->treatments_label }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.indication.fields.risk_factors') }}
                        </th>
                        <td>
                            {{ $indication->risk_factors_label }}
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="form-group">
            <a href="{{ route('admin.indications.index') }}" class="btn btn-secondary">
                {{ trans('global.back') }}
            </a>
        </div>
    </div>
</div>
@endsection