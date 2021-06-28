<?php

namespace App\Models;

use \DateTimeInterface;
use App\Support\HasAdvancedFilter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Medication extends Model
{
    use HasFactory;
    use HasAdvancedFilter;
    use SoftDeletes;

    public $table = 'medications';

    public $orderable = [
        'id',
        'brand_name',
        'sponsor_name',
        'application_number',
        'dosage_form',
    ];

    public $filterable = [
        'id',
        'brand_name',
        'sponsor_name',
        'application_number',
        'dosage_form',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'brand_name',
        'sponsor_name',
        'application_number',
        'dosage_form',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
