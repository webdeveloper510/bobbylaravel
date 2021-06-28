<?php

namespace App\Models;

use \DateTimeInterface;
use App\Support\HasAdvancedFilter;
use App\Traits\Auditable;
use App\Traits\Tenantable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Client extends Model
{
    use HasFactory;
    use HasAdvancedFilter;
    use SoftDeletes;
    use Tenantable;
    use Auditable;

    public $table = 'clients';

    public $orderable = [
        'id',
        'client_name',
        'client_type.client_type',
        'address',
        'address_2',
        'city',
        'state',
        'zip_code',
        'country',
        'phone_number',
        'website',
        'tracker',
    ];

    public $filterable = [
        'id',
        'client_name',
        'client_type.client_type',
        'address',
        'address_2',
        'city',
        'state',
        'zip_code',
        'country',
        'phone_number',
        'website',
        'tracker',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'client_name',
        'client_type_id',
        'address',
        'address_2',
        'city',
        'state',
        'zip_code',
        'country',
        'phone_number',
        'website',
        'tracker',
    ];

    public function clientType()
    {
        return $this->belongsTo(ClientType::class);
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
