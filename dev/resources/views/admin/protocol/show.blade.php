@extends('layouts.admin')
@section('content')

<div class="card bg-blueGray-100">
    <div class="card-header">
        <div class="card-header-container">
            <h6 class="card-title">
                {{ trans('global.view') }}
                {{ trans('cruds.protocol.title_singular') }}:
                {{ trans('cruds.protocol.fields.id') }}
                {{ $protocol->id }}
            </h6>
        </div>
    </div>

    <div class="card-body">
        <div class="pt-3">
            <table class="table table-view">
                <tbody class="bg-white">
                    <tr>
                        <th>
                            {{ trans('cruds.protocol.fields.id') }}
                        </th>
                        <td>
                            {{ $protocol->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.protocol.fields.protocol') }}
                        </th>
                        <td>
                            {{ $protocol->protocol }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.protocol.fields.file') }}
                        </th>
                        <td>
                            {{ $protocol->file }}
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="form-group">
            <a href="{{ route('admin.protocols.index') }}" class="btn btn-secondary">
                {{ trans('global.back') }}
            </a>
        </div>
    </div>
</div>
@endsection