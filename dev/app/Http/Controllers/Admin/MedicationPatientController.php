<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\WithCSVImport;
use App\Models\MedicationPatient;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class MedicationPatientController extends Controller
{
    use WithCSVImport;

    public function __construct()
    {
        $this->csvImportModel = MedicationPatient::class;
    }

    public function index()
    {
        abort_if(Gate::denies('medication_patient_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.medication-patient.index');
    }

    public function create()
    {
        abort_if(Gate::denies('medication_patient_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.medication-patient.create');
    }

    public function edit(MedicationPatient $medicationPatient)
    {
        abort_if(Gate::denies('medication_patient_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.medication-patient.edit', compact('medicationPatient'));
    }

    public function show(MedicationPatient $medicationPatient)
    {
        abort_if(Gate::denies('medication_patient_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $medicationPatient->load('patient', 'medication', 'owner');

        return view('admin.medication-patient.show', compact('medicationPatient'));
    }
}
