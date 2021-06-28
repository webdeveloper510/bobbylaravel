<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('asnwerPatient.custom_patient_id') ? 'invalid' : '' }}">
        <label class="form-label" for="custom_patient">{{ trans('cruds.asnwerPatient.fields.custom_patient') }}</label>
        <x-select-list class="form-control" id="custom_patient" name="custom_patient" :options="$this->listsForFields['custom_patient']" wire:model="asnwerPatient.custom_patient_id" />
        <div class="validation-message">
            {{ $errors->first('asnwerPatient.custom_patient_id') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.asnwerPatient.fields.custom_patient_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('asnwerPatient.order_id') ? 'invalid' : '' }}">
        <label class="form-label" for="order">{{ trans('cruds.asnwerPatient.fields.order') }}</label>
        <x-select-list class="form-control" id="order" name="order" :options="$this->listsForFields['order']" wire:model="asnwerPatient.order_id" />
        <div class="validation-message">
            {{ $errors->first('asnwerPatient.order_id') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.asnwerPatient.fields.order_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.asnwer-patients.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>