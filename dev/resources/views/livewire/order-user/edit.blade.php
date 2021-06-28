<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('orderUser.order_id') ? 'invalid' : '' }}">
        <label class="form-label" for="order">{{ trans('cruds.orderUser.fields.order') }}</label>
        <x-select-list class="form-control" id="order" name="order" :options="$this->listsForFields['order']" wire:model="orderUser.order_id" />
        <div class="validation-message">
            {{ $errors->first('orderUser.order_id') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.orderUser.fields.order_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('orderUser.user_id') ? 'invalid' : '' }}">
        <label class="form-label" for="user">{{ trans('cruds.orderUser.fields.user') }}</label>
        <x-select-list class="form-control" id="user" name="user" :options="$this->listsForFields['user']" wire:model="orderUser.user_id" />
        <div class="validation-message">
            {{ $errors->first('orderUser.user_id') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.orderUser.fields.user_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.order-users.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>