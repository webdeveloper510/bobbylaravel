@extends('layouts.admin')
@section('content')

<div class="card bg-blueGray-100">
    <div class="card-header">
        <div class="card-header-container">
            <h6 class="card-title">
                {{ trans('global.edit') }}
                {{ trans('cruds.answerType.title_singular') }}:
                {{ trans('cruds.answerType.fields.id') }}
                {{ $answerType->id }}
            </h6>
        </div>
    </div>

    <div class="card-body">
        @livewire('answer-type.edit', [$answerType])
    </div>
</div>
@endsection