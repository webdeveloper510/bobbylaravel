<?php

namespace App\Http\Livewire\Package;

use App\Models\Package;
use Livewire\Component;

class Create extends Component
{
    public Package $package;

    public function mount(Package $package)
    {
        $this->package          = $package;
        $this->package->package = 'Package 1';
    }

    public function render()
    {
        return view('livewire.package.create');
    }

    public function submit()
    {
        $this->validate();

        $this->package->save();

        return redirect()->route('admin.packages.index');
    }

    protected function rules(): array
    {
        return [
            'package.package' => [
                'string',
                'nullable',
            ],
            'package.price' => [
                'integer',
                'min:-2147483648',
                'max:2147483647',
                'nullable',
            ],
            'package.duration' => [
                'integer',
                'min:-2147483648',
                'max:2147483647',
                'nullable',
            ],
        ];
    }
}
