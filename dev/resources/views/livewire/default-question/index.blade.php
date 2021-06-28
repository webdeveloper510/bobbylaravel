<div>
    <div class="card-controls sm:flex">
        <div class="w-full sm:w-1/2">
            Per page:
            <select wire:model="perPage" class="form-select w-full sm:w-1/6">
                @foreach($paginationOptions as $value)
                    <option value="{{ $value }}">{{ $value }}</option>
                @endforeach
            </select>

            @can('default_question_delete')
                <button class="btn btn-rose ml-3 disabled:opacity-50 disabled:cursor-not-allowed" type="button" wire:click="confirm('deleteSelected')" wire:loading.attr="disabled" {{ $this->selectedCount ? '' : 'disabled' }}>
                    {{ __('Delete Selected') }}
                </button>
            @endcan

            @can('default_question_create')
                <x-csv-import route="{{ route('admin.default-questions.csv.store') }}" />
            @endcan

        </div>
        <div class="w-full sm:w-1/2 sm:text-right">
            Search:
            <input type="text" wire:model.debounce.300ms="search" class="w-full sm:w-1/3 inline-block" />
        </div>
    </div>
    <div wire:loading.delay class="col-12 alert alert-info">
        Loading...
    </div>

    <div class="overflow-hidden">
        <div class="overflow-x-auto">
            <table class="table table-index w-full">
                <thead>
                    <tr>
                        <th class="w-9">
                        </th>
                        <th class="w-28">
                            {{ trans('cruds.defaultQuestion.fields.id') }}
                            @include('components.table.sort', ['field' => 'id'])
                        </th>
                        <th>
                            {{ trans('cruds.defaultQuestion.fields.order') }}
                            @include('components.table.sort', ['field' => 'order.order'])
                        </th>
                        <th>
                            {{ trans('cruds.defaultQuestion.fields.birth_date') }}
                            @include('components.table.sort', ['field' => 'birth_date'])
                        </th>
                        <th>
                            {{ trans('cruds.defaultQuestion.fields.zip_code') }}
                            @include('components.table.sort', ['field' => 'zip_code'])
                        </th>
                        <th>
                            {{ trans('cruds.defaultQuestion.fields.gender') }}
                            @include('components.table.sort', ['field' => 'gender'])
                        </th>
                        <th>
                            {{ trans('cruds.defaultQuestion.fields.ethnicity') }}
                            @include('components.table.sort', ['field' => 'ethnicity'])
                        </th>
                        <th>
                            {{ trans('cruds.defaultQuestion.fields.height') }}
                            @include('components.table.sort', ['field' => 'height'])
                        </th>
                        <th>
                            {{ trans('cruds.defaultQuestion.fields.weight') }}
                            @include('components.table.sort', ['field' => 'weight'])
                        </th>
                        <th>
                            {{ trans('cruds.defaultQuestion.fields.diagnosis') }}
                            @include('components.table.sort', ['field' => 'diagnosis'])
                        </th>
                        <th>
                            {{ trans('cruds.defaultQuestion.fields.current_medications') }}
                            @include('components.table.sort', ['field' => 'current_medications'])
                        </th>
                        <th>
                            {{ trans('cruds.defaultQuestion.fields.other_conditions') }}
                            @include('components.table.sort', ['field' => 'other_conditions'])
                        </th>
                        <th>
                            {{ trans('cruds.defaultQuestion.fields.other_clinical_trials') }}
                            @include('components.table.sort', ['field' => 'other_clinical_trials'])
                        </th>
                        <th>
                            {{ trans('cruds.defaultQuestion.fields.contact_method') }}
                            @include('components.table.sort', ['field' => 'contact_method'])
                        </th>
                        <th>
                            {{ trans('cruds.defaultQuestion.fields.contact_time') }}
                            @include('components.table.sort', ['field' => 'contact_time'])
                        </th>
                        <th>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($defaultQuestions as $defaultQuestion)
                        <tr>
                            <td>
                                <input type="checkbox" value="{{ $defaultQuestion->id }}" wire:model="selected">
                            </td>
                            <td>
                                {{ $defaultQuestion->id }}
                            </td>
                            <td>
                                @if($defaultQuestion->Order)
                                    <span class="badge badge-relationship">{{ $defaultQuestion->Order->order ?? '' }}</span>
                                @endif
                            </td>
                            <td>
                                <input class="disabled:opacity-50 disabled:cursor-not-allowed" type="checkbox" disabled {{ $defaultQuestion->birth_date ? 'checked' : '' }}>
                            </td>
                            <td>
                                <input class="disabled:opacity-50 disabled:cursor-not-allowed" type="checkbox" disabled {{ $defaultQuestion->zip_code ? 'checked' : '' }}>
                            </td>
                            <td>
                                <input class="disabled:opacity-50 disabled:cursor-not-allowed" type="checkbox" disabled {{ $defaultQuestion->gender ? 'checked' : '' }}>
                            </td>
                            <td>
                                <input class="disabled:opacity-50 disabled:cursor-not-allowed" type="checkbox" disabled {{ $defaultQuestion->ethnicity ? 'checked' : '' }}>
                            </td>
                            <td>
                                <input class="disabled:opacity-50 disabled:cursor-not-allowed" type="checkbox" disabled {{ $defaultQuestion->height ? 'checked' : '' }}>
                            </td>
                            <td>
                                <input class="disabled:opacity-50 disabled:cursor-not-allowed" type="checkbox" disabled {{ $defaultQuestion->weight ? 'checked' : '' }}>
                            </td>
                            <td>
                                <input class="disabled:opacity-50 disabled:cursor-not-allowed" type="checkbox" disabled {{ $defaultQuestion->diagnosis ? 'checked' : '' }}>
                            </td>
                            <td>
                                <input class="disabled:opacity-50 disabled:cursor-not-allowed" type="checkbox" disabled {{ $defaultQuestion->current_medications ? 'checked' : '' }}>
                            </td>
                            <td>
                                <input class="disabled:opacity-50 disabled:cursor-not-allowed" type="checkbox" disabled {{ $defaultQuestion->other_conditions ? 'checked' : '' }}>
                            </td>
                            <td>
                                <input class="disabled:opacity-50 disabled:cursor-not-allowed" type="checkbox" disabled {{ $defaultQuestion->other_clinical_trials ? 'checked' : '' }}>
                            </td>
                            <td>
                                <input class="disabled:opacity-50 disabled:cursor-not-allowed" type="checkbox" disabled {{ $defaultQuestion->contact_method ? 'checked' : '' }}>
                            </td>
                            <td>
                                <input class="disabled:opacity-50 disabled:cursor-not-allowed" type="checkbox" disabled {{ $defaultQuestion->contact_time ? 'checked' : '' }}>
                            </td>
                            <td>
                                <div class="flex justify-end">
                                    @can('default_question_show')
                                        <a class="btn btn-sm btn-info mr-2" href="{{ route('admin.default-questions.show', $defaultQuestion) }}">
                                            {{ trans('global.view') }}
                                        </a>
                                    @endcan
                                    @can('default_question_edit')
                                        <a class="btn btn-sm btn-success mr-2" href="{{ route('admin.default-questions.edit', $defaultQuestion) }}">
                                            {{ trans('global.edit') }}
                                        </a>
                                    @endcan
                                    @can('default_question_delete')
                                        <button class="btn btn-sm btn-rose mr-2" type="button" wire:click="confirm('delete', {{ $defaultQuestion->id }})" wire:loading.attr="disabled">
                                            {{ trans('global.delete') }}
                                        </button>
                                    @endcan
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="10">No entries found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <div class="card-body">
        <div class="pt-3">
            @if($this->selectedCount)
                <p class="text-sm leading-5">
                    <span class="font-medium">
                        {{ $this->selectedCount }}
                    </span>
                    {{ __('Entries selected') }}
                </p>
            @endif
            {{ $defaultQuestions->links() }}
        </div>
    </div>
</div>

@push('scripts')
    <script>
        Livewire.on('confirm', e => {
    if (!confirm("{{ trans('global.areYouSure') }}")) {
        return
    }
@this[e.callback](...e.argv)
})
    </script>
@endpush