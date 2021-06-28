@extends('layouts.admin')
@section('content')

<div class="card bg-blueGray-100">
    <div class="card-header">
        <div class="card-header-container">
            <h6 class="card-title">
                {{ trans('global.view') }}
                {{ trans('cruds.distance.title_singular') }}:
                {{ trans('cruds.distance.fields.id') }}
                {{ $distance->id }}
            </h6>
        </div>
    </div>

    <div class="card-body">
        <div class="pt-3">
            <table class="table table-view">
                <tbody class="bg-white">
                    <tr>
                        <th>
                            {{ trans('cruds.distance.fields.id') }}
                        </th>
                        <td>
                            {{ $distance->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.distance.fields.distance') }}
                        </th>
                        <td>
                            {{ $distance->distance }}
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="form-group">
            <a href="{{ route('admin.distances.index') }}" class="btn btn-secondary">
                {{ trans('global.back') }}
            </a>
        </div>
    </div>
</div>
@endsection