<?php

namespace App\Http\Livewire\Order;

use App\Models\Client;
use App\Models\Cro;
use App\Models\Gender;
use App\Models\Image;
use App\Models\Order;
use App\Models\OrderStatus;
use App\Models\Package;
use App\Models\Protocol;
use App\Models\Sponsor;
use App\Models\User;
use Livewire\Component;

class Create extends Component
{
    public Order $order;

    public array $package = [];

    public array $listsForFields = [];

    public array $recruitment_emails = [];

    public function mount(Order $order)
    {
        $this->order = $order;
        $this->initListsForFields();
    }

    public function render()
    {
        return view('livewire.order.create');
    }

    public function submit()
    {
        $this->validate();

        $this->order->save();
        $this->order->package()->sync($this->package);
        $this->order->recruitmentEmails()->sync($this->recruitment_emails);

        return redirect()->route('admin.orders.index');
    }

    protected function rules(): array
    {
        return [
            'order.order' => [
                'string',
                'nullable',
            ],
            'order.client_id_bill_id' => [
                'integer',
                'exists:clients,id',
                'nullable',
            ],
            'order.client_id_ship_id' => [
                'integer',
                'exists:clients,id',
                'nullable',
            ],
            'order.sponsor_id' => [
                'integer',
                'exists:sponsors,id',
                'nullable',
            ],
            'order.protocol_id' => [
                'integer',
                'exists:protocols,id',
                'nullable',
            ],
            'order.cro_id' => [
                'integer',
                'exists:cros,id',
                'nullable',
            ],
            'package' => [
                'array',
            ],
            'package.*.id' => [
                'integer',
                'exists:packages,id',
            ],
            'order.referral_guarantee' => [
                'integer',
                'min:-2147483648',
                'max:2147483647',
                'nullable',
            ],
            'order.start_date' => [
                'nullable',
                'date_format:' . config('project.date_format'),
            ],
            'order.end_date' => [
                'nullable',
                'date_format:' . config('project.date_format'),
            ],
            'order.minimum_age' => [
                'integer',
                'min:-2147483648',
                'max:2147483647',
                'nullable',
            ],
            'order.maximum_age' => [
                'integer',
                'min:-2147483648',
                'max:2147483647',
                'nullable',
            ],
            'order.minimum_bmi' => [
                'string',
                'nullable',
            ],
            'order.maximum_bmi' => [
                'string',
                'nullable',
            ],
            'order.gender_id' => [
                'integer',
                'exists:genders,id',
                'nullable',
            ],
            'order.coupon_code' => [
                'string',
                'nullable',
            ],
            'order.discount_rate' => [
                'numeric',
                'nullable',
            ],
            'order.sub_total_price' => [
                'integer',
                'min:-2147483648',
                'max:2147483647',
                'nullable',
            ],
            'order.total_price' => [
                'integer',
                'min:-2147483648',
                'max:2147483647',
                'nullable',
            ],
            'order.payment_type' => [
                'string',
                'nullable',
            ],
            'order.credit_card' => [
                'string',
                'nullable',
            ],
            'order.stripe_confirmation' => [
                'string',
                'nullable',
            ],
            'recruitment_emails' => [
                'array',
            ],
            'recruitment_emails.*.id' => [
                'integer',
                'exists:users,id',
            ],
            'order.notes' => [
                'string',
                'nullable',
            ],
            'order.images_id' => [
                'integer',
                'exists:images,id',
                'nullable',
            ],
            'order.order_status_id' => [
                'integer',
                'exists:order_statuses,id',
                'nullable',
            ],
        ];
    }

    protected function initListsForFields(): void
    {
        $this->listsForFields['client_id_bill']     = Client::pluck('client_name', 'id')->toArray();
        $this->listsForFields['client_id_ship']     = Client::pluck('client_name', 'id')->toArray();
        $this->listsForFields['sponsor']            = Sponsor::pluck('sponsor', 'id')->toArray();
        $this->listsForFields['protocol']           = Protocol::pluck('protocol', 'id')->toArray();
        $this->listsForFields['cro']                = Cro::pluck('cro_name', 'id')->toArray();
        $this->listsForFields['package']            = Package::pluck('package', 'id')->toArray();
        $this->listsForFields['gender']             = Gender::pluck('gender', 'id')->toArray();
        $this->listsForFields['recruitment_emails'] = User::pluck('email', 'id')->toArray();
        $this->listsForFields['images']             = Image::pluck('title', 'id')->toArray();
        $this->listsForFields['order_status']       = OrderStatus::pluck('status', 'id')->toArray();
    }
}
