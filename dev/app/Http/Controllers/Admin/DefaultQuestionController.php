<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\WithCSVImport;
use App\Models\DefaultQuestion;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class DefaultQuestionController extends Controller
{
    use WithCSVImport;

    public function __construct()
    {
        $this->csvImportModel = DefaultQuestion::class;
    }

    public function index()
    {
        abort_if(Gate::denies('default_question_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.default-question.index');
    }

    public function create()
    {
        abort_if(Gate::denies('default_question_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.default-question.create');
    }

    public function edit(DefaultQuestion $defaultQuestion)
    {
        abort_if(Gate::denies('default_question_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.default-question.edit', compact('defaultQuestion'));
    }

    public function show(DefaultQuestion $defaultQuestion)
    {
        abort_if(Gate::denies('default_question_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $defaultQuestion->load('order', 'owner');

        return view('admin.default-question.show', compact('defaultQuestion'));
    }
}
