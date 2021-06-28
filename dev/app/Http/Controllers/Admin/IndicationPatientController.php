<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\WithCSVImport;
use App\Models\IndicationPatient;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class IndicationPatientController extends Controller
{
    use WithCSVImport;

    public function __construct()
    {
        $this->csvImportModel = IndicationPatient::class;
    }

    public function index()
    {
        abort_if(Gate::denies('indication_patient_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.indication-patient.index');
    }

    public function create()
    {
        abort_if(Gate::denies('indication_patient_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.indication-patient.create');
    }

    public function edit(IndicationPatient $indicationPatient)
    {
        abort_if(Gate::denies('indication_patient_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.indication-patient.edit', compact('indicationPatient'));
    }

    public function show(IndicationPatient $indicationPatient)
    {
        abort_if(Gate::denies('indication_patient_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $indicationPatient->load('patient', 'indication', 'owner');

        return view('admin.indication-patient.show', compact('indicationPatient'));
    }
}
