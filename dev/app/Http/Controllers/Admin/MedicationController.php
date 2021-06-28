<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Medication;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class MedicationController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('medication_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.medication.index');
    }

    public function create()
    {
        abort_if(Gate::denies('medication_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.medication.create');
    }

    public function edit(Medication $medication)
    {
        abort_if(Gate::denies('medication_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.medication.edit', compact('medication'));
    }

    public function show(Medication $medication)
    {
        abort_if(Gate::denies('medication_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.medication.show', compact('medication'));
    }
}
