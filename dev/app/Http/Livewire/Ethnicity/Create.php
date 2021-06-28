<?php

namespace App\Http\Livewire\Ethnicity;

use App\Models\Ethnicity;
use Livewire\Component;

class Create extends Component
{
    public Ethnicity $ethnicity;

    public function mount(Ethnicity $ethnicity)
    {
        $this->ethnicity = $ethnicity;
    }

    public function render()
    {
        return view('livewire.ethnicity.create');
    }

    public function submit()
    {
        $this->validate();

        $this->ethnicity->save();

        return redirect()->route('admin.ethnicities.index');
    }

    protected function rules(): array
    {
        return [
            'ethnicity.ethnicity' => [
                'string',
                'nullable',
            ],
        ];
    }
}
