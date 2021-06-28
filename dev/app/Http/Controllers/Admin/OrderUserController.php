<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\WithCSVImport;
use App\Models\OrderUser;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class OrderUserController extends Controller
{
    use WithCSVImport;

    public function __construct()
    {
        $this->csvImportModel = OrderUser::class;
    }

    public function index()
    {
        abort_if(Gate::denies('order_user_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.order-user.index');
    }

    public function create()
    {
        abort_if(Gate::denies('order_user_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.order-user.create');
    }

    public function edit(OrderUser $orderUser)
    {
        abort_if(Gate::denies('order_user_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.order-user.edit', compact('orderUser'));
    }

    public function show(OrderUser $orderUser)
    {
        abort_if(Gate::denies('order_user_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $orderUser->load('order', 'user', 'owner');

        return view('admin.order-user.show', compact('orderUser'));
    }
}
