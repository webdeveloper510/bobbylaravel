<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('defaultQuestion.order_id') ? 'invalid' : '' }}">
        <label class="form-label" for="order">{{ trans('cruds.defaultQuestion.fields.order') }}</label>
        <x-select-list class="form-control" id="order" name="order" :options="$this->listsForFields['order']" wire:model="defaultQuestion.order_id" />
        <div class="validation-message">
            {{ $errors->first('defaultQuestion.order_id') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.defaultQuestion.fields.order_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('defaultQuestion.birth_date') ? 'invalid' : '' }}">
        <label class="form-label" for="birth_date">{{ trans('cruds.defaultQuestion.fields.birth_date') }}</label>
        <input class="form-control" type="checkbox" name="birth_date" id="birth_date" wire:model.defer="defaultQuestion.birth_date">
        <div class="validation-message">
            {{ $errors->first('defaultQuestion.birth_date') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.defaultQuestion.fields.birth_date_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('defaultQuestion.zip_code') ? 'invalid' : '' }}">
        <label class="form-label" for="zip_code">{{ trans('cruds.defaultQuestion.fields.zip_code') }}</label>
        <input class="form-control" type="checkbox" name="zip_code" id="zip_code" wire:model.defer="defaultQuestion.zip_code">
        <div class="validation-message">
            {{ $errors->first('defaultQuestion.zip_code') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.defaultQuestion.fields.zip_code_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('defaultQuestion.gender') ? 'invalid' : '' }}">
        <label class="form-label" for="gender">{{ trans('cruds.defaultQuestion.fields.gender') }}</label>
        <input class="form-control" type="checkbox" name="gender" id="gender" wire:model.defer="defaultQuestion.gender">
        <div class="validation-message">
            {{ $errors->first('defaultQuestion.gender') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.defaultQuestion.fields.gender_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('defaultQuestion.ethnicity') ? 'invalid' : '' }}">
        <label class="form-label" for="ethnicity">{{ trans('cruds.defaultQuestion.fields.ethnicity') }}</label>
        <input class="form-control" type="checkbox" name="ethnicity" id="ethnicity" wire:model.defer="defaultQuestion.ethnicity">
        <div class="validation-message">
            {{ $errors->first('defaultQuestion.ethnicity') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.defaultQuestion.fields.ethnicity_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('defaultQuestion.height') ? 'invalid' : '' }}">
        <label class="form-label" for="height">{{ trans('cruds.defaultQuestion.fields.height') }}</label>
        <input class="form-control" type="checkbox" name="height" id="height" wire:model.defer="defaultQuestion.height">
        <div class="validation-message">
            {{ $errors->first('defaultQuestion.height') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.defaultQuestion.fields.height_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('defaultQuestion.weight') ? 'invalid' : '' }}">
        <label class="form-label" for="weight">{{ trans('cruds.defaultQuestion.fields.weight') }}</label>
        <input class="form-control" type="checkbox" name="weight" id="weight" wire:model.defer="defaultQuestion.weight">
        <div class="validation-message">
            {{ $errors->first('defaultQuestion.weight') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.defaultQuestion.fields.weight_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('defaultQuestion.diagnosis') ? 'invalid' : '' }}">
        <label class="form-label" for="diagnosis">{{ trans('cruds.defaultQuestion.fields.diagnosis') }}</label>
        <input class="form-control" type="checkbox" name="diagnosis" id="diagnosis" wire:model.defer="defaultQuestion.diagnosis">
        <div class="validation-message">
            {{ $errors->first('defaultQuestion.diagnosis') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.defaultQuestion.fields.diagnosis_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('defaultQuestion.current_medications') ? 'invalid' : '' }}">
        <label class="form-label" for="current_medications">{{ trans('cruds.defaultQuestion.fields.current_medications') }}</label>
        <input class="form-control" type="checkbox" name="current_medications" id="current_medications" wire:model.defer="defaultQuestion.current_medications">
        <div class="validation-message">
            {{ $errors->first('defaultQuestion.current_medications') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.defaultQuestion.fields.current_medications_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('defaultQuestion.other_conditions') ? 'invalid' : '' }}">
        <label class="form-label" for="other_conditions">{{ trans('cruds.defaultQuestion.fields.other_conditions') }}</label>
        <input class="form-control" type="checkbox" name="other_conditions" id="other_conditions" wire:model.defer="defaultQuestion.other_conditions">
        <div class="validation-message">
            {{ $errors->first('defaultQuestion.other_conditions') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.defaultQuestion.fields.other_conditions_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('defaultQuestion.other_clinical_trials') ? 'invalid' : '' }}">
        <label class="form-label" for="other_clinical_trials">{{ trans('cruds.defaultQuestion.fields.other_clinical_trials') }}</label>
        <input class="form-control" type="checkbox" name="other_clinical_trials" id="other_clinical_trials" wire:model.defer="defaultQuestion.other_clinical_trials">
        <div class="validation-message">
            {{ $errors->first('defaultQuestion.other_clinical_trials') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.defaultQuestion.fields.other_clinical_trials_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('defaultQuestion.contact_method') ? 'invalid' : '' }}">
        <label class="form-label" for="contact_method">{{ trans('cruds.defaultQuestion.fields.contact_method') }}</label>
        <input class="form-control" type="checkbox" name="contact_method" id="contact_method" wire:model.defer="defaultQuestion.contact_method">
        <div class="validation-message">
            {{ $errors->first('defaultQuestion.contact_method') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.defaultQuestion.fields.contact_method_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('defaultQuestion.contact_time') ? 'invalid' : '' }}">
        <label class="form-label" for="contact_time">{{ trans('cruds.defaultQuestion.fields.contact_time') }}</label>
        <input class="form-control" type="checkbox" name="contact_time" id="contact_time" wire:model.defer="defaultQuestion.contact_time">
        <div class="validation-message">
            {{ $errors->first('defaultQuestion.contact_time') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.defaultQuestion.fields.contact_time_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.default-questions.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>