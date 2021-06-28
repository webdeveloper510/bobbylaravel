@extends('layouts.admin')
@section('content')

<div class="card bg-blueGray-100">
    <div class="card-header">
        <div class="card-header-container">
            <h6 class="card-title">
                {{ trans('global.edit') }}
                {{ trans('cruds.sponsor.title_singular') }}:
                {{ trans('cruds.sponsor.fields.id') }}
                {{ $sponsor->id }}
            </h6>
        </div>
    </div>

    <div class="card-body">
        @livewire('sponsor.edit', [$sponsor])
    </div>
</div>
@endsection