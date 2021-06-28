<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\OrderStatus;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class OrderStatusController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('order_status_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.order-status.index');
    }

    public function create()
    {
        abort_if(Gate::denies('order_status_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.order-status.create');
    }

    public function edit(OrderStatus $orderStatus)
    {
        abort_if(Gate::denies('order_status_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.order-status.edit', compact('orderStatus'));
    }

    public function show(OrderStatus $orderStatus)
    {
        abort_if(Gate::denies('order_status_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.order-status.show', compact('orderStatus'));
    }
}
