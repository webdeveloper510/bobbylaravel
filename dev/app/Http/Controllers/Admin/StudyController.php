<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\WithCSVImport;
use App\Models\Study;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class StudyController extends Controller
{
    use WithCSVImport;

    public function __construct()
    {
        $this->csvImportModel = Study::class;
    }

    public function index()
    {
        abort_if(Gate::denies('study_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.study.index');
    }

    public function create()
    {
        abort_if(Gate::denies('study_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.study.create');
    }

    public function edit(Study $study)
    {
        abort_if(Gate::denies('study_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.study.edit', compact('study'));
    }

    public function show(Study $study)
    {
        abort_if(Gate::denies('study_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $study->load('indication', 'sponsor', 'protocol', 'order');

        return view('admin.study.show', compact('study'));
    }
}
