@extends('layouts.admin')
@section('content')

<div class="card bg-blueGray-100">
    <div class="card-header">
        <div class="card-header-container">
            <h6 class="card-title">
                {{ trans('global.view') }}
                {{ trans('cruds.crmNote.title_singular') }}:
                {{ trans('cruds.crmNote.fields.id') }}
                {{ $crmNote->id }}
            </h6>
        </div>
    </div>

    <div class="card-body">
        <div class="pt-3">
            <table class="table table-view">
                <tbody class="bg-white">
                    <tr>
                        <th>
                            {{ trans('cruds.crmNote.fields.id') }}
                        </th>
                        <td>
                            {{ $crmNote->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.crmNote.fields.customer') }}
                        </th>
                        <td>
                            @if($crmNote->Customer)
                                <span class="badge badge-relationship">{{ $crmNote->Customer->first_name ?? '' }}</span>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.crmNote.fields.note') }}
                        </th>
                        <td>
                            {{ $crmNote->note }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.crmNote.fields.patient_contact_logs') }}
                        </th>
                        <td>
                            @foreach($crmNote->patient_contact_logs as $key => $entry)
                                <span class="badge badge-relationship">{{ $entry->note }}</span>
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.crmNote.fields.patient_status') }}
                        </th>
                        <td>
                            @foreach($crmNote->patient_status as $key => $entry)
                                <span class="badge badge-relationship">{{ $entry->status }}</span>
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.crmNote.fields.patient') }}
                        </th>
                        <td>
                            @foreach($crmNote->patient as $key => $entry)
                                <span class="badge badge-relationship">{{ $entry->patient }}</span>
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.crmNote.fields.client') }}
                        </th>
                        <td>
                            @if($crmNote->Client)
                                <span class="badge badge-relationship">{{ $crmNote->Client->client_name ?? '' }}</span>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.crmNote.fields.order') }}
                        </th>
                        <td>
                            @if($crmNote->Order)
                                <span class="badge badge-relationship">{{ $crmNote->Order->order ?? '' }}</span>
                            @endif
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="form-group">
            <a href="{{ route('admin.crm-notes.index') }}" class="btn btn-secondary">
                {{ trans('global.back') }}
            </a>
        </div>
    </div>
</div>
@endsection