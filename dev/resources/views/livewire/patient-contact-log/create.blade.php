<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('patientContactLog.order_patient_id') ? 'invalid' : '' }}">
        <label class="form-label" for="order_patient">{{ trans('cruds.patientContactLog.fields.order_patient') }}</label>
        <x-select-list class="form-control" id="order_patient" name="order_patient" :options="$this->listsForFields['order_patient']" wire:model="patientContactLog.order_patient_id" />
        <div class="validation-message">
            {{ $errors->first('patientContactLog.order_patient_id') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.patientContactLog.fields.order_patient_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('patientContactLog.patient_status_id') ? 'invalid' : '' }}">
        <label class="form-label" for="patient_status">{{ trans('cruds.patientContactLog.fields.patient_status') }}</label>
        <x-select-list class="form-control" id="patient_status" name="patient_status" :options="$this->listsForFields['patient_status']" wire:model="patientContactLog.patient_status_id" />
        <div class="validation-message">
            {{ $errors->first('patientContactLog.patient_status_id') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.patientContactLog.fields.patient_status_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('patientContactLog.note') ? 'invalid' : '' }}">
        <label class="form-label" for="note">{{ trans('cruds.patientContactLog.fields.note') }}</label>
        <textarea class="form-control" name="note" id="note" wire:model.defer="patientContactLog.note" rows="4"></textarea>
        <div class="validation-message">
            {{ $errors->first('patientContactLog.note') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.patientContactLog.fields.note_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('patientContactLog.user_id') ? 'invalid' : '' }}">
        <label class="form-label" for="user">{{ trans('cruds.patientContactLog.fields.user') }}</label>
        <x-select-list class="form-control" id="user" name="user" :options="$this->listsForFields['user']" wire:model="patientContactLog.user_id" />
        <div class="validation-message">
            {{ $errors->first('patientContactLog.user_id') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.patientContactLog.fields.user_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.patient-contact-logs.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>