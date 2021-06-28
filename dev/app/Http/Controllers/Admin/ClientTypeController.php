<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\WithCSVImport;
use App\Models\ClientType;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ClientTypeController extends Controller
{
    use WithCSVImport;

    public function __construct()
    {
        $this->csvImportModel = ClientType::class;
    }

    public function index()
    {
        abort_if(Gate::denies('client_type_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.client-type.index');
    }

    public function create()
    {
        abort_if(Gate::denies('client_type_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.client-type.create');
    }

    public function edit(ClientType $clientType)
    {
        abort_if(Gate::denies('client_type_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.client-type.edit', compact('clientType'));
    }

    public function show(ClientType $clientType)
    {
        abort_if(Gate::denies('client_type_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.client-type.show', compact('clientType'));
    }
}
