@extends('layouts.admin')
@section('content')

<div class="card bg-blueGray-100">
    <div class="card-header">
        <div class="card-header-container">
            <h6 class="card-title">
                {{ trans('global.view') }}
                {{ trans('cruds.cro.title_singular') }}:
                {{ trans('cruds.cro.fields.id') }}
                {{ $cro->id }}
            </h6>
        </div>
    </div>

    <div class="card-body">
        <div class="pt-3">
            <table class="table table-view">
                <tbody class="bg-white">
                    <tr>
                        <th>
                            {{ trans('cruds.cro.fields.id') }}
                        </th>
                        <td>
                            {{ $cro->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.cro.fields.cro_name') }}
                        </th>
                        <td>
                            {{ $cro->cro_name }}
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="form-group">
            <a href="{{ route('admin.cros.index') }}" class="btn btn-secondary">
                {{ trans('global.back') }}
            </a>
        </div>
    </div>
</div>
@endsection