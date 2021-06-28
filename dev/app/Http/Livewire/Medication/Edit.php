<?php

namespace App\Http\Livewire\Medication;

use App\Models\Medication;
use Livewire\Component;

class Edit extends Component
{
    public Medication $medication;

    public function mount(Medication $medication)
    {
        $this->medication = $medication;
    }

    public function render()
    {
        return view('livewire.medication.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->medication->save();

        return redirect()->route('admin.medications.index');
    }

    protected function rules(): array
    {
        return [
            'medication.brand_name' => [
                'string',
                'nullable',
            ],
            'medication.sponsor_name' => [
                'string',
                'nullable',
            ],
            'medication.application_number' => [
                'string',
                'nullable',
            ],
            'medication.dosage_form' => [
                'string',
                'nullable',
            ],
        ];
    }
}
