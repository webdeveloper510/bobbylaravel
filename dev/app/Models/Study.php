<?php

namespace App\Models;

use \DateTimeInterface;
use App\Support\HasAdvancedFilter;
use App\Traits\Auditable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Study extends Model
{
    use HasFactory;
    use HasAdvancedFilter;
    use SoftDeletes;
    use Auditable;

    public $table = 'studies';

    public $orderable = [
        'id',
        'indication.indication',
        'sponsor.sponsor',
        'protocol.protocol',
        'order.order',
    ];

    public $filterable = [
        'id',
        'indication.indication',
        'sponsor.sponsor',
        'protocol.protocol',
        'order.order',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'indication_id',
        'sponsor_id',
        'protocol_id',
        'order_id',
    ];

    public function indication()
    {
        return $this->belongsTo(Indication::class);
    }

    public function sponsor()
    {
        return $this->belongsTo(Sponsor::class);
    }

    public function protocol()
    {
        return $this->belongsTo(Protocol::class);
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
