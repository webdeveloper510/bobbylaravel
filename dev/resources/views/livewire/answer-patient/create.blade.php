<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('answerPatient.patient_id') ? 'invalid' : '' }}">
        <label class="form-label" for="patient">{{ trans('cruds.answerPatient.fields.patient') }}</label>
        <x-select-list class="form-control" id="patient" name="patient" :options="$this->listsForFields['patient']" wire:model="answerPatient.patient_id" />
        <div class="validation-message">
            {{ $errors->first('answerPatient.patient_id') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.answerPatient.fields.patient_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('answerPatient.order_id') ? 'invalid' : '' }}">
        <label class="form-label" for="order">{{ trans('cruds.answerPatient.fields.order') }}</label>
        <x-select-list class="form-control" id="order" name="order" :options="$this->listsForFields['order']" wire:model="answerPatient.order_id" />
        <div class="validation-message">
            {{ $errors->first('answerPatient.order_id') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.answerPatient.fields.order_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.answer-patients.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>