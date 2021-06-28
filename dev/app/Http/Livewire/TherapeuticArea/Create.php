<?php

namespace App\Http\Livewire\TherapeuticArea;

use App\Models\TherapeuticArea;
use Livewire\Component;

class Create extends Component
{
    public TherapeuticArea $therapeuticArea;

    public function mount(TherapeuticArea $therapeuticArea)
    {
        $this->therapeuticArea = $therapeuticArea;
    }

    public function render()
    {
        return view('livewire.therapeutic-area.create');
    }

    public function submit()
    {
        $this->validate();

        $this->therapeuticArea->save();

        return redirect()->route('admin.therapeutic-areas.index');
    }

    protected function rules(): array
    {
        return [
            'therapeuticArea.therapeutic_area' => [
                'string',
                'nullable',
            ],
        ];
    }
}
