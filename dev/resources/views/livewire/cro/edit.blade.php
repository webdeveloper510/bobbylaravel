<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('cro.cro_name') ? 'invalid' : '' }}">
        <label class="form-label" for="cro_name">{{ trans('cruds.cro.fields.cro_name') }}</label>
        <input class="form-control" type="text" name="cro_name" id="cro_name" wire:model.defer="cro.cro_name">
        <div class="validation-message">
            {{ $errors->first('cro.cro_name') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.cro.fields.cro_name_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.cros.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>