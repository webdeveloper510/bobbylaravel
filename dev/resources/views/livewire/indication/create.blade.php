<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('indication.indication') ? 'invalid' : '' }}">
        <label class="form-label" for="indication">{{ trans('cruds.indication.fields.indication') }}</label>
        <input class="form-control" type="text" name="indication" id="indication" wire:model.defer="indication.indication">
        <div class="validation-message">
            {{ $errors->first('indication.indication') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.indication.fields.indication_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('indication.therapeutic_area_id') ? 'invalid' : '' }}">
        <label class="form-label" for="therapeutic_area">{{ trans('cruds.indication.fields.therapeutic_area') }}</label>
        <x-select-list class="form-control" id="therapeutic_area" name="therapeutic_area" :options="$this->listsForFields['therapeutic_area']" wire:model="indication.therapeutic_area_id" />
        <div class="validation-message">
            {{ $errors->first('indication.therapeutic_area_id') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.indication.fields.therapeutic_area_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('indication.description') ? 'invalid' : '' }}">
        <label class="form-label" for="description">{{ trans('cruds.indication.fields.description') }}</label>
        <input class="form-control" type="text" name="description" id="description" wire:model.defer="indication.description">
        <div class="validation-message">
            {{ $errors->first('indication.description') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.indication.fields.description_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('indication.symptoms') ? 'invalid' : '' }}">
        <label class="form-label">{{ trans('cruds.indication.fields.symptoms') }}</label>
        <select class="form-control" wire:model="indication.symptoms">
            <option value="null" disabled>{{ trans('global.pleaseSelect') }}...</option>
            @foreach($this->listsForFields['symptoms'] as $key => $value)
                <option value="{{ $key }}">{{ $value }}</option>
            @endforeach
        </select>
        <div class="validation-message">
            {{ $errors->first('indication.symptoms') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.indication.fields.symptoms_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('indication.causes') ? 'invalid' : '' }}">
        <label class="form-label" for="causes">{{ trans('cruds.indication.fields.causes') }}</label>
        <input class="form-control" type="text" name="causes" id="causes" wire:model.defer="indication.causes">
        <div class="validation-message">
            {{ $errors->first('indication.causes') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.indication.fields.causes_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('indication.treatments') ? 'invalid' : '' }}">
        <label class="form-label">{{ trans('cruds.indication.fields.treatments') }}</label>
        <select class="form-control" wire:model="indication.treatments">
            <option value="null" disabled>{{ trans('global.pleaseSelect') }}...</option>
            @foreach($this->listsForFields['treatments'] as $key => $value)
                <option value="{{ $key }}">{{ $value }}</option>
            @endforeach
        </select>
        <div class="validation-message">
            {{ $errors->first('indication.treatments') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.indication.fields.treatments_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('indication.risk_factors') ? 'invalid' : '' }}">
        <label class="form-label">{{ trans('cruds.indication.fields.risk_factors') }}</label>
        <select class="form-control" wire:model="indication.risk_factors">
            <option value="null" disabled>{{ trans('global.pleaseSelect') }}...</option>
            @foreach($this->listsForFields['risk_factors'] as $key => $value)
                <option value="{{ $key }}">{{ $value }}</option>
            @endforeach
        </select>
        <div class="validation-message">
            {{ $errors->first('indication.risk_factors') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.indication.fields.risk_factors_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.indications.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>