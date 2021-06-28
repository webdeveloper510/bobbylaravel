<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\WithCSVImport;
use App\Models\PatientContactLog;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PatientContactLogController extends Controller
{
    use WithCSVImport;

    public function __construct()
    {
        $this->csvImportModel = PatientContactLog::class;
    }

    public function index()
    {
        abort_if(Gate::denies('patient_contact_log_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.patient-contact-log.index');
    }

    public function create()
    {
        abort_if(Gate::denies('patient_contact_log_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.patient-contact-log.create');
    }

    public function edit(PatientContactLog $patientContactLog)
    {
        abort_if(Gate::denies('patient_contact_log_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.patient-contact-log.edit', compact('patientContactLog'));
    }

    public function show(PatientContactLog $patientContactLog)
    {
        abort_if(Gate::denies('patient_contact_log_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $patientContactLog->load('orderPatient', 'patientStatus', 'user', 'owner');

        return view('admin.patient-contact-log.show', compact('patientContactLog'));
    }
}
