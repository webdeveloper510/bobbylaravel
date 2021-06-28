<?php

namespace App\Models;

use \DateTimeInterface;
use App\Support\HasAdvancedFilter;
use App\Traits\Auditable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Indication extends Model
{
    use HasFactory;
    use HasAdvancedFilter;
    use SoftDeletes;
    use Auditable;

    public const SYMPTOMS_SELECT = [
    ];

    public const TREATMENTS_SELECT = [
    ];

    public const RISK_FACTORS_SELECT = [
    ];

    public $table = 'indications';

    public $orderable = [
        'id',
        'indication',
        'therapeutic_area.therapeutic_area',
        'description',
        'symptoms',
        'causes',
        'treatments',
        'risk_factors',
    ];

    public $filterable = [
        'id',
        'indication',
        'therapeutic_area.therapeutic_area',
        'description',
        'symptoms',
        'causes',
        'treatments',
        'risk_factors',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'indication',
        'therapeutic_area_id',
        'description',
        'symptoms',
        'causes',
        'treatments',
        'risk_factors',
    ];

    public function therapeuticArea()
    {
        return $this->belongsTo(TherapeuticArea::class);
    }

    public function getSymptomsLabelAttribute($value)
    {
        return static::SYMPTOMS_SELECT[$this->symptoms] ?? null;
    }

    public function getTreatmentsLabelAttribute($value)
    {
        return static::TREATMENTS_SELECT[$this->treatments] ?? null;
    }

    public function getRiskFactorsLabelAttribute($value)
    {
        return static::RISK_FACTORS_SELECT[$this->risk_factors] ?? null;
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
