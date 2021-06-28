<?php

namespace App\Http\Livewire\AnswerType;

use App\Models\AnswerType;
use Livewire\Component;

class Create extends Component
{
    public AnswerType $answerType;

    public function mount(AnswerType $answerType)
    {
        $this->answerType = $answerType;
    }

    public function render()
    {
        return view('livewire.answer-type.create');
    }

    public function submit()
    {
        $this->validate();

        $this->answerType->save();

        return redirect()->route('admin.answer-types.index');
    }

    protected function rules(): array
    {
        return [
            'answerType.answer_type' => [
                'string',
                'nullable',
            ],
        ];
    }
}
