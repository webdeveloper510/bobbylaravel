<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('customQuestion.order_id') ? 'invalid' : '' }}">
        <label class="form-label" for="order">{{ trans('cruds.customQuestion.fields.order') }}</label>
        <x-select-list class="form-control" id="order" name="order" :options="$this->listsForFields['order']" wire:model="customQuestion.order_id" />
        <div class="validation-message">
            {{ $errors->first('customQuestion.order_id') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.customQuestion.fields.order_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('customQuestion.question') ? 'invalid' : '' }}">
        <label class="form-label" for="question">{{ trans('cruds.customQuestion.fields.question') }}</label>
        <input class="form-control" type="text" name="question" id="question" wire:model.defer="customQuestion.question">
        <div class="validation-message">
            {{ $errors->first('customQuestion.question') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.customQuestion.fields.question_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('customQuestion.answer') ? 'invalid' : '' }}">
        <label class="form-label" for="answer">{{ trans('cruds.customQuestion.fields.answer') }}</label>
        <input class="form-control" type="text" name="answer" id="answer" wire:model.defer="customQuestion.answer">
        <div class="validation-message">
            {{ $errors->first('customQuestion.answer') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.customQuestion.fields.answer_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('customQuestion.answer_type_id') ? 'invalid' : '' }}">
        <label class="form-label" for="answer_type">{{ trans('cruds.customQuestion.fields.answer_type') }}</label>
        <x-select-list class="form-control" id="answer_type" name="answer_type" :options="$this->listsForFields['answer_type']" wire:model="customQuestion.answer_type_id" />
        <div class="validation-message">
            {{ $errors->first('customQuestion.answer_type_id') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.customQuestion.fields.answer_type_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('customQuestion.status') ? 'invalid' : '' }}">
        <label class="form-label" for="status">{{ trans('cruds.customQuestion.fields.status') }}</label>
        <input class="form-control" type="text" name="status" id="status" wire:model.defer="customQuestion.status">
        <div class="validation-message">
            {{ $errors->first('customQuestion.status') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.customQuestion.fields.status_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.custom-questions.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>