<?php

namespace App\Http\Livewire\OrderPatient;

use App\Models\Order;
use App\Models\OrderPatient;
use App\Models\Patient;
use App\Models\PatientStatus;
use Livewire\Component;

class Create extends Component
{
    public array $listsForFields = [];

    public OrderPatient $orderPatient;

    public function mount(OrderPatient $orderPatient)
    {
        $this->orderPatient = $orderPatient;
        $this->initListsForFields();
    }

    public function render()
    {
        return view('livewire.order-patient.create');
    }

    public function submit()
    {
        $this->validate();

        $this->orderPatient->save();

        return redirect()->route('admin.order-patients.index');
    }

    protected function rules(): array
    {
        return [
            'orderPatient.patient_id' => [
                'integer',
                'exists:patients,id',
                'nullable',
            ],
            'orderPatient.order_id' => [
                'integer',
                'exists:orders,id',
                'nullable',
            ],
            'orderPatient.diagnosis' => [
                'boolean',
            ],
            'orderPatient.other_clinical_trials' => [
                'boolean',
            ],
            'orderPatient.qualified' => [
                'boolean',
            ],
            'orderPatient.dnq_reason' => [
                'string',
                'nullable',
            ],
            'orderPatient.patient_status_id' => [
                'integer',
                'exists:patient_statuses,id',
                'nullable',
            ],
        ];
    }

    protected function initListsForFields(): void
    {
        $this->listsForFields['patient']        = Patient::pluck('patient', 'id')->toArray();
        $this->listsForFields['order']          = Order::pluck('order', 'id')->toArray();
        $this->listsForFields['patient_status'] = PatientStatus::pluck('status', 'id')->toArray();
    }
}
