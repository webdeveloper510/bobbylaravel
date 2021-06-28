<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('indicationPatient.patient_id') ? 'invalid' : '' }}">
        <label class="form-label" for="patient">{{ trans('cruds.indicationPatient.fields.patient') }}</label>
        <x-select-list class="form-control" id="patient" name="patient" :options="$this->listsForFields['patient']" wire:model="indicationPatient.patient_id" />
        <div class="validation-message">
            {{ $errors->first('indicationPatient.patient_id') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.indicationPatient.fields.patient_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('indicationPatient.indication_id') ? 'invalid' : '' }}">
        <label class="form-label" for="indication">{{ trans('cruds.indicationPatient.fields.indication') }}</label>
        <x-select-list class="form-control" id="indication" name="indication" :options="$this->listsForFields['indication']" wire:model="indicationPatient.indication_id" />
        <div class="validation-message">
            {{ $errors->first('indicationPatient.indication_id') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.indicationPatient.fields.indication_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.indication-patients.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>