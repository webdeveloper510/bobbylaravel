<?php

namespace App\Http\Livewire\ClientType;

use App\Models\ClientType;
use Livewire\Component;

class Create extends Component
{
    public ClientType $clientType;

    public function mount(ClientType $clientType)
    {
        $this->clientType              = $clientType;
        $this->clientType->client_type = 'Site';
    }

    public function render()
    {
        return view('livewire.client-type.create');
    }

    public function submit()
    {
        $this->validate();

        $this->clientType->save();

        return redirect()->route('admin.client-types.index');
    }

    protected function rules(): array
    {
        return [
            'clientType.client_type' => [
                'string',
                'nullable',
            ],
        ];
    }
}
