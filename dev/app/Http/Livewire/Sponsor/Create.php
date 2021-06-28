<?php

namespace App\Http\Livewire\Sponsor;

use App\Models\Sponsor;
use Livewire\Component;

class Create extends Component
{
    public Sponsor $sponsor;

    public function mount(Sponsor $sponsor)
    {
        $this->sponsor = $sponsor;
    }

    public function render()
    {
        return view('livewire.sponsor.create');
    }

    public function submit()
    {
        $this->validate();

        $this->sponsor->save();

        return redirect()->route('admin.sponsors.index');
    }

    protected function rules(): array
    {
        return [
            'sponsor.sponsor' => [
                'string',
                'nullable',
            ],
        ];
    }
}
