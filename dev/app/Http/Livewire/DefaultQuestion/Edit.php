<?php

namespace App\Http\Livewire\DefaultQuestion;

use App\Models\DefaultQuestion;
use App\Models\Order;
use Livewire\Component;

class Edit extends Component
{
    public array $listsForFields = [];

    public DefaultQuestion $defaultQuestion;

    public function mount(DefaultQuestion $defaultQuestion)
    {
        $this->defaultQuestion = $defaultQuestion;
        $this->initListsForFields();
    }

    public function render()
    {
        return view('livewire.default-question.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->defaultQuestion->save();

        return redirect()->route('admin.default-questions.index');
    }

    protected function rules(): array
    {
        return [
            'defaultQuestion.order_id' => [
                'integer',
                'exists:orders,id',
                'nullable',
            ],
            'defaultQuestion.birth_date' => [
                'boolean',
            ],
            'defaultQuestion.zip_code' => [
                'boolean',
            ],
            'defaultQuestion.gender' => [
                'boolean',
            ],
            'defaultQuestion.ethnicity' => [
                'boolean',
            ],
            'defaultQuestion.height' => [
                'boolean',
            ],
            'defaultQuestion.weight' => [
                'boolean',
            ],
            'defaultQuestion.diagnosis' => [
                'boolean',
            ],
            'defaultQuestion.current_medications' => [
                'boolean',
            ],
            'defaultQuestion.other_conditions' => [
                'boolean',
            ],
            'defaultQuestion.other_clinical_trials' => [
                'boolean',
            ],
            'defaultQuestion.contact_method' => [
                'boolean',
            ],
            'defaultQuestion.contact_time' => [
                'boolean',
            ],
        ];
    }

    protected function initListsForFields(): void
    {
        $this->listsForFields['order'] = Order::pluck('order', 'id')->toArray();
    }
}
