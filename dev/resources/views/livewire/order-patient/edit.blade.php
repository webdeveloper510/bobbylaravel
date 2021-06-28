<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('orderPatient.patient_id') ? 'invalid' : '' }}">
        <label class="form-label" for="patient">{{ trans('cruds.orderPatient.fields.patient') }}</label>
        <x-select-list class="form-control" id="patient" name="patient" :options="$this->listsForFields['patient']" wire:model="orderPatient.patient_id" />
        <div class="validation-message">
            {{ $errors->first('orderPatient.patient_id') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.orderPatient.fields.patient_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('orderPatient.order_id') ? 'invalid' : '' }}">
        <label class="form-label" for="order">{{ trans('cruds.orderPatient.fields.order') }}</label>
        <x-select-list class="form-control" id="order" name="order" :options="$this->listsForFields['order']" wire:model="orderPatient.order_id" />
        <div class="validation-message">
            {{ $errors->first('orderPatient.order_id') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.orderPatient.fields.order_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('orderPatient.diagnosis') ? 'invalid' : '' }}">
        <label class="form-label" for="diagnosis">{{ trans('cruds.orderPatient.fields.diagnosis') }}</label>
        <input class="form-control" type="checkbox" name="diagnosis" id="diagnosis" wire:model.defer="orderPatient.diagnosis">
        <div class="validation-message">
            {{ $errors->first('orderPatient.diagnosis') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.orderPatient.fields.diagnosis_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('orderPatient.other_clinical_trials') ? 'invalid' : '' }}">
        <label class="form-label" for="other_clinical_trials">{{ trans('cruds.orderPatient.fields.other_clinical_trials') }}</label>
        <input class="form-control" type="checkbox" name="other_clinical_trials" id="other_clinical_trials" wire:model.defer="orderPatient.other_clinical_trials">
        <div class="validation-message">
            {{ $errors->first('orderPatient.other_clinical_trials') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.orderPatient.fields.other_clinical_trials_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('orderPatient.qualified') ? 'invalid' : '' }}">
        <label class="form-label" for="qualified">{{ trans('cruds.orderPatient.fields.qualified') }}</label>
        <input class="form-control" type="checkbox" name="qualified" id="qualified" wire:model.defer="orderPatient.qualified">
        <div class="validation-message">
            {{ $errors->first('orderPatient.qualified') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.orderPatient.fields.qualified_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('orderPatient.dnq_reason') ? 'invalid' : '' }}">
        <label class="form-label" for="dnq_reason">{{ trans('cruds.orderPatient.fields.dnq_reason') }}</label>
        <input class="form-control" type="text" name="dnq_reason" id="dnq_reason" wire:model.defer="orderPatient.dnq_reason">
        <div class="validation-message">
            {{ $errors->first('orderPatient.dnq_reason') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.orderPatient.fields.dnq_reason_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('orderPatient.patient_status_id') ? 'invalid' : '' }}">
        <label class="form-label" for="patient_status">{{ trans('cruds.orderPatient.fields.patient_status') }}</label>
        <x-select-list class="form-control" id="patient_status" name="patient_status" :options="$this->listsForFields['patient_status']" wire:model="orderPatient.patient_status_id" />
        <div class="validation-message">
            {{ $errors->first('orderPatient.patient_status_id') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.orderPatient.fields.patient_status_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.order-patients.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>