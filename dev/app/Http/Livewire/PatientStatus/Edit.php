<?php

namespace App\Http\Livewire\PatientStatus;

use App\Models\PatientStatus;
use Livewire\Component;

class Edit extends Component
{
    public PatientStatus $patientStatus;

    public function mount(PatientStatus $patientStatus)
    {
        $this->patientStatus = $patientStatus;
    }

    public function render()
    {
        return view('livewire.patient-status.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->patientStatus->save();

        return redirect()->route('admin.patient-statuses.index');
    }

    protected function rules(): array
    {
        return [
            'patientStatus.status' => [
                'string',
                'nullable',
            ],
        ];
    }
}
