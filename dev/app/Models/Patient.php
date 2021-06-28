<?php

namespace App\Models;

use \DateTimeInterface;
use App\Support\HasAdvancedFilter;
use App\Traits\Auditable;
use App\Traits\Tenantable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Patient extends Model
{
    use HasFactory;
    use HasAdvancedFilter;
    use SoftDeletes;
    use Tenantable;
    use Auditable;

    public $table = 'patients';

    public $orderable = [
        'id',
        'user.email',
        'patient',
        'birth_date',
        'height_ft',
        'height_in',
        'weight',
        'bmi',
        'gender.gender',
        'ethnicity.ethnicity',
        'distance.distance',
        'zip_code',
    ];

    public $filterable = [
        'id',
        'role.title',
        'user.email',
        'patient',
        'birth_date',
        'height_ft',
        'height_in',
        'weight',
        'bmi',
        'gender.gender',
        'ethnicity.ethnicity',
        'contact_method.contact_method',
        'contact_time.contact_time',
        'distance.distance',
        'zip_code',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'user_id',
        'patient',
        'birth_date',
        'height_ft',
        'height_in',
        'weight',
        'bmi',
        'gender_id',
        'ethnicity_id',
        'distance_id',
        'zip_code',
    ];

    public function role()
    {
        return $this->belongsToMany(Role::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function gender()
    {
        return $this->belongsTo(Gender::class);
    }

    public function ethnicity()
    {
        return $this->belongsTo(Ethnicity::class);
    }

    public function contactMethod()
    {
        return $this->belongsToMany(ContactMethod::class);
    }

    public function contactTime()
    {
        return $this->belongsToMany(ContactTime::class);
    }

    public function distance()
    {
        return $this->belongsTo(Distance::class);
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
