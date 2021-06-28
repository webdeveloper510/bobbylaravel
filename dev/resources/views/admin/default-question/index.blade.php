@extends('layouts.admin')
@section('content')
<div class="card bg-white">
    <div class="card-header border-b border-blueGray-200">
        <div class="card-header-container">
            <h6 class="card-title">
                {{ trans('cruds.defaultQuestion.title_singular') }}
                {{ trans('global.list') }}
            </h6>

            @can('default_question_create')
                <a class="btn btn-indigo" href="{{ route('admin.default-questions.create') }}">
                    {{ trans('global.add') }} {{ trans('cruds.defaultQuestion.title_singular') }}
                </a>
            @endcan
        </div>
    </div>
    @livewire('default-question.index')

</div>
@endsection