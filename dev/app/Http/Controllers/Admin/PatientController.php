<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\WithCSVImport;
use App\Models\Patient;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PatientController extends Controller
{
    use WithCSVImport;

    public function __construct()
    {
        $this->csvImportModel = Patient::class;
    }

    public function index()
    {
        abort_if(Gate::denies('patient_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.patient.index');
    }

    public function create()
    {
        abort_if(Gate::denies('patient_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.patient.create');
    }

    public function edit(Patient $patient)
    {
        abort_if(Gate::denies('patient_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.patient.edit', compact('patient'));
    }

    public function show(Patient $patient)
    {
        abort_if(Gate::denies('patient_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $patient->load('role', 'user', 'gender', 'ethnicity', 'contactMethod', 'contactTime', 'distance', 'owner');

        return view('admin.patient.show', compact('patient'));
    }
}
