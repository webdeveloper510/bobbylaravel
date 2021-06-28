<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('crmNote.customer_id') ? 'invalid' : '' }}">
        <label class="form-label required" for="customer">{{ trans('cruds.crmNote.fields.customer') }}</label>
        <x-select-list class="form-control" required id="customer" name="customer" :options="$this->listsForFields['customer']" wire:model="crmNote.customer_id" />
        <div class="validation-message">
            {{ $errors->first('crmNote.customer_id') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.crmNote.fields.customer_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('crmNote.note') ? 'invalid' : '' }}">
        <label class="form-label required" for="note">{{ trans('cruds.crmNote.fields.note') }}</label>
        <textarea class="form-control" name="note" id="note" required wire:model.defer="crmNote.note" rows="4"></textarea>
        <div class="validation-message">
            {{ $errors->first('crmNote.note') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.crmNote.fields.note_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('patient_contact_logs') ? 'invalid' : '' }}">
        <label class="form-label" for="patient_contact_logs">{{ trans('cruds.crmNote.fields.patient_contact_logs') }}</label>
        <x-select-list class="form-control" id="patient_contact_logs" name="patient_contact_logs" wire:model="patient_contact_logs" :options="$this->listsForFields['patient_contact_logs']" multiple />
        <div class="validation-message">
            {{ $errors->first('patient_contact_logs') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.crmNote.fields.patient_contact_logs_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('patient_status') ? 'invalid' : '' }}">
        <label class="form-label" for="patient_status">{{ trans('cruds.crmNote.fields.patient_status') }}</label>
        <x-select-list class="form-control" id="patient_status" name="patient_status" wire:model="patient_status" :options="$this->listsForFields['patient_status']" multiple />
        <div class="validation-message">
            {{ $errors->first('patient_status') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.crmNote.fields.patient_status_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('patient') ? 'invalid' : '' }}">
        <label class="form-label" for="patient">{{ trans('cruds.crmNote.fields.patient') }}</label>
        <x-select-list class="form-control" id="patient" name="patient" wire:model="patient" :options="$this->listsForFields['patient']" multiple />
        <div class="validation-message">
            {{ $errors->first('patient') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.crmNote.fields.patient_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('crmNote.client_id') ? 'invalid' : '' }}">
        <label class="form-label" for="client">{{ trans('cruds.crmNote.fields.client') }}</label>
        <x-select-list class="form-control" id="client" name="client" :options="$this->listsForFields['client']" wire:model="crmNote.client_id" />
        <div class="validation-message">
            {{ $errors->first('crmNote.client_id') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.crmNote.fields.client_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('crmNote.order_id') ? 'invalid' : '' }}">
        <label class="form-label" for="order">{{ trans('cruds.crmNote.fields.order') }}</label>
        <x-select-list class="form-control" id="order" name="order" :options="$this->listsForFields['order']" wire:model="crmNote.order_id" />
        <div class="validation-message">
            {{ $errors->first('crmNote.order_id') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.crmNote.fields.order_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.crm-notes.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>