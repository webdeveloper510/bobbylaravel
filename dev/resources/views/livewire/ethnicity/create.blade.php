<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('ethnicity.ethnicity') ? 'invalid' : '' }}">
        <label class="form-label" for="ethnicity">{{ trans('cruds.ethnicity.fields.ethnicity') }}</label>
        <input class="form-control" type="text" name="ethnicity" id="ethnicity" wire:model.defer="ethnicity.ethnicity">
        <div class="validation-message">
            {{ $errors->first('ethnicity.ethnicity') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.ethnicity.fields.ethnicity_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.ethnicities.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>