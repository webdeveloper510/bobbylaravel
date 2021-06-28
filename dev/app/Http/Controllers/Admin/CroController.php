<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Cro;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CroController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('cro_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.cro.index');
    }

    public function create()
    {
        abort_if(Gate::denies('cro_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.cro.create');
    }

    public function edit(Cro $cro)
    {
        abort_if(Gate::denies('cro_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.cro.edit', compact('cro'));
    }

    public function show(Cro $cro)
    {
        abort_if(Gate::denies('cro_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.cro.show', compact('cro'));
    }
}
