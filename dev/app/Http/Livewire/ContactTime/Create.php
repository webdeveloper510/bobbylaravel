<?php

namespace App\Http\Livewire\ContactTime;

use App\Models\ContactTime;
use Livewire\Component;

class Create extends Component
{
    public ContactTime $contactTime;

    public function mount(ContactTime $contactTime)
    {
        $this->contactTime = $contactTime;
    }

    public function render()
    {
        return view('livewire.contact-time.create');
    }

    public function submit()
    {
        $this->validate();

        $this->contactTime->save();

        return redirect()->route('admin.contact-times.index');
    }

    protected function rules(): array
    {
        return [
            'contactTime.contact_time' => [
                'string',
                'nullable',
            ],
        ];
    }
}
