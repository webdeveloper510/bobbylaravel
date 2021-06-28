<?php

namespace App\Http\Livewire\ClientType;

use App\Models\ClientType;
use Livewire\Component;

class Edit extends Component
{
    public ClientType $clientType;

    public function mount(ClientType $clientType)
    {
        $this->clientType = $clientType;
    }

    public function render()
    {
        return view('livewire.client-type.edit');
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
