<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('patientStatus.status') ? 'invalid' : '' }}">
        <label class="form-label" for="status">{{ trans('cruds.patientStatus.fields.status') }}</label>
        <input class="form-control" type="text" name="status" id="status" wire:model.defer="patientStatus.status">
        <div class="validation-message">
            {{ $errors->first('patientStatus.status') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.patientStatus.fields.status_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.patient-statuses.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>