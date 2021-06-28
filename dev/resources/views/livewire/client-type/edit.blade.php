<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('clientType.client_type') ? 'invalid' : '' }}">
        <label class="form-label" for="client_type">{{ trans('cruds.clientType.fields.client_type') }}</label>
        <input class="form-control" type="text" name="client_type" id="client_type" wire:model.defer="clientType.client_type">
        <div class="validation-message">
            {{ $errors->first('clientType.client_type') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.clientType.fields.client_type_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.client-types.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>