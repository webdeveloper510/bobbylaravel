@extends('layouts.admin')
@section('content')

<div class="card bg-blueGray-100">
    <div class="card-header">
        <div class="card-header-container">
            <h6 class="card-title">
                {{ trans('global.view') }}
                {{ trans('cruds.customQuestion.title_singular') }}:
                {{ trans('cruds.customQuestion.fields.id') }}
                {{ $customQuestion->id }}
            </h6>
        </div>
    </div>

    <div class="card-body">
        <div class="pt-3">
            <table class="table table-view">
                <tbody class="bg-white">
                    <tr>
                        <th>
                            {{ trans('cruds.customQuestion.fields.id') }}
                        </th>
                        <td>
                            {{ $customQuestion->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.customQuestion.fields.order') }}
                        </th>
                        <td>
                            @if($customQuestion->Order)
                                <span class="badge badge-relationship">{{ $customQuestion->Order->order ?? '' }}</span>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.customQuestion.fields.question') }}
                        </th>
                        <td>
                            {{ $customQuestion->question }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.customQuestion.fields.answer') }}
                        </th>
                        <td>
                            {{ $customQuestion->answer }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.customQuestion.fields.answer_type') }}
                        </th>
                        <td>
                            @if($customQuestion->AnswerType)
                                <span class="badge badge-relationship">{{ $customQuestion->AnswerType->answer_type ?? '' }}</span>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.customQuestion.fields.status') }}
                        </th>
                        <td>
                            {{ $customQuestion->status }}
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="form-group">
            <a href="{{ route('admin.custom-questions.index') }}" class="btn btn-secondary">
                {{ trans('global.back') }}
            </a>
        </div>
    </div>
</div>
@endsection