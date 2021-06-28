<?php

namespace App\Http\Livewire\Study;

use App\Models\Indication;
use App\Models\Order;
use App\Models\Protocol;
use App\Models\Sponsor;
use App\Models\Study;
use Livewire\Component;

class Create extends Component
{
    public Study $study;

    public array $listsForFields = [];

    public function mount(Study $study)
    {
        $this->study = $study;
        $this->initListsForFields();
    }

    public function render()
    {
        return view('livewire.study.create');
    }

    public function submit()
    {
        $this->validate();

        $this->study->save();

        return redirect()->route('admin.studies.index');
    }

    protected function rules(): array
    {
        return [
            'study.indication_id' => [
                'integer',
                'exists:indications,id',
                'nullable',
            ],
            'study.sponsor_id' => [
                'integer',
                'exists:sponsors,id',
                'nullable',
            ],
            'study.protocol_id' => [
                'integer',
                'exists:protocols,id',
                'nullable',
            ],
            'study.order_id' => [
                'integer',
                'exists:orders,id',
                'nullable',
            ],
        ];
    }

    protected function initListsForFields(): void
    {
        $this->listsForFields['indication'] = Indication::pluck('indication', 'id')->toArray();
        $this->listsForFields['sponsor']    = Sponsor::pluck('sponsor', 'id')->toArray();
        $this->listsForFields['protocol']   = Protocol::pluck('protocol', 'id')->toArray();
        $this->listsForFields['order']      = Order::pluck('order', 'id')->toArray();
    }
}
