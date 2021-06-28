<?php

namespace App\Models;

use \DateTimeInterface;
use App\Support\HasAdvancedFilter;
use App\Traits\Auditable;
use App\Traits\Tenantable;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use HasFactory;
    use HasAdvancedFilter;
    use SoftDeletes;
    use Tenantable;
    use Auditable;

    public $table = 'orders';

    public $orderable = [
        'id',
        'order',
        'client_id_bill.client_name',
        'client_id_ship.client_name',
        'sponsor.sponsor',
        'protocol.protocol',
        'cro.cro_name',
        'referral_guarantee',
        'start_date',
        'end_date',
        'minimum_age',
        'maximum_age',
        'minimum_bmi',
        'maximum_bmi',
        'gender.gender',
        'coupon_code',
        'discount_rate',
        'sub_total_price',
        'total_price',
        'payment_type',
        'credit_card',
        'stripe_confirmation',
        'notes',
        'images.title',
        'order_status.status',
    ];

    public $filterable = [
        'id',
        'order',
        'client_id_bill.client_name',
        'client_id_ship.client_name',
        'sponsor.sponsor',
        'protocol.protocol',
        'cro.cro_name',
        'package.package',
        'referral_guarantee',
        'start_date',
        'end_date',
        'minimum_age',
        'maximum_age',
        'minimum_bmi',
        'maximum_bmi',
        'gender.gender',
        'coupon_code',
        'discount_rate',
        'sub_total_price',
        'total_price',
        'payment_type',
        'credit_card',
        'stripe_confirmation',
        'recruitment_emails.email',
        'notes',
        'images.title',
        'order_status.status',
    ];

    protected $dates = [
        'start_date',
        'end_date',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'order',
        'client_id_bill_id',
        'client_id_ship_id',
        'sponsor_id',
        'protocol_id',
        'cro_id',
        'referral_guarantee',
        'start_date',
        'end_date',
        'minimum_age',
        'maximum_age',
        'minimum_bmi',
        'maximum_bmi',
        'gender_id',
        'coupon_code',
        'discount_rate',
        'sub_total_price',
        'total_price',
        'payment_type',
        'credit_card',
        'stripe_confirmation',
        'notes',
        'images_id',
        'order_status_id',
    ];

    public function clientIdBill()
    {
        return $this->belongsTo(Client::class);
    }

    public function clientIdShip()
    {
        return $this->belongsTo(Client::class);
    }

    public function sponsor()
    {
        return $this->belongsTo(Sponsor::class);
    }

    public function protocol()
    {
        return $this->belongsTo(Protocol::class);
    }

    public function cro()
    {
        return $this->belongsTo(Cro::class);
    }

    public function package()
    {
        return $this->belongsToMany(Package::class);
    }

    public function getStartDateAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('project.date_format')) : null;
    }

    public function setStartDateAttribute($value)
    {
        $this->attributes['start_date'] = $value ? Carbon::createFromFormat(config('project.date_format'), $value)->format('Y-m-d') : null;
    }

    public function getEndDateAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('project.date_format')) : null;
    }

    public function setEndDateAttribute($value)
    {
        $this->attributes['end_date'] = $value ? Carbon::createFromFormat(config('project.date_format'), $value)->format('Y-m-d') : null;
    }

    public function gender()
    {
        return $this->belongsTo(Gender::class);
    }

    public function recruitmentEmails()
    {
        return $this->belongsToMany(User::class);
    }

    public function images()
    {
        return $this->belongsTo(Image::class);
    }

    public function orderStatus()
    {
        return $this->belongsTo(OrderStatus::class);
    }

    public function owner()
    {
        return $this->belongsTo(User::class);
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
