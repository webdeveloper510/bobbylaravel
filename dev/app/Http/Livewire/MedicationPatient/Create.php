<?php

namespace App\Http\Livewire\MedicationPatient;

use App\Models\Medication;
use App\Models\MedicationPatient;
use App\Models\Patient;
use Livewire\Component;

class Create extends Component
{
    public array $listsForFields = [];

    public MedicationPatient $medicationPatient;

    public function mount(MedicationPatient $medicationPatient)
    {
        $this->medicationPatient = $medicationPatient;
        $this->initListsForFields();
    }

    public function render()
    {
        return view('livewire.medication-patient.create');
    }

    public function submit()
    {
        $this->validate();

        $this->medicationPatient->save();

        return redirect()->route('admin.medication-patients.index');
    }

    protected function rules(): array
    {
        return [
            'medicationPatient.patient_id' => [
                'integer',
                'exists:patients,id',
                'nullable',
            ],
            'medicationPatient.medication_id' => [
                'integer',
                'exists:medications,id',
                'nullable',
            ],
        ];
    }

    protected function initListsForFields(): void
    {
        $this->listsForFields['patient']    = Patient::pluck('patient', 'id')->toArray();
        $this->listsForFields['medication'] = Medication::pluck('brand_name', 'id')->toArray();
    }
}
