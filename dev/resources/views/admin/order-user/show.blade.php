@extends('layouts.admin')
@section('content')

<div class="card bg-blueGray-100">
    <div class="card-header">
        <div class="card-header-container">
            <h6 class="card-title">
                {{ trans('global.view') }}
                {{ trans('cruds.orderUser.title_singular') }}:
                {{ trans('cruds.orderUser.fields.id') }}
                {{ $orderUser->id }}
            </h6>
        </div>
    </div>

    <div class="card-body">
        <div class="pt-3">
            <table class="table table-view">
                <tbody class="bg-white">
                    <tr>
                        <th>
                            {{ trans('cruds.orderUser.fields.id') }}
                        </th>
                        <td>
                            {{ $orderUser->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.orderUser.fields.order') }}
                        </th>
                        <td>
                            @if($orderUser->Order)
                                <span class="badge badge-relationship">{{ $orderUser->Order->order ?? '' }}</span>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.orderUser.fields.user') }}
                        </th>
                        <td>
                            @if($orderUser->User)
                                <span class="badge badge-relationship">{{ $orderUser->User->email ?? '' }}</span>
                            @endif
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="form-group">
            <a href="{{ route('admin.order-users.index') }}" class="btn btn-secondary">
                {{ trans('global.back') }}
            </a>
        </div>
    </div>
</div>
@endsection