<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\OrderStatus;
use App\Models\PatientStatus;
use App\Models\Study;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SystemCalendarController extends Controller
{
    public $sources = [
        [
            'model'      => Study::class,
            'date_field' => 'created_at',
            'field'      => 'id',
            'prefix'     => 'campaign',
            'suffix'     => 'is ending today',
            'route'      => 'admin.studies.edit',
        ],
        [
            'model'      => OrderStatus::class,
            'date_field' => 'updated_at',
            'field'      => 'status',
            'prefix'     => '',
            'suffix'     => '',
            'route'      => 'admin.order-statuses.edit',
        ],
        [
            'model'      => PatientStatus::class,
            'date_field' => 'updated_at',
            'field'      => 'status',
            'prefix'     => 'Patient status',
            'suffix'     => '',
            'route'      => 'admin.patient-statuses.edit',
        ],
    ];

    public function index()
    {
        abort_if(Gate::denies('system_calendar_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $events = [];

        foreach ($this->sources as $source) {
            foreach ($source['model']::all() as $model) {
                $crudFieldValue = $model->getAttributes()[$source['date_field']];

                if (!$crudFieldValue) {
                    continue;
                }

                $events[] = [
                    'title' => sprintf(
                        '%s %s %s',
                        trim($source['prefix']),
                        $model->{$source['field']},
                        trim($source['suffix']),
                    ),
                    'start' => $crudFieldValue,
                    'url'   => route($source['route'], $model),
                ];
            }
        }

        return view('admin.system-calendar.index', compact('events'));
    }
}
