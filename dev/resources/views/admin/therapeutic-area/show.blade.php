@extends('layouts.admin')
@section('content')

<div class="card bg-blueGray-100">
    <div class="card-header">
        <div class="card-header-container">
            <h6 class="card-title">
                {{ trans('global.view') }}
                {{ trans('cruds.therapeuticArea.title_singular') }}:
                {{ trans('cruds.therapeuticArea.fields.id') }}
                {{ $therapeuticArea->id }}
            </h6>
        </div>
    </div>

    <div class="card-body">
        <div class="pt-3">
            <table class="table table-view">
                <tbody class="bg-white">
                    <tr>
                        <th>
                            {{ trans('cruds.therapeuticArea.fields.id') }}
                        </th>
                        <td>
                            {{ $therapeuticArea->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.therapeuticArea.fields.therapeutic_area') }}
                        </th>
                        <td>
                            {{ $therapeuticArea->therapeutic_area }}
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="form-group">
            <a href="{{ route('admin.therapeutic-areas.index') }}" class="btn btn-secondary">
                {{ trans('global.back') }}
            </a>
        </div>
    </div>
</div>
@endsection