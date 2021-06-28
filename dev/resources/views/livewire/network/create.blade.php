<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('network.network_name') ? 'invalid' : '' }}">
        <label class="form-label" for="network_name">{{ trans('cruds.network.fields.network_name') }}</label>
        <input class="form-control" type="text" name="network_name" id="network_name" wire:model.defer="network.network_name">
        <div class="validation-message">
            {{ $errors->first('network.network_name') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.network.fields.network_name_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.networks.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>