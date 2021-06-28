@extends('layouts.admin')
@section('content')

<div class="card bg-blueGray-100">
    <div class="card-header">
        <div class="card-header-container">
            <h6 class="card-title">
                {{ trans('global.view') }}
                {{ trans('cruds.answerType.title_singular') }}:
                {{ trans('cruds.answerType.fields.id') }}
                {{ $answerType->id }}
            </h6>
        </div>
    </div>

    <div class="card-body">
        <div class="pt-3">
            <table class="table table-view">
                <tbody class="bg-white">
                    <tr>
                        <th>
                            {{ trans('cruds.answerType.fields.id') }}
                        </th>
                        <td>
                            {{ $answerType->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.answerType.fields.answer_type') }}
                        </th>
                        <td>
                            {{ $answerType->answer_type }}
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="form-group">
            <a href="{{ route('admin.answer-types.index') }}" class="btn btn-secondary">
                {{ trans('global.back') }}
            </a>
        </div>
    </div>
</div>
@endsection