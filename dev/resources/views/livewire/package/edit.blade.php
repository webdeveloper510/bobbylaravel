<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('package.package') ? 'invalid' : '' }}">
        <label class="form-label" for="package">{{ trans('cruds.package.fields.package') }}</label>
        <input class="form-control" type="text" name="package" id="package" wire:model.defer="package.package">
        <div class="validation-message">
            {{ $errors->first('package.package') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.package.fields.package_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('package.price') ? 'invalid' : '' }}">
        <label class="form-label" for="price">{{ trans('cruds.package.fields.price') }}</label>
        <input class="form-control" type="number" name="price" id="price" wire:model.defer="package.price" step="1">
        <div class="validation-message">
            {{ $errors->first('package.price') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.package.fields.price_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('package.duration') ? 'invalid' : '' }}">
        <label class="form-label" for="duration">{{ trans('cruds.package.fields.duration') }}</label>
        <input class="form-control" type="number" name="duration" id="duration" wire:model.defer="package.duration" step="1">
        <div class="validation-message">
            {{ $errors->first('package.duration') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.package.fields.duration_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.packages.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>