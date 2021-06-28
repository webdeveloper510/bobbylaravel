<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('patientSource.patient_id') ? 'invalid' : '' }}">
        <label class="form-label" for="patient">{{ trans('cruds.patientSource.fields.patient') }}</label>
        <x-select-list class="form-control" id="patient" name="patient" :options="$this->listsForFields['patient']" wire:model="patientSource.patient_id" />
        <div class="validation-message">
            {{ $errors->first('patientSource.patient_id') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.patientSource.fields.patient_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('patientSource.order_id') ? 'invalid' : '' }}">
        <label class="form-label" for="order">{{ trans('cruds.patientSource.fields.order') }}</label>
        <x-select-list class="form-control" id="order" name="order" :options="$this->listsForFields['order']" wire:model="patientSource.order_id" />
        <div class="validation-message">
            {{ $errors->first('patientSource.order_id') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.patientSource.fields.order_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('patientSource.order_patient_id') ? 'invalid' : '' }}">
        <label class="form-label" for="order_patient">{{ trans('cruds.patientSource.fields.order_patient') }}</label>
        <x-select-list class="form-control" id="order_patient" name="order_patient" :options="$this->listsForFields['order_patient']" wire:model="patientSource.order_patient_id" />
        <div class="validation-message">
            {{ $errors->first('patientSource.order_patient_id') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.patientSource.fields.order_patient_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('patientSource.ip_address') ? 'invalid' : '' }}">
        <label class="form-label" for="ip_address">{{ trans('cruds.patientSource.fields.ip_address') }}</label>
        <input class="form-control" type="text" name="ip_address" id="ip_address" wire:model.defer="patientSource.ip_address">
        <div class="validation-message">
            {{ $errors->first('patientSource.ip_address') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.patientSource.fields.ip_address_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('patientSource.url_referrer') ? 'invalid' : '' }}">
        <label class="form-label" for="url_referrer">{{ trans('cruds.patientSource.fields.url_referrer') }}</label>
        <input class="form-control" type="text" name="url_referrer" id="url_referrer" wire:model.defer="patientSource.url_referrer">
        <div class="validation-message">
            {{ $errors->first('patientSource.url_referrer') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.patientSource.fields.url_referrer_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('patientSource.utm_campaign') ? 'invalid' : '' }}">
        <label class="form-label" for="utm_campaign">{{ trans('cruds.patientSource.fields.utm_campaign') }}</label>
        <input class="form-control" type="text" name="utm_campaign" id="utm_campaign" wire:model.defer="patientSource.utm_campaign">
        <div class="validation-message">
            {{ $errors->first('patientSource.utm_campaign') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.patientSource.fields.utm_campaign_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('patientSource.utm_content') ? 'invalid' : '' }}">
        <label class="form-label" for="utm_content">{{ trans('cruds.patientSource.fields.utm_content') }}</label>
        <input class="form-control" type="text" name="utm_content" id="utm_content" wire:model.defer="patientSource.utm_content">
        <div class="validation-message">
            {{ $errors->first('patientSource.utm_content') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.patientSource.fields.utm_content_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('patientSource.utm_medium') ? 'invalid' : '' }}">
        <label class="form-label" for="utm_medium">{{ trans('cruds.patientSource.fields.utm_medium') }}</label>
        <input class="form-control" type="text" name="utm_medium" id="utm_medium" wire:model.defer="patientSource.utm_medium">
        <div class="validation-message">
            {{ $errors->first('patientSource.utm_medium') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.patientSource.fields.utm_medium_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('patientSource.utm_source') ? 'invalid' : '' }}">
        <label class="form-label" for="utm_source">{{ trans('cruds.patientSource.fields.utm_source') }}</label>
        <input class="form-control" type="text" name="utm_source" id="utm_source" wire:model.defer="patientSource.utm_source">
        <div class="validation-message">
            {{ $errors->first('patientSource.utm_source') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.patientSource.fields.utm_source_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('patientSource.utm_term') ? 'invalid' : '' }}">
        <label class="form-label" for="utm_term">{{ trans('cruds.patientSource.fields.utm_term') }}</label>
        <input class="form-control" type="text" name="utm_term" id="utm_term" wire:model.defer="patientSource.utm_term">
        <div class="validation-message">
            {{ $errors->first('patientSource.utm_term') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.patientSource.fields.utm_term_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.patient-sources.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>