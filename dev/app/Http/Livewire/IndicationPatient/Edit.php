<?php

namespace App\Http\Livewire\IndicationPatient;

use App\Models\Indication;
use App\Models\IndicationPatient;
use App\Models\Patient;
use Livewire\Component;

class Edit extends Component
{
    public array $listsForFields = [];

    public IndicationPatient $indicationPatient;

    public function mount(IndicationPatient $indicationPatient)
    {
        $this->indicationPatient = $indicationPatient;
        $this->initListsForFields();
    }

    public function render()
    {
        return view('livewire.indication-patient.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->indicationPatient->save();

        return redirect()->route('admin.indication-patients.index');
    }

    protected function rules(): array
    {
        return [
            'indicationPatient.patient_id' => [
                'integer',
                'exists:patients,id',
                'nullable',
            ],
            'indicationPatient.indication_id' => [
                'integer',
                'exists:indications,id',
                'nullable',
            ],
        ];
    }

    protected function initListsForFields(): void
    {
        $this->listsForFields['patient']    = Patient::pluck('patient', 'id')->toArray();
        $this->listsForFields['indication'] = Indication::pluck('indication', 'id')->toArray();
    }
}
