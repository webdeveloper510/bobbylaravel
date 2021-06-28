<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('answerType.answer_type') ? 'invalid' : '' }}">
        <label class="form-label" for="answer_type">{{ trans('cruds.answerType.fields.answer_type') }}</label>
        <input class="form-control" type="text" name="answer_type" id="answer_type" wire:model.defer="answerType.answer_type">
        <div class="validation-message">
            {{ $errors->first('answerType.answer_type') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.answerType.fields.answer_type_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.answer-types.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>