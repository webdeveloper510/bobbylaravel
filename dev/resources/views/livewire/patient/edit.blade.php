<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('role') ? 'invalid' : '' }}">
        <label class="form-label" for="role">{{ trans('cruds.patient.fields.role') }}</label>
        <x-select-list class="form-control" id="role" name="role" wire:model="role" :options="$this->listsForFields['role']" multiple />
        <div class="validation-message">
            {{ $errors->first('role') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.patient.fields.role_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('patient.user_id') ? 'invalid' : '' }}">
        <label class="form-label" for="user">{{ trans('cruds.patient.fields.user') }}</label>
        <x-select-list class="form-control" id="user" name="user" :options="$this->listsForFields['user']" wire:model="patient.user_id" />
        <div class="validation-message">
            {{ $errors->first('patient.user_id') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.patient.fields.user_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('patient.patient') ? 'invalid' : '' }}">
        <label class="form-label" for="patient">{{ trans('cruds.patient.fields.patient') }}</label>
        <input class="form-control" type="text" name="patient" id="patient" wire:model.defer="patient.patient">
        <div class="validation-message">
            {{ $errors->first('patient.patient') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.patient.fields.patient_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('patient.birth_date') ? 'invalid' : '' }}">
        <label class="form-label" for="birth_date">{{ trans('cruds.patient.fields.birth_date') }}</label>
        <input class="form-control" type="text" name="birth_date" id="birth_date" wire:model.defer="patient.birth_date">
        <div class="validation-message">
            {{ $errors->first('patient.birth_date') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.patient.fields.birth_date_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('patient.height_ft') ? 'invalid' : '' }}">
        <label class="form-label" for="height_ft">{{ trans('cruds.patient.fields.height_ft') }}</label>
        <input class="form-control" type="text" name="height_ft" id="height_ft" wire:model.defer="patient.height_ft">
        <div class="validation-message">
            {{ $errors->first('patient.height_ft') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.patient.fields.height_ft_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('patient.height_in') ? 'invalid' : '' }}">
        <label class="form-label" for="height_in">{{ trans('cruds.patient.fields.height_in') }}</label>
        <input class="form-control" type="text" name="height_in" id="height_in" wire:model.defer="patient.height_in">
        <div class="validation-message">
            {{ $errors->first('patient.height_in') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.patient.fields.height_in_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('patient.weight') ? 'invalid' : '' }}">
        <label class="form-label" for="weight">{{ trans('cruds.patient.fields.weight') }}</label>
        <input class="form-control" type="text" name="weight" id="weight" wire:model.defer="patient.weight">
        <div class="validation-message">
            {{ $errors->first('patient.weight') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.patient.fields.weight_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('patient.bmi') ? 'invalid' : '' }}">
        <label class="form-label" for="bmi">{{ trans('cruds.patient.fields.bmi') }}</label>
        <input class="form-control" type="number" name="bmi" id="bmi" wire:model.defer="patient.bmi" step="1">
        <div class="validation-message">
            {{ $errors->first('patient.bmi') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.patient.fields.bmi_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('patient.gender_id') ? 'invalid' : '' }}">
        <label class="form-label" for="gender">{{ trans('cruds.patient.fields.gender') }}</label>
        <x-select-list class="form-control" id="gender" name="gender" :options="$this->listsForFields['gender']" wire:model="patient.gender_id" />
        <div class="validation-message">
            {{ $errors->first('patient.gender_id') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.patient.fields.gender_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('patient.ethnicity_id') ? 'invalid' : '' }}">
        <label class="form-label" for="ethnicity">{{ trans('cruds.patient.fields.ethnicity') }}</label>
        <x-select-list class="form-control" id="ethnicity" name="ethnicity" :options="$this->listsForFields['ethnicity']" wire:model="patient.ethnicity_id" />
        <div class="validation-message">
            {{ $errors->first('patient.ethnicity_id') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.patient.fields.ethnicity_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('contact_method') ? 'invalid' : '' }}">
        <label class="form-label" for="contact_method">{{ trans('cruds.patient.fields.contact_method') }}</label>
        <x-select-list class="form-control" id="contact_method" name="contact_method" wire:model="contact_method" :options="$this->listsForFields['contact_method']" multiple />
        <div class="validation-message">
            {{ $errors->first('contact_method') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.patient.fields.contact_method_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('contact_time') ? 'invalid' : '' }}">
        <label class="form-label" for="contact_time">{{ trans('cruds.patient.fields.contact_time') }}</label>
        <x-select-list class="form-control" id="contact_time" name="contact_time" wire:model="contact_time" :options="$this->listsForFields['contact_time']" multiple />
        <div class="validation-message">
            {{ $errors->first('contact_time') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.patient.fields.contact_time_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('patient.distance_id') ? 'invalid' : '' }}">
        <label class="form-label" for="distance">{{ trans('cruds.patient.fields.distance') }}</label>
        <x-select-list class="form-control" id="distance" name="distance" :options="$this->listsForFields['distance']" wire:model="patient.distance_id" />
        <div class="validation-message">
            {{ $errors->first('patient.distance_id') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.patient.fields.distance_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('patient.zip_code') ? 'invalid' : '' }}">
        <label class="form-label" for="zip_code">{{ trans('cruds.patient.fields.zip_code') }}</label>
        <input class="form-control" type="text" name="zip_code" id="zip_code" wire:model.defer="patient.zip_code">
        <div class="validation-message">
            {{ $errors->first('patient.zip_code') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.patient.fields.zip_code_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.patients.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>