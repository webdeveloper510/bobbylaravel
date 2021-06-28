<?php

namespace App\Http\Livewire\CustomQuestion;

use App\Models\AnswerType;
use App\Models\CustomQuestion;
use App\Models\Order;
use Livewire\Component;

class Create extends Component
{
    public array $listsForFields = [];

    public CustomQuestion $customQuestion;

    public function mount(CustomQuestion $customQuestion)
    {
        $this->customQuestion = $customQuestion;
        $this->initListsForFields();
    }

    public function render()
    {
        return view('livewire.custom-question.create');
    }

    public function submit()
    {
        $this->validate();

        $this->customQuestion->save();

        return redirect()->route('admin.custom-questions.index');
    }

    protected function rules(): array
    {
        return [
            'customQuestion.order_id' => [
                'integer',
                'exists:orders,id',
                'nullable',
            ],
            'customQuestion.question' => [
                'string',
                'nullable',
            ],
            'customQuestion.answer' => [
                'string',
                'nullable',
            ],
            'customQuestion.answer_type_id' => [
                'integer',
                'exists:answer_types,id',
                'nullable',
            ],
            'customQuestion.status' => [
                'string',
                'nullable',
            ],
        ];
    }

    protected function initListsForFields(): void
    {
        $this->listsForFields['order']       = Order::pluck('order', 'id')->toArray();
        $this->listsForFields['answer_type'] = AnswerType::pluck('answer_type', 'id')->toArray();
    }
}
