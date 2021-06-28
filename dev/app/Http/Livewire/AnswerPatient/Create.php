<?php

namespace App\Http\Livewire\AnswerPatient;

use App\Models\AnswerPatient;
use App\Models\Order;
use App\Models\Patient;
use Livewire\Component;

class Create extends Component
{
    public array $listsForFields = [];

    public AnswerPatient $answerPatient;

    public function mount(AnswerPatient $answerPatient)
    {
        $this->answerPatient = $answerPatient;
        $this->initListsForFields();
    }

    public function render()
    {
        return view('livewire.answer-patient.create');
    }

    public function submit()
    {
        $this->validate();

        $this->answerPatient->save();

        return redirect()->route('admin.answer-patients.index');
    }

    protected function rules(): array
    {
        return [
            'answerPatient.patient_id' => [
                'integer',
                'exists:patients,id',
                'nullable',
            ],
            'answerPatient.order_id' => [
                'integer',
                'exists:orders,id',
                'nullable',
            ],
        ];
    }

    protected function initListsForFields(): void
    {
        $this->listsForFields['patient'] = Patient::pluck('patient', 'id')->toArray();
        $this->listsForFields['order']   = Order::pluck('order', 'id')->toArray();
    }
}
