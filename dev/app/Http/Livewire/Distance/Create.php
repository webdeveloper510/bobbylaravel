<?php

namespace App\Http\Livewire\Distance;

use App\Models\Distance;
use Livewire\Component;

class Create extends Component
{
    public Distance $distance;

    public function mount(Distance $distance)
    {
        $this->distance = $distance;
    }

    public function render()
    {
        return view('livewire.distance.create');
    }

    public function submit()
    {
        $this->validate();

        $this->distance->save();

        return redirect()->route('admin.distances.index');
    }

    protected function rules(): array
    {
        return [
            'distance.distance' => [
                'string',
                'nullable',
            ],
        ];
    }
}
