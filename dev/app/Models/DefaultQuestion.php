<?php

namespace App\Models;

use \DateTimeInterface;
use App\Support\HasAdvancedFilter;
use App\Traits\Auditable;
use App\Traits\Tenantable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DefaultQuestion extends Model
{
    use HasFactory;
    use HasAdvancedFilter;
    use SoftDeletes;
    use Tenantable;
    use Auditable;

    public $table = 'default_questions';

    public $filterable = [
        'id',
        'order.order',
    ];

    public $orderable = [
        'id',
        'order.order',
        'birth_date',
        'zip_code',
        'gender',
        'ethnicity',
        'height',
        'weight',
        'diagnosis',
        'current_medications',
        'other_conditions',
        'other_clinical_trials',
        'contact_method',
        'contact_time',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'order_id',
        'birth_date',
        'zip_code',
        'gender',
        'ethnicity',
        'height',
        'weight',
        'diagnosis',
        'current_medications',
        'other_conditions',
        'other_clinical_trials',
        'contact_method',
        'contact_time',
    ];

    protected $casts = [
        'birth_date'            => 'boolean',
        'zip_code'              => 'boolean',
        'gender'                => 'boolean',
        'ethnicity'             => 'boolean',
        'height'                => 'boolean',
        'weight'                => 'boolean',
        'diagnosis'             => 'boolean',
        'current_medications'   => 'boolean',
        'other_conditions'      => 'boolean',
        'other_clinical_trials' => 'boolean',
        'contact_method'        => 'boolean',
        'contact_time'          => 'boolean',
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
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
