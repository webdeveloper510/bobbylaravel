<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\WithCSVImport;
use App\Models\Network;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class NetworkController extends Controller
{
    use WithCSVImport;

    public function __construct()
    {
        $this->csvImportModel = Network::class;
    }

    public function index()
    {
        abort_if(Gate::denies('network_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.network.index');
    }

    public function create()
    {
        abort_if(Gate::denies('network_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.network.create');
    }

    public function edit(Network $network)
    {
        abort_if(Gate::denies('network_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.network.edit', compact('network'));
    }

    public function show(Network $network)
    {
        abort_if(Gate::denies('network_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $network->load('owner');

        return view('admin.network.show', compact('network'));
    }
}
