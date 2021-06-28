<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('contactMethod.contact_method') ? 'invalid' : '' }}">
        <label class="form-label" for="contact_method">{{ trans('cruds.contactMethod.fields.contact_method') }}</label>
        <input class="form-control" type="text" name="contact_method" id="contact_method" wire:model.defer="contactMethod.contact_method">
        <div class="validation-message">
            {{ $errors->first('contactMethod.contact_method') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.contactMethod.fields.contact_method_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.contact-methods.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>