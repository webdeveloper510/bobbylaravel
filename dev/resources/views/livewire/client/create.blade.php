<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('client.client_name') ? 'invalid' : '' }}">
        <label class="form-label required" for="client_name">{{ trans('cruds.client.fields.client_name') }}</label>
        <input class="form-control" type="text" name="client_name" id="client_name" required wire:model.defer="client.client_name">
        <div class="validation-message">
            {{ $errors->first('client.client_name') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.client.fields.client_name_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('client.client_type_id') ? 'invalid' : '' }}">
        <label class="form-label" for="client_type">{{ trans('cruds.client.fields.client_type') }}</label>
        <x-select-list class="form-control" id="client_type" name="client_type" :options="$this->listsForFields['client_type']" wire:model="client.client_type_id" />
        <div class="validation-message">
            {{ $errors->first('client.client_type_id') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.client.fields.client_type_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('client.address') ? 'invalid' : '' }}">
        <label class="form-label" for="address">{{ trans('cruds.client.fields.address') }}</label>
        <input class="form-control" type="text" name="address" id="address" wire:model.defer="client.address">
        <div class="validation-message">
            {{ $errors->first('client.address') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.client.fields.address_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('client.address_2') ? 'invalid' : '' }}">
        <label class="form-label" for="address_2">{{ trans('cruds.client.fields.address_2') }}</label>
        <input class="form-control" type="text" name="address_2" id="address_2" wire:model.defer="client.address_2">
        <div class="validation-message">
            {{ $errors->first('client.address_2') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.client.fields.address_2_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('client.city') ? 'invalid' : '' }}">
        <label class="form-label" for="city">{{ trans('cruds.client.fields.city') }}</label>
        <input class="form-control" type="text" name="city" id="city" wire:model.defer="client.city">
        <div class="validation-message">
            {{ $errors->first('client.city') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.client.fields.city_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('client.state') ? 'invalid' : '' }}">
        <label class="form-label" for="state">{{ trans('cruds.client.fields.state') }}</label>
        <input class="form-control" type="text" name="state" id="state" wire:model.defer="client.state">
        <div class="validation-message">
            {{ $errors->first('client.state') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.client.fields.state_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('client.zip_code') ? 'invalid' : '' }}">
        <label class="form-label" for="zip_code">{{ trans('cruds.client.fields.zip_code') }}</label>
        <input class="form-control" type="text" name="zip_code" id="zip_code" wire:model.defer="client.zip_code">
        <div class="validation-message">
            {{ $errors->first('client.zip_code') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.client.fields.zip_code_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('client.country') ? 'invalid' : '' }}">
        <label class="form-label" for="country">{{ trans('cruds.client.fields.country') }}</label>
        <input class="form-control" type="text" name="country" id="country" wire:model.defer="client.country">
        <div class="validation-message">
            {{ $errors->first('client.country') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.client.fields.country_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('client.phone_number') ? 'invalid' : '' }}">
        <label class="form-label" for="phone_number">{{ trans('cruds.client.fields.phone_number') }}</label>
        <input class="form-control" type="text" name="phone_number" id="phone_number" wire:model.defer="client.phone_number">
        <div class="validation-message">
            {{ $errors->first('client.phone_number') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.client.fields.phone_number_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('client.website') ? 'invalid' : '' }}">
        <label class="form-label" for="website">{{ trans('cruds.client.fields.website') }}</label>
        <input class="form-control" type="text" name="website" id="website" wire:model.defer="client.website">
        <div class="validation-message">
            {{ $errors->first('client.website') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.client.fields.website_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('client.tracker') ? 'invalid' : '' }}">
        <label class="form-label" for="tracker">{{ trans('cruds.client.fields.tracker') }}</label>
        <input class="form-control" type="text" name="tracker" id="tracker" wire:model.defer="client.tracker">
        <div class="validation-message">
            {{ $errors->first('client.tracker') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.client.fields.tracker_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.clients.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>