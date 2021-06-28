<?php

namespace App\Http\Livewire\PatientSource;

use App\Models\Order;
use App\Models\OrderPatient;
use App\Models\Patient;
use App\Models\PatientSource;
use Livewire\Component;

class Create extends Component
{
    public array $listsForFields = [];

    public PatientSource $patientSource;

    public function mount(PatientSource $patientSource)
    {
        $this->patientSource = $patientSource;
        $this->initListsForFields();
    }

    public function render()
    {
        return view('livewire.patient-source.create');
    }

    public function submit()
    {
        $this->validate();

        $this->patientSource->save();

        return redirect()->route('admin.patient-sources.index');
    }

    protected function rules(): array
    {
        return [
            'patientSource.patient_id' => [
                'integer',
                'exists:patients,id',
                'nullable',
            ],
            'patientSource.order_id' => [
                'integer',
                'exists:orders,id',
                'nullable',
            ],
            'patientSource.order_patient_id' => [
                'integer',
                'exists:order_patients,id',
                'nullable',
            ],
            'patientSource.ip_address' => [
                'string',
                'nullable',
            ],
            'patientSource.url_referrer' => [
                'string',
                'nullable',
            ],
            'patientSource.utm_campaign' => [
                'string',
                'nullable',
            ],
            'patientSource.utm_content' => [
                'string',
                'nullable',
            ],
            'patientSource.utm_medium' => [
                'string',
                'nullable',
            ],
            'patientSource.utm_source' => [
                'string',
                'nullable',
            ],
            'patientSource.utm_term' => [
                'string',
                'nullable',
            ],
        ];
    }

    protected function initListsForFields(): void
    {
        $this->listsForFields['patient']       = Patient::pluck('patient', 'id')->toArray();
        $this->listsForFields['order']         = Order::pluck('order', 'id')->toArray();
        $this->listsForFields['order_patient'] = OrderPatient::pluck('qualified', 'id')->toArray();
    }
}
