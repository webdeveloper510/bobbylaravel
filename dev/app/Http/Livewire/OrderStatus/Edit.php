<?php

namespace App\Http\Livewire\OrderStatus;

use App\Models\OrderStatus;
use Livewire\Component;

class Edit extends Component
{
    public OrderStatus $orderStatus;

    public function mount(OrderStatus $orderStatus)
    {
        $this->orderStatus = $orderStatus;
    }

    public function render()
    {
        return view('livewire.order-status.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->orderStatus->save();

        return redirect()->route('admin.order-statuses.index');
    }

    protected function rules(): array
    {
        return [
            'orderStatus.status' => [
                'string',
                'nullable',
            ],
        ];
    }
}
