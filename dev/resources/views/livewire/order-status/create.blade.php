<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('orderStatus.status') ? 'invalid' : '' }}">
        <label class="form-label" for="status">{{ trans('cruds.orderStatus.fields.status') }}</label>
        <input class="form-control" type="text" name="status" id="status" wire:model.defer="orderStatus.status">
        <div class="validation-message">
            {{ $errors->first('orderStatus.status') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.orderStatus.fields.status_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.order-statuses.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>