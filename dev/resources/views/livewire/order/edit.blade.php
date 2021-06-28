<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('order.order') ? 'invalid' : '' }}">
        <label class="form-label" for="order">{{ trans('cruds.order.fields.order') }}</label>
        <input class="form-control" type="text" name="order" id="order" wire:model.defer="order.order">
        <div class="validation-message">
            {{ $errors->first('order.order') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.order.fields.order_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('order.client_id_bill_id') ? 'invalid' : '' }}">
        <label class="form-label" for="client_id_bill">{{ trans('cruds.order.fields.client_id_bill') }}</label>
        <x-select-list class="form-control" id="client_id_bill" name="client_id_bill" :options="$this->listsForFields['client_id_bill']" wire:model="order.client_id_bill_id" />
        <div class="validation-message">
            {{ $errors->first('order.client_id_bill_id') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.order.fields.client_id_bill_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('order.client_id_ship_id') ? 'invalid' : '' }}">
        <label class="form-label" for="client_id_ship">{{ trans('cruds.order.fields.client_id_ship') }}</label>
        <x-select-list class="form-control" id="client_id_ship" name="client_id_ship" :options="$this->listsForFields['client_id_ship']" wire:model="order.client_id_ship_id" />
        <div class="validation-message">
            {{ $errors->first('order.client_id_ship_id') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.order.fields.client_id_ship_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('order.sponsor_id') ? 'invalid' : '' }}">
        <label class="form-label" for="sponsor">{{ trans('cruds.order.fields.sponsor') }}</label>
        <x-select-list class="form-control" id="sponsor" name="sponsor" :options="$this->listsForFields['sponsor']" wire:model="order.sponsor_id" />
        <div class="validation-message">
            {{ $errors->first('order.sponsor_id') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.order.fields.sponsor_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('order.protocol_id') ? 'invalid' : '' }}">
        <label class="form-label" for="protocol">{{ trans('cruds.order.fields.protocol') }}</label>
        <x-select-list class="form-control" id="protocol" name="protocol" :options="$this->listsForFields['protocol']" wire:model="order.protocol_id" />
        <div class="validation-message">
            {{ $errors->first('order.protocol_id') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.order.fields.protocol_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('order.cro_id') ? 'invalid' : '' }}">
        <label class="form-label" for="cro">{{ trans('cruds.order.fields.cro') }}</label>
        <x-select-list class="form-control" id="cro" name="cro" :options="$this->listsForFields['cro']" wire:model="order.cro_id" />
        <div class="validation-message">
            {{ $errors->first('order.cro_id') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.order.fields.cro_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('package') ? 'invalid' : '' }}">
        <label class="form-label" for="package">{{ trans('cruds.order.fields.package') }}</label>
        <x-select-list class="form-control" id="package" name="package" wire:model="package" :options="$this->listsForFields['package']" multiple />
        <div class="validation-message">
            {{ $errors->first('package') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.order.fields.package_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('order.referral_guarantee') ? 'invalid' : '' }}">
        <label class="form-label" for="referral_guarantee">{{ trans('cruds.order.fields.referral_guarantee') }}</label>
        <input class="form-control" type="number" name="referral_guarantee" id="referral_guarantee" wire:model.defer="order.referral_guarantee" step="1">
        <div class="validation-message">
            {{ $errors->first('order.referral_guarantee') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.order.fields.referral_guarantee_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('order.start_date') ? 'invalid' : '' }}">
        <label class="form-label" for="start_date">{{ trans('cruds.order.fields.start_date') }}</label>
        <x-date-picker class="form-control" wire:model="order.start_date" id="start_date" name="start_date" picker="date" />
        <div class="validation-message">
            {{ $errors->first('order.start_date') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.order.fields.start_date_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('order.end_date') ? 'invalid' : '' }}">
        <label class="form-label" for="end_date">{{ trans('cruds.order.fields.end_date') }}</label>
        <x-date-picker class="form-control" wire:model="order.end_date" id="end_date" name="end_date" picker="date" />
        <div class="validation-message">
            {{ $errors->first('order.end_date') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.order.fields.end_date_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('order.minimum_age') ? 'invalid' : '' }}">
        <label class="form-label" for="minimum_age">{{ trans('cruds.order.fields.minimum_age') }}</label>
        <input class="form-control" type="number" name="minimum_age" id="minimum_age" wire:model.defer="order.minimum_age" step="1">
        <div class="validation-message">
            {{ $errors->first('order.minimum_age') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.order.fields.minimum_age_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('order.maximum_age') ? 'invalid' : '' }}">
        <label class="form-label" for="maximum_age">{{ trans('cruds.order.fields.maximum_age') }}</label>
        <input class="form-control" type="number" name="maximum_age" id="maximum_age" wire:model.defer="order.maximum_age" step="1">
        <div class="validation-message">
            {{ $errors->first('order.maximum_age') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.order.fields.maximum_age_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('order.minimum_bmi') ? 'invalid' : '' }}">
        <label class="form-label" for="minimum_bmi">{{ trans('cruds.order.fields.minimum_bmi') }}</label>
        <input class="form-control" type="text" name="minimum_bmi" id="minimum_bmi" wire:model.defer="order.minimum_bmi">
        <div class="validation-message">
            {{ $errors->first('order.minimum_bmi') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.order.fields.minimum_bmi_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('order.maximum_bmi') ? 'invalid' : '' }}">
        <label class="form-label" for="maximum_bmi">{{ trans('cruds.order.fields.maximum_bmi') }}</label>
        <input class="form-control" type="text" name="maximum_bmi" id="maximum_bmi" wire:model.defer="order.maximum_bmi">
        <div class="validation-message">
            {{ $errors->first('order.maximum_bmi') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.order.fields.maximum_bmi_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('order.gender_id') ? 'invalid' : '' }}">
        <label class="form-label" for="gender">{{ trans('cruds.order.fields.gender') }}</label>
        <x-select-list class="form-control" id="gender" name="gender" :options="$this->listsForFields['gender']" wire:model="order.gender_id" />
        <div class="validation-message">
            {{ $errors->first('order.gender_id') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.order.fields.gender_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('order.coupon_code') ? 'invalid' : '' }}">
        <label class="form-label" for="coupon_code">{{ trans('cruds.order.fields.coupon_code') }}</label>
        <input class="form-control" type="text" name="coupon_code" id="coupon_code" wire:model.defer="order.coupon_code">
        <div class="validation-message">
            {{ $errors->first('order.coupon_code') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.order.fields.coupon_code_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('order.discount_rate') ? 'invalid' : '' }}">
        <label class="form-label" for="discount_rate">{{ trans('cruds.order.fields.discount_rate') }}</label>
        <input class="form-control" type="number" name="discount_rate" id="discount_rate" wire:model.defer="order.discount_rate" step="0.01">
        <div class="validation-message">
            {{ $errors->first('order.discount_rate') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.order.fields.discount_rate_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('order.sub_total_price') ? 'invalid' : '' }}">
        <label class="form-label" for="sub_total_price">{{ trans('cruds.order.fields.sub_total_price') }}</label>
        <input class="form-control" type="number" name="sub_total_price" id="sub_total_price" wire:model.defer="order.sub_total_price" step="1">
        <div class="validation-message">
            {{ $errors->first('order.sub_total_price') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.order.fields.sub_total_price_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('order.total_price') ? 'invalid' : '' }}">
        <label class="form-label" for="total_price">{{ trans('cruds.order.fields.total_price') }}</label>
        <input class="form-control" type="number" name="total_price" id="total_price" wire:model.defer="order.total_price" step="1">
        <div class="validation-message">
            {{ $errors->first('order.total_price') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.order.fields.total_price_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('order.payment_type') ? 'invalid' : '' }}">
        <label class="form-label" for="payment_type">{{ trans('cruds.order.fields.payment_type') }}</label>
        <input class="form-control" type="text" name="payment_type" id="payment_type" wire:model.defer="order.payment_type">
        <div class="validation-message">
            {{ $errors->first('order.payment_type') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.order.fields.payment_type_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('order.credit_card') ? 'invalid' : '' }}">
        <label class="form-label" for="credit_card">{{ trans('cruds.order.fields.credit_card') }}</label>
        <input class="form-control" type="text" name="credit_card" id="credit_card" wire:model.defer="order.credit_card">
        <div class="validation-message">
            {{ $errors->first('order.credit_card') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.order.fields.credit_card_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('order.stripe_confirmation') ? 'invalid' : '' }}">
        <label class="form-label" for="stripe_confirmation">{{ trans('cruds.order.fields.stripe_confirmation') }}</label>
        <input class="form-control" type="text" name="stripe_confirmation" id="stripe_confirmation" wire:model.defer="order.stripe_confirmation">
        <div class="validation-message">
            {{ $errors->first('order.stripe_confirmation') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.order.fields.stripe_confirmation_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('recruitment_emails') ? 'invalid' : '' }}">
        <label class="form-label" for="recruitment_emails">{{ trans('cruds.order.fields.recruitment_emails') }}</label>
        <x-select-list class="form-control" id="recruitment_emails" name="recruitment_emails" wire:model="recruitment_emails" :options="$this->listsForFields['recruitment_emails']" multiple />
        <div class="validation-message">
            {{ $errors->first('recruitment_emails') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.order.fields.recruitment_emails_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('order.notes') ? 'invalid' : '' }}">
        <label class="form-label" for="notes">{{ trans('cruds.order.fields.notes') }}</label>
        <textarea class="form-control" name="notes" id="notes" wire:model.defer="order.notes" rows="4"></textarea>
        <div class="validation-message">
            {{ $errors->first('order.notes') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.order.fields.notes_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('order.images_id') ? 'invalid' : '' }}">
        <label class="form-label" for="images">{{ trans('cruds.order.fields.images') }}</label>
        <x-select-list class="form-control" id="images" name="images" :options="$this->listsForFields['images']" wire:model="order.images_id" />
        <div class="validation-message">
            {{ $errors->first('order.images_id') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.order.fields.images_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('order.order_status_id') ? 'invalid' : '' }}">
        <label class="form-label" for="order_status">{{ trans('cruds.order.fields.order_status') }}</label>
        <x-select-list class="form-control" id="order_status" name="order_status" :options="$this->listsForFields['order_status']" wire:model="order.order_status_id" />
        <div class="validation-message">
            {{ $errors->first('order.order_status_id') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.order.fields.order_status_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.orders.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>