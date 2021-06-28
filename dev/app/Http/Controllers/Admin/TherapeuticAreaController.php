<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\WithCSVImport;
use App\Models\TherapeuticArea;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class TherapeuticAreaController extends Controller
{
    use WithCSVImport;

    public function __construct()
    {
        $this->csvImportModel = TherapeuticArea::class;
    }

    public function index()
    {
        abort_if(Gate::denies('therapeutic_area_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.therapeutic-area.index');
    }

    public function create()
    {
        abort_if(Gate::denies('therapeutic_area_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.therapeutic-area.create');
    }

    public function edit(TherapeuticArea $therapeuticArea)
    {
        abort_if(Gate::denies('therapeutic_area_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.therapeutic-area.edit', compact('therapeuticArea'));
    }

    public function show(TherapeuticArea $therapeuticArea)
    {
        abort_if(Gate::denies('therapeutic_area_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.therapeutic-area.show', compact('therapeuticArea'));
    }
}
