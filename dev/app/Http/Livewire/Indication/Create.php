<?php

namespace App\Http\Livewire\Indication;

use App\Models\Indication;
use App\Models\TherapeuticArea;
use Livewire\Component;

class Create extends Component
{
    public Indication $indication;

    public array $listsForFields = [];

    public function mount(Indication $indication)
    {
        $this->indication = $indication;
        $this->initListsForFields();
    }

    public function render()
    {
        return view('livewire.indication.create');
    }

    public function submit()
    {
        $this->validate();

        $this->indication->save();

        return redirect()->route('admin.indications.index');
    }

    protected function rules(): array
    {
        return [
            'indication.indication' => [
                'string',
                'nullable',
            ],
            'indication.therapeutic_area_id' => [
                'integer',
                'exists:therapeutic_areas,id',
                'nullable',
            ],
            'indication.description' => [
                'string',
                'nullable',
            ],
            'indication.symptoms' => [
                'nullable',
                'in:' . implode(',', array_keys($this->listsForFields['symptoms'])),
            ],
            'indication.causes' => [
                'string',
                'nullable',
            ],
            'indication.treatments' => [
                'nullable',
                'in:' . implode(',', array_keys($this->listsForFields['treatments'])),
            ],
            'indication.risk_factors' => [
                'nullable',
                'in:' . implode(',', array_keys($this->listsForFields['risk_factors'])),
            ],
        ];
    }

    protected function initListsForFields(): void
    {
        $this->listsForFields['therapeutic_area'] = TherapeuticArea::pluck('therapeutic_area', 'id')->toArray();
        $this->listsForFields['symptoms']         = $this->indication::SYMPTOMS_SELECT;
        $this->listsForFields['treatments']       = $this->indication::TREATMENTS_SELECT;
        $this->listsForFields['risk_factors']     = $this->indication::RISK_FACTORS_SELECT;
    }
}
