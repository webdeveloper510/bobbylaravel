<?php

namespace App\Http\Livewire\Network;

use App\Models\Network;
use Livewire\Component;

class Create extends Component
{
    public Network $network;

    public function mount(Network $network)
    {
        $this->network = $network;
    }

    public function render()
    {
        return view('livewire.network.create');
    }

    public function submit()
    {
        $this->validate();

        $this->network->save();

        return redirect()->route('admin.networks.index');
    }

    protected function rules(): array
    {
        return [
            'network.network_name' => [
                'string',
                'nullable',
            ],
        ];
    }
}
