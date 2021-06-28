<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\WithCSVImport;
use App\Models\OrderPatient;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class OrderPatientController extends Controller
{
    use WithCSVImport;

    public function __construct()
    {
        $this->csvImportModel = OrderPatient::class;
    }

    public function index()
    {
        abort_if(Gate::denies('order_patient_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.order-patient.index');
    }

    public function create()
    {
        abort_if(Gate::denies('order_patient_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.order-patient.create');
    }

    public function edit(OrderPatient $orderPatient)
    {
        abort_if(Gate::denies('order_patient_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.order-patient.edit', compact('orderPatient'));
    }

    public function show(OrderPatient $orderPatient)
    {
        abort_if(Gate::denies('order_patient_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $orderPatient->load('patient', 'order', 'patientStatus', 'owner');

        return view('admin.order-patient.show', compact('orderPatient'));
    }
}
