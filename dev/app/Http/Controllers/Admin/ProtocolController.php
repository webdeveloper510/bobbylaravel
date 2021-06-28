<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\WithCSVImport;
use App\Models\Protocol;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProtocolController extends Controller
{
    use WithCSVImport;

    public function __construct()
    {
        $this->csvImportModel = Protocol::class;
    }

    public function index()
    {
        abort_if(Gate::denies('protocol_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.protocol.index');
    }

    public function create()
    {
        abort_if(Gate::denies('protocol_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.protocol.create');
    }

    public function edit(Protocol $protocol)
    {
        abort_if(Gate::denies('protocol_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.protocol.edit', compact('protocol'));
    }

    public function show(Protocol $protocol)
    {
        abort_if(Gate::denies('protocol_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.protocol.show', compact('protocol'));
    }
}
