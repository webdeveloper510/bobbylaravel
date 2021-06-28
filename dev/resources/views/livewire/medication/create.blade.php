<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('medication.brand_name') ? 'invalid' : '' }}">
        <label class="form-label" for="brand_name">{{ trans('cruds.medication.fields.brand_name') }}</label>
        <input class="form-control" type="text" name="brand_name" id="brand_name" wire:model.defer="medication.brand_name">
        <div class="validation-message">
            {{ $errors->first('medication.brand_name') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.medication.fields.brand_name_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('medication.sponsor_name') ? 'invalid' : '' }}">
        <label class="form-label" for="sponsor_name">{{ trans('cruds.medication.fields.sponsor_name') }}</label>
        <input class="form-control" type="text" name="sponsor_name" id="sponsor_name" wire:model.defer="medication.sponsor_name">
        <div class="validation-message">
            {{ $errors->first('medication.sponsor_name') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.medication.fields.sponsor_name_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('medication.application_number') ? 'invalid' : '' }}">
        <label class="form-label" for="application_number">{{ trans('cruds.medication.fields.application_number') }}</label>
        <input class="form-control" type="text" name="application_number" id="application_number" wire:model.defer="medication.application_number">
        <div class="validation-message">
            {{ $errors->first('medication.application_number') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.medication.fields.application_number_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('medication.dosage_form') ? 'invalid' : '' }}">
        <label class="form-label" for="dosage_form">{{ trans('cruds.medication.fields.dosage_form') }}</label>
        <input class="form-control" type="text" name="dosage_form" id="dosage_form" wire:model.defer="medication.dosage_form">
        <div class="validation-message">
            {{ $errors->first('medication.dosage_form') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.medication.fields.dosage_form_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.medications.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>