<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('medicationPatient.patient_id') ? 'invalid' : '' }}">
        <label class="form-label" for="patient">{{ trans('cruds.medicationPatient.fields.patient') }}</label>
        <x-select-list class="form-control" id="patient" name="patient" :options="$this->listsForFields['patient']" wire:model="medicationPatient.patient_id" />
        <div class="validation-message">
            {{ $errors->first('medicationPatient.patient_id') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.medicationPatient.fields.patient_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('medicationPatient.medication_id') ? 'invalid' : '' }}">
        <label class="form-label" for="medication">{{ trans('cruds.medicationPatient.fields.medication') }}</label>
        <x-select-list class="form-control" id="medication" name="medication" :options="$this->listsForFields['medication']" wire:model="medicationPatient.medication_id" />
        <div class="validation-message">
            {{ $errors->first('medicationPatient.medication_id') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.medicationPatient.fields.medication_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.medication-patients.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>