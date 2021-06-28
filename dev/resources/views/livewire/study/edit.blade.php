<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('study.indication_id') ? 'invalid' : '' }}">
        <label class="form-label" for="indication">{{ trans('cruds.study.fields.indication') }}</label>
        <x-select-list class="form-control" id="indication" name="indication" :options="$this->listsForFields['indication']" wire:model="study.indication_id" />
        <div class="validation-message">
            {{ $errors->first('study.indication_id') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.study.fields.indication_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('study.sponsor_id') ? 'invalid' : '' }}">
        <label class="form-label" for="sponsor">{{ trans('cruds.study.fields.sponsor') }}</label>
        <x-select-list class="form-control" id="sponsor" name="sponsor" :options="$this->listsForFields['sponsor']" wire:model="study.sponsor_id" />
        <div class="validation-message">
            {{ $errors->first('study.sponsor_id') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.study.fields.sponsor_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('study.protocol_id') ? 'invalid' : '' }}">
        <label class="form-label" for="protocol">{{ trans('cruds.study.fields.protocol') }}</label>
        <x-select-list class="form-control" id="protocol" name="protocol" :options="$this->listsForFields['protocol']" wire:model="study.protocol_id" />
        <div class="validation-message">
            {{ $errors->first('study.protocol_id') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.study.fields.protocol_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('study.order_id') ? 'invalid' : '' }}">
        <label class="form-label" for="order">{{ trans('cruds.study.fields.order') }}</label>
        <x-select-list class="form-control" id="order" name="order" :options="$this->listsForFields['order']" wire:model="study.order_id" />
        <div class="validation-message">
            {{ $errors->first('study.order_id') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.study.fields.order_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.studies.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>