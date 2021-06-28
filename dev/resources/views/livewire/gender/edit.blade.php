<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('gender.gender') ? 'invalid' : '' }}">
        <label class="form-label" for="gender">{{ trans('cruds.gender.fields.gender') }}</label>
        <input class="form-control" type="text" name="gender" id="gender" wire:model.defer="gender.gender">
        <div class="validation-message">
            {{ $errors->first('gender.gender') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.gender.fields.gender_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.genders.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>