@extends('layouts.admin')
@section('content')

<div class="card bg-blueGray-100">
    <div class="card-header">
        <div class="card-header-container">
            <h6 class="card-title">
                {{ trans('global.view') }}
                {{ trans('cruds.study.title_singular') }}:
                {{ trans('cruds.study.fields.id') }}
                {{ $study->id }}
            </h6>
        </div>
    </div>

    <div class="card-body">
        <div class="pt-3">
            <table class="table table-view">
                <tbody class="bg-white">
                    <tr>
                        <th>
                            {{ trans('cruds.study.fields.id') }}
                        </th>
                        <td>
                            {{ $study->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.study.fields.indication') }}
                        </th>
                        <td>
                            @if($study->Indication)
                                <span class="badge badge-relationship">{{ $study->Indication->indication ?? '' }}</span>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.study.fields.sponsor') }}
                        </th>
                        <td>
                            @if($study->Sponsor)
                                <span class="badge badge-relationship">{{ $study->Sponsor->sponsor ?? '' }}</span>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.study.fields.protocol') }}
                        </th>
                        <td>
                            @if($study->Protocol)
                                <span class="badge badge-relationship">{{ $study->Protocol->protocol ?? '' }}</span>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.study.fields.order') }}
                        </th>
                        <td>
                            @if($study->Order)
                                <span class="badge badge-relationship">{{ $study->Order->order ?? '' }}</span>
                            @endif
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="form-group">
            <a href="{{ route('admin.studies.index') }}" class="btn btn-secondary">
                {{ trans('global.back') }}
            </a>
        </div>
    </div>
</div>
@endsection