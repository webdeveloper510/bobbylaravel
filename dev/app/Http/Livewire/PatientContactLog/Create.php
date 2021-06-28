<?php

namespace App\Http\Livewire\PatientContactLog;

use App\Models\OrderPatient;
use App\Models\PatientContactLog;
use App\Models\PatientStatus;
use App\Models\User;
use Livewire\Component;

class Create extends Component
{
    public array $listsForFields = [];

    public PatientContactLog $patientContactLog;

    public function mount(PatientContactLog $patientContactLog)
    {
        $this->patientContactLog = $patientContactLog;
        $this->initListsForFields();
    }

    public function render()
    {
        return view('livewire.patient-contact-log.create');
    }

    public function submit()
    {
        $this->validate();

        $this->patientContactLog->save();

        return redirect()->route('admin.patient-contact-logs.index');
    }

    protected function rules(): array
    {
        return [
            'patientContactLog.order_patient_id' => [
                'integer',
                'exists:order_patients,id',
                'nullable',
            ],
            'patientContactLog.patient_status_id' => [
                'integer',
                'exists:patient_statuses,id',
                'nullable',
            ],
            'patientContactLog.note' => [
                'string',
                'nullable',
            ],
            'patientContactLog.user_id' => [
                'integer',
                'exists:users,id',
                'nullable',
            ],
        ];
    }

    protected function initListsForFields(): void
    {
        $this->listsForFields['order_patient']  = OrderPatient::pluck('qualified', 'id')->toArray();
        $this->listsForFields['patient_status'] = PatientStatus::pluck('status', 'id')->toArray();
        $this->listsForFields['user']           = User::pluck('email', 'id')->toArray();
    }
}
