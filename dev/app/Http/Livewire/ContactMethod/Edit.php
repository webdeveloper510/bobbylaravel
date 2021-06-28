<?php

namespace App\Http\Livewire\ContactMethod;

use App\Models\ContactMethod;
use Livewire\Component;

class Edit extends Component
{
    public ContactMethod $contactMethod;

    public function mount(ContactMethod $contactMethod)
    {
        $this->contactMethod = $contactMethod;
    }

    public function render()
    {
        return view('livewire.contact-method.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->contactMethod->save();

        return redirect()->route('admin.contact-methods.index');
    }

    protected function rules(): array
    {
        return [
            'contactMethod.contact_method' => [
                'string',
                'nullable',
            ],
        ];
    }
}
