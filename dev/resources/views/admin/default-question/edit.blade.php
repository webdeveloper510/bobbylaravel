@extends('layouts.admin')
@section('content')

<div class="card bg-blueGray-100">
    <div class="card-header">
        <div class="card-header-container">
            <h6 class="card-title">
                {{ trans('global.edit') }}
                {{ trans('cruds.defaultQuestion.title_singular') }}:
                {{ trans('cruds.defaultQuestion.fields.id') }}
                {{ $defaultQuestion->id }}
            </h6>
        </div>
    </div>

    <div class="card-body">
        @livewire('default-question.edit', [$defaultQuestion])
    </div>
</div>
@endsection