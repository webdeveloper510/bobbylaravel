<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Distance;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class DistanceController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('distance_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.distance.index');
    }

    public function create()
    {
        abort_if(Gate::denies('distance_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.distance.create');
    }

    public function edit(Distance $distance)
    {
        abort_if(Gate::denies('distance_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.distance.edit', compact('distance'));
    }

    public function show(Distance $distance)
    {
        abort_if(Gate::denies('distance_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.distance.show', compact('distance'));
    }
}
