<div>
    <div class="card-controls sm:flex">
        <div class="w-full sm:w-1/2">
            Per page:
            <select wire:model="perPage" class="form-select w-full sm:w-1/6">
                @foreach($paginationOptions as $value)
                    <option value="{{ $value }}">{{ $value }}</option>
                @endforeach
            </select>

            @can('custom_question_delete')
                <button class="btn btn-rose ml-3 disabled:opacity-50 disabled:cursor-not-allowed" type="button" wire:click="confirm('deleteSelected')" wire:loading.attr="disabled" {{ $this->selectedCount ? '' : 'disabled' }}>
                    {{ __('Delete Selected') }}
                </button>
            @endcan

            @can('custom_question_create')
                <x-csv-import route="{{ route('admin.custom-questions.csv.store') }}" />
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
                            {{ trans('cruds.customQuestion.fields.id') }}
                            @include('components.table.sort', ['field' => 'id'])
                        </th>
                        <th>
                            {{ trans('cruds.customQuestion.fields.order') }}
                            @include('components.table.sort', ['field' => 'order.order'])
                        </th>
                        <th>
                            {{ trans('cruds.customQuestion.fields.question') }}
                            @include('components.table.sort', ['field' => 'question'])
                        </th>
                        <th>
                            {{ trans('cruds.customQuestion.fields.answer') }}
                            @include('components.table.sort', ['field' => 'answer'])
                        </th>
                        <th>
                            {{ trans('cruds.customQuestion.fields.answer_type') }}
                            @include('components.table.sort', ['field' => 'answer_type.answer_type'])
                        </th>
                        <th>
                            {{ trans('cruds.customQuestion.fields.status') }}
                            @include('components.table.sort', ['field' => 'status'])
                        </th>
                        <th>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($customQuestions as $customQuestion)
                        <tr>
                            <td>
                                <input type="checkbox" value="{{ $customQuestion->id }}" wire:model="selected">
                            </td>
                            <td>
                                {{ $customQuestion->id }}
                            </td>
                            <td>
                                @if($customQuestion->Order)
                                    <span class="badge badge-relationship">{{ $customQuestion->Order->order ?? '' }}</span>
                                @endif
                            </td>
                            <td>
                                {{ $customQuestion->question }}
                            </td>
                            <td>
                                {{ $customQuestion->answer }}
                            </td>
                            <td>
                                @if($customQuestion->AnswerType)
                                    <span class="badge badge-relationship">{{ $customQuestion->AnswerType->answer_type ?? '' }}</span>
                                @endif
                            </td>
                            <td>
                                {{ $customQuestion->status }}
                            </td>
                            <td>
                                <div class="flex justify-end">
                                    @can('custom_question_show')
                                        <a class="btn btn-sm btn-info mr-2" href="{{ route('admin.custom-questions.show', $customQuestion) }}">
                                            {{ trans('global.view') }}
                                        </a>
                                    @endcan
                                    @can('custom_question_edit')
                                        <a class="btn btn-sm btn-success mr-2" href="{{ route('admin.custom-questions.edit', $customQuestion) }}">
                                            {{ trans('global.edit') }}
                                        </a>
                                    @endcan
                                    @can('custom_question_delete')
                                        <button class="btn btn-sm btn-rose mr-2" type="button" wire:click="confirm('delete', {{ $customQuestion->id }})" wire:loading.attr="disabled">
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
            {{ $customQuestions->links() }}
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