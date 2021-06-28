<?php

namespace App\Http\Livewire\Client;

use App\Models\Client;
use App\Models\ClientType;
use Livewire\Component;

class Edit extends Component
{
    public Client $client;

    public array $listsForFields = [];

    public function mount(Client $client)
    {
        $this->client = $client;
        $this->initListsForFields();
    }

    public function render()
    {
        return view('livewire.client.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->client->save();

        return redirect()->route('admin.clients.index');
    }

    protected function rules(): array
    {
        return [
            'client.client_name' => [
                'string',
                'required',
            ],
            'client.client_type_id' => [
                'integer',
                'exists:client_types,id',
                'nullable',
            ],
            'client.address' => [
                'string',
                'nullable',
            ],
            'client.address_2' => [
                'string',
                'nullable',
            ],
            'client.city' => [
                'string',
                'nullable',
            ],
            'client.state' => [
                'string',
                'nullable',
            ],
            'client.zip_code' => [
                'string',
                'nullable',
            ],
            'client.country' => [
                'string',
                'nullable',
            ],
            'client.phone_number' => [
                'string',
                'nullable',
            ],
            'client.website' => [
                'string',
                'nullable',
            ],
            'client.tracker' => [
                'string',
                'nullable',
            ],
        ];
    }

    protected function initListsForFields(): void
    {
        $this->listsForFields['client_type'] = ClientType::pluck('client_type', 'id')->toArray();
    }
}
