<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactTime;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ContactTimeController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('contact_time_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.contact-time.index');
    }

    public function create()
    {
        abort_if(Gate::denies('contact_time_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.contact-time.create');
    }

    public function edit(ContactTime $contactTime)
    {
        abort_if(Gate::denies('contact_time_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.contact-time.edit', compact('contactTime'));
    }

    public function show(ContactTime $contactTime)
    {
        abort_if(Gate::denies('contact_time_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.contact-time.show', compact('contactTime'));
    }
}
