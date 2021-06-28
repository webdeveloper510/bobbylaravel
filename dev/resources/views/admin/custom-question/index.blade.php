@extends('layouts.admin')
@section('content')
<div class="card bg-white">
    <div class="card-header border-b border-blueGray-200">
        <div class="card-header-container">
            <h6 class="card-title">
                {{ trans('cruds.customQuestion.title_singular') }}
                {{ trans('global.list') }}
            </h6>

            @can('custom_question_create')
                <a class="btn btn-indigo" href="{{ route('admin.custom-questions.create') }}">
                    {{ trans('global.add') }} {{ trans('cruds.customQuestion.title_singular') }}
                </a>
            @endcan
        </div>
    </div>
    @livewire('custom-question.index')

</div>
@endsection