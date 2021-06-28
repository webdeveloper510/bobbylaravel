@extends('layouts.admin')
@section('content')

<div class="card bg-blueGray-100">
    <div class="card-header">
        <div class="card-header-container">
            <h6 class="card-title">
                {{ trans('global.edit') }}
                {{ trans('cruds.faqCategory.title_singular') }}:
                {{ trans('cruds.faqCategory.fields.id') }}
                {{ $faqCategory->id }}
            </h6>
        </div>
    </div>

    <div class="card-body">
        @livewire('faq-category.edit', [$faqCategory])
    </div>
</div>
@endsection