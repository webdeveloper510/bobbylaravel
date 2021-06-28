<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('therapeuticArea.therapeutic_area') ? 'invalid' : '' }}">
        <label class="form-label" for="therapeutic_area">{{ trans('cruds.therapeuticArea.fields.therapeutic_area') }}</label>
        <input class="form-control" type="text" name="therapeutic_area" id="therapeutic_area" wire:model.defer="therapeuticArea.therapeutic_area">
        <div class="validation-message">
            {{ $errors->first('therapeuticArea.therapeutic_area') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.therapeuticArea.fields.therapeutic_area_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.therapeutic-areas.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>