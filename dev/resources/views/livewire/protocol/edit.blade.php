<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('protocol.protocol') ? 'invalid' : '' }}">
        <label class="form-label" for="protocol">{{ trans('cruds.protocol.fields.protocol') }}</label>
        <input class="form-control" type="text" name="protocol" id="protocol" wire:model.defer="protocol.protocol">
        <div class="validation-message">
            {{ $errors->first('protocol.protocol') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.protocol.fields.protocol_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('protocol.file') ? 'invalid' : '' }}">
        <label class="form-label" for="file">{{ trans('cruds.protocol.fields.file') }}</label>
        <input class="form-control" type="text" name="file" id="file" wire:model.defer="protocol.file">
        <div class="validation-message">
            {{ $errors->first('protocol.file') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.protocol.fields.file_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.protocols.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>