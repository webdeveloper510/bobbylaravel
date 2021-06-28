<?php

namespace App\Models;

use \DateTimeInterface;
use App\Support\HasAdvancedFilter;
use App\Traits\Auditable;
use App\Traits\Tenantable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrderPatient extends Model
{
    use HasFactory;
    use HasAdvancedFilter;
    use SoftDeletes;
    use Tenantable;
    use Auditable;

    public $table = 'order_patients';

    public $filterable = [
        'id',
        'patient.patient',
        'order.order',
        'dnq_reason',
        'patient_status.status',
    ];

    public $orderable = [
        'id',
        'patient.patient',
        'order.order',
        'diagnosis',
        'other_clinical_trials',
        'qualified',
        'dnq_reason',
        'patient_status.status',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $casts = [
        'diagnosis'             => 'boolean',
        'other_clinical_trials' => 'boolean',
        'qualified'             => 'boolean',
    ];

    protected $fillable = [
        'patient_id',
        'order_id',
        'diagnosis',
        'other_clinical_trials',
        'qualified',
        'dnq_reason',
        'patient_status_id',
    ];

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function patientStatus()
    {
        return $this->belongsTo(PatientStatus::class);
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
