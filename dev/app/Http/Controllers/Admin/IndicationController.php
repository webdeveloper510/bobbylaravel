<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\WithCSVImport;
use App\Models\Indication;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class IndicationController extends Controller
{
    use WithCSVImport;

    public function __construct()
    {
        $this->csvImportModel = Indication::class;
    }

    public function index()
    {
        abort_if(Gate::denies('indication_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.indication.index');
    }

    public function create()
    {
        abort_if(Gate::denies('indication_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.indication.create');
    }

    public function edit(Indication $indication)
    {
        abort_if(Gate::denies('indication_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.indication.edit', compact('indication'));
    }

    public function show(Indication $indication)
    {
        abort_if(Gate::denies('indication_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $indication->load('therapeuticArea');

        return view('admin.indication.show', compact('indication'));
    }
}
