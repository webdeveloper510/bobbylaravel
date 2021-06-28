<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\WithCSVImport;
use App\Models\PatientStatus;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PatientStatusController extends Controller
{
    use WithCSVImport;

    public function __construct()
    {
        $this->csvImportModel = PatientStatus::class;
    }

    public function index()
    {
        abort_if(Gate::denies('patient_status_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.patient-status.index');
    }

    public function create()
    {
        abort_if(Gate::denies('patient_status_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.patient-status.create');
    }

    public function edit(PatientStatus $patientStatus)
    {
        abort_if(Gate::denies('patient_status_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.patient-status.edit', compact('patientStatus'));
    }

    public function show(PatientStatus $patientStatus)
    {
        abort_if(Gate::denies('patient_status_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.patient-status.show', compact('patientStatus'));
    }
}
