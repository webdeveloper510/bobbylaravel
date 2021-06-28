<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('sponsor.sponsor') ? 'invalid' : '' }}">
        <label class="form-label" for="sponsor">{{ trans('cruds.sponsor.fields.sponsor') }}</label>
        <input class="form-control" type="text" name="sponsor" id="sponsor" wire:model.defer="sponsor.sponsor">
        <div class="validation-message">
            {{ $errors->first('sponsor.sponsor') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.sponsor.fields.sponsor_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.sponsors.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>