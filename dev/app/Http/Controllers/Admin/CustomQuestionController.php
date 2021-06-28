<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\WithCSVImport;
use App\Models\CustomQuestion;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CustomQuestionController extends Controller
{
    use WithCSVImport;

    public function __construct()
    {
        $this->csvImportModel = CustomQuestion::class;
    }

    public function index()
    {
        abort_if(Gate::denies('custom_question_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.custom-question.index');
    }

    public function create()
    {
        abort_if(Gate::denies('custom_question_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.custom-question.create');
    }

    public function edit(CustomQuestion $customQuestion)
    {
        abort_if(Gate::denies('custom_question_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.custom-question.edit', compact('customQuestion'));
    }

    public function show(CustomQuestion $customQuestion)
    {
        abort_if(Gate::denies('custom_question_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $customQuestion->load('order', 'answerType', 'owner');

        return view('admin.custom-question.show', compact('customQuestion'));
    }
}
