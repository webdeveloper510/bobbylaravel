<?php

namespace App\Http\Livewire\OrderUser;

use App\Models\Order;
use App\Models\OrderUser;
use App\Models\User;
use Livewire\Component;

class Edit extends Component
{
    public OrderUser $orderUser;

    public array $listsForFields = [];

    public function mount(OrderUser $orderUser)
    {
        $this->orderUser = $orderUser;
        $this->initListsForFields();
    }

    public function render()
    {
        return view('livewire.order-user.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->orderUser->save();

        return redirect()->route('admin.order-users.index');
    }

    protected function rules(): array
    {
        return [
            'orderUser.order_id' => [
                'integer',
                'exists:orders,id',
                'nullable',
            ],
            'orderUser.user_id' => [
                'integer',
                'exists:users,id',
                'nullable',
            ],
        ];
    }

    protected function initListsForFields(): void
    {
        $this->listsForFields['order'] = Order::pluck('order', 'id')->toArray();
        $this->listsForFields['user']  = User::pluck('email', 'id')->toArray();
    }
}
