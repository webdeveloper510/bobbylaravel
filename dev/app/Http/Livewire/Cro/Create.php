<?php

namespace App\Http\Livewire\Cro;

use App\Models\Cro;
use Livewire\Component;

class Create extends Component
{
    public Cro $cro;

    public function mount(Cro $cro)
    {
        $this->cro = $cro;
    }

    public function render()
    {
        return view('livewire.cro.create');
    }

    public function submit()
    {
        $this->validate();

        $this->cro->save();

        return redirect()->route('admin.cros.index');
    }

    protected function rules(): array
    {
        return [
            'cro.cro_name' => [
                'string',
                'nullable',
            ],
        ];
    }
}
