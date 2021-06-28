<?php

namespace App\Models;

use \DateTimeInterface;
use App\Support\HasAdvancedFilter;
use App\Traits\Auditable;
use App\Traits\Tenantable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CrmNote extends Model
{
    use HasFactory;
    use HasAdvancedFilter;
    use SoftDeletes;
    use Tenantable;
    use Auditable;

    public $table = 'crm_notes';

    public $orderable = [
        'id',
        'customer.first_name',
        'note',
        'client.client_name',
        'order.order',
    ];

    public $filterable = [
        'id',
        'customer.first_name',
        'note',
        'patient_contact_logs.note',
        'patient_status.status',
        'patient.patient',
        'client.client_name',
        'order.order',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'customer_id',
        'note',
        'client_id',
        'order_id',
    ];

    public function customer()
    {
        return $this->belongsTo(CrmCustomer::class);
    }

    public function patientContactLogs()
    {
        return $this->belongsToMany(PatientContactLog::class);
    }

    public function patientStatus()
    {
        return $this->belongsToMany(PatientStatus::class);
    }

    public function patient()
    {
        return $this->belongsToMany(Patient::class);
    }

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
