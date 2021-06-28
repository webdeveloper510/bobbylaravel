<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\WithCSVImport;
use App\Models\AnswerPatient;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AnswerPatientController extends Controller
{
    use WithCSVImport;

    public function __construct()
    {
        $this->csvImportModel = AnswerPatient::class;
    }

    public function index()
    {
        abort_if(Gate::denies('answer_patient_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.answer-patient.index');
    }

    public function create()
    {
        abort_if(Gate::denies('answer_patient_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.answer-patient.create');
    }

    public function edit(AnswerPatient $answerPatient)
    {
        abort_if(Gate::denies('answer_patient_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.answer-patient.edit', compact('answerPatient'));
    }

    public function show(AnswerPatient $answerPatient)
    {
        abort_if(Gate::denies('answer_patient_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $answerPatient->load('patient', 'order', 'owner');

        return view('admin.answer-patient.show', compact('answerPatient'));
    }
}
