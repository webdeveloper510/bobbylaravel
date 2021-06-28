<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Ethnicity;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class EthnicityController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('ethnicity_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.ethnicity.index');
    }

    public function create()
    {
        abort_if(Gate::denies('ethnicity_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.ethnicity.create');
    }

    public function edit(Ethnicity $ethnicity)
    {
        abort_if(Gate::denies('ethnicity_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.ethnicity.edit', compact('ethnicity'));
    }

    public function show(Ethnicity $ethnicity)
    {
        abort_if(Gate::denies('ethnicity_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.ethnicity.show', compact('ethnicity'));
    }
}
