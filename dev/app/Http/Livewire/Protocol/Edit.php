<?php

namespace App\Http\Livewire\Protocol;

use App\Models\Protocol;
use Livewire\Component;

class Edit extends Component
{
    public Protocol $protocol;

    public function mount(Protocol $protocol)
    {
        $this->protocol = $protocol;
    }

    public function render()
    {
        return view('livewire.protocol.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->protocol->save();

        return redirect()->route('admin.protocols.index');
    }

    protected function rules(): array
    {
        return [
            'protocol.protocol' => [
                'string',
                'nullable',
            ],
            'protocol.file' => [
                'string',
                'nullable',
            ],
        ];
    }
}
