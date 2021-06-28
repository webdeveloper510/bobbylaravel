<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\WithCSVImport;
use App\Models\PatientSource;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PatientSourceController extends Controller
{
    use WithCSVImport;

    public function __construct()
    {
        $this->csvImportModel = PatientSource::class;
    }

    public function index()
    {
        abort_if(Gate::denies('patient_source_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.patient-source.index');
    }

    public function create()
    {
        abort_if(Gate::denies('patient_source_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.patient-source.create');
    }

    public function edit(PatientSource $patientSource)
    {
        abort_if(Gate::denies('patient_source_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.patient-source.edit', compact('patientSource'));
    }

    public function show(PatientSource $patientSource)
    {
        abort_if(Gate::denies('patient_source_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $patientSource->load('patient', 'order', 'orderPatient', 'owner');

        return view('admin.patient-source.show', compact('patientSource'));
    }
}
