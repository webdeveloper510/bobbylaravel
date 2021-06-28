<?php

namespace App\Http\Livewire\Gender;

use App\Models\Gender;
use Livewire\Component;

class Edit extends Component
{
    public Gender $gender;

    public function mount(Gender $gender)
    {
        $this->gender = $gender;
    }

    public function render()
    {
        return view('livewire.gender.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->gender->save();

        return redirect()->route('admin.genders.index');
    }

    protected function rules(): array
    {
        return [
            'gender.gender' => [
                'string',
                'nullable',
            ],
        ];
    }
}
