<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AnswerType;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AnswerTypeController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('answer_type_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.answer-type.index');
    }

    public function create()
    {
        abort_if(Gate::denies('answer_type_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.answer-type.create');
    }

    public function edit(AnswerType $answerType)
    {
        abort_if(Gate::denies('answer_type_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.answer-type.edit', compact('answerType'));
    }

    public function show(AnswerType $answerType)
    {
        abort_if(Gate::denies('answer_type_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.answer-type.show', compact('answerType'));
    }
}
