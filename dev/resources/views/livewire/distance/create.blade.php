<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('distance.distance') ? 'invalid' : '' }}">
        <label class="form-label" for="distance">{{ trans('cruds.distance.fields.distance') }}</label>
        <input class="form-control" type="text" name="distance" id="distance" wire:model.defer="distance.distance">
        <div class="validation-message">
            {{ $errors->first('distance.distance') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.distance.fields.distance_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.distances.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>