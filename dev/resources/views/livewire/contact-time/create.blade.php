<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('contactTime.contact_time') ? 'invalid' : '' }}">
        <label class="form-label" for="contact_time">{{ trans('cruds.contactTime.fields.contact_time') }}</label>
        <input class="form-control" type="text" name="contact_time" id="contact_time" wire:model.defer="contactTime.contact_time">
        <div class="validation-message">
            {{ $errors->first('contactTime.contact_time') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.contactTime.fields.contact_time_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.contact-times.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>