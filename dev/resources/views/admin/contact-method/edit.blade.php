@extends('layouts.admin')
@section('content')

<div class="card bg-blueGray-100">
    <div class="card-header">
        <div class="card-header-container">
            <h6 class="card-title">
                {{ trans('global.edit') }}
                {{ trans('cruds.contactMethod.title_singular') }}:
                {{ trans('cruds.contactMethod.fields.id') }}
                {{ $contactMethod->id }}
            </h6>
        </div>
    </div>

    <div class="card-body">
        @livewire('contact-method.edit', [$contactMethod])
    </div>
</div>
@endsection