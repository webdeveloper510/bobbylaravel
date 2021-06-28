<?php

namespace App\Http\Livewire\CrmNote;

use App\Models\Client;
use App\Models\CrmCustomer;
use App\Models\CrmNote;
use App\Models\Order;
use App\Models\Patient;
use App\Models\PatientContactLog;
use App\Models\PatientStatus;
use Livewire\Component;

class Edit extends Component
{
    public CrmNote $crmNote;

    public array $patient = [];

    public array $listsForFields = [];

    public array $patient_status = [];

    public array $patient_contact_logs = [];

    public function mount(CrmNote $crmNote)
    {
        $this->crmNote              = $crmNote;
        $this->patient_contact_logs = $this->crmNote->patientContactLogs()->pluck('id')->toArray();
        $this->patient_status       = $this->crmNote->patientStatus()->pluck('id')->toArray();
        $this->patient              = $this->crmNote->patient()->pluck('id')->toArray();
        $this->initListsForFields();
    }

    public function render()
    {
        return view('livewire.crm-note.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->crmNote->save();
        $this->crmNote->patientContactLogs()->sync($this->patient_contact_logs);
        $this->crmNote->patientStatus()->sync($this->patient_status);
        $this->crmNote->patient()->sync($this->patient);

        return redirect()->route('admin.crm-notes.index');
    }

    protected function rules(): array
    {
        return [
            'crmNote.customer_id' => [
                'integer',
                'exists:crm_customers,id',
                'required',
            ],
            'crmNote.note' => [
                'string',
                'required',
            ],
            'patient_contact_logs' => [
                'array',
            ],
            'patient_contact_logs.*.id' => [
                'integer',
                'exists:patient_contact_logs,id',
            ],
            'patient_status' => [
                'array',
            ],
            'patient_status.*.id' => [
                'integer',
                'exists:patient_statuses,id',
            ],
            'patient' => [
                'array',
            ],
            'patient.*.id' => [
                'integer',
                'exists:patients,id',
            ],
            'crmNote.client_id' => [
                'integer',
                'exists:clients,id',
                'nullable',
            ],
            'crmNote.order_id' => [
                'integer',
                'exists:orders,id',
                'nullable',
            ],
        ];
    }

    protected function initListsForFields(): void
    {
        $this->listsForFields['customer']             = CrmCustomer::pluck('first_name', 'id')->toArray();
        $this->listsForFields['patient_contact_logs'] = PatientContactLog::pluck('note', 'id')->toArray();
        $this->listsForFields['patient_status']       = PatientStatus::pluck('status', 'id')->toArray();
        $this->listsForFields['patient']              = Patient::pluck('patient', 'id')->toArray();
        $this->listsForFields['client']               = Client::pluck('client_name', 'id')->toArray();
        $this->listsForFields['order']                = Order::pluck('order', 'id')->toArray();
    }
}
