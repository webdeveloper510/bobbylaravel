<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactMethod;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ContactMethodController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('contact_method_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.contact-method.index');
    }

    public function create()
    {
        abort_if(Gate::denies('contact_method_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.contact-method.create');
    }

    public function edit(ContactMethod $contactMethod)
    {
        abort_if(Gate::denies('contact_method_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.contact-method.edit', compact('contactMethod'));
    }

    public function show(ContactMethod $contactMethod)
    {
        abort_if(Gate::denies('contact_method_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.contact-method.show', compact('contactMethod'));
    }
}
