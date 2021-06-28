<?php

namespace App\Models;

use \DateTimeInterface;
use App\Support\HasAdvancedFilter;
use App\Traits\Auditable;
use App\Traits\Tenantable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PatientContactLog extends Model
{
    use HasFactory;
    use HasAdvancedFilter;
    use SoftDeletes;
    use Tenantable;
    use Auditable;

    public $table = 'patient_contact_logs';

    public $orderable = [
        'id',
        'order_patient.qualified',
        'patient_status.status',
        'note',
        'user.email',
    ];

    public $filterable = [
        'id',
        'order_patient.qualified',
        'patient_status.status',
        'note',
        'user.email',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'order_patient_id',
        'patient_status_id',
        'note',
        'user_id',
    ];

    public function orderPatient()
    {
        return $this->belongsTo(OrderPatient::class);
    }

    public function patientStatus()
    {
        return $this->belongsTo(PatientStatus::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
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
