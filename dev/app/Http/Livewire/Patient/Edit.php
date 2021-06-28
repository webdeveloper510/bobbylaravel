<?php

namespace App\Http\Livewire\Patient;

use App\Models\ContactMethod;
use App\Models\ContactTime;
use App\Models\Distance;
use App\Models\Ethnicity;
use App\Models\Gender;
use App\Models\Patient;
use App\Models\Role;
use App\Models\User;
use Livewire\Component;

class Edit extends Component
{
    public array $role = [];

    public Patient $patient;

    public array $contact_time = [];

    public array $listsForFields = [];

    public array $contact_method = [];

    public function mount(Patient $patient)
    {
        $this->patient        = $patient;
        $this->role           = $this->patient->role()->pluck('id')->toArray();
        $this->contact_method = $this->patient->contactMethod()->pluck('id')->toArray();
        $this->contact_time   = $this->patient->contactTime()->pluck('id')->toArray();
        $this->initListsForFields();
    }

    public function render()
    {
        return view('livewire.patient.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->patient->save();
        $this->patient->role()->sync($this->role);
        $this->patient->contactMethod()->sync($this->contact_method);
        $this->patient->contactTime()->sync($this->contact_time);

        return redirect()->route('admin.patients.index');
    }

    protected function rules(): array
    {
        return [
            'role' => [
                'array',
            ],
            'role.*.id' => [
                'integer',
                'exists:roles,id',
            ],
            'patient.user_id' => [
                'integer',
                'exists:users,id',
                'nullable',
            ],
            'patient.patient' => [
                'string',
                'nullable',
            ],
            'patient.birth_date' => [
                'string',
                'nullable',
            ],
            'patient.height_ft' => [
                'string',
                'nullable',
            ],
            'patient.height_in' => [
                'string',
                'nullable',
            ],
            'patient.weight' => [
                'string',
                'nullable',
            ],
            'patient.bmi' => [
                'integer',
                'min:-2147483648',
                'max:2147483647',
                'nullable',
            ],
            'patient.gender_id' => [
                'integer',
                'exists:genders,id',
                'nullable',
            ],
            'patient.ethnicity_id' => [
                'integer',
                'exists:ethnicities,id',
                'nullable',
            ],
            'contact_method' => [
                'array',
            ],
            'contact_method.*.id' => [
                'integer',
                'exists:contact_methods,id',
            ],
            'contact_time' => [
                'array',
            ],
            'contact_time.*.id' => [
                'integer',
                'exists:contact_times,id',
            ],
            'patient.distance_id' => [
                'integer',
                'exists:distances,id',
                'nullable',
            ],
            'patient.zip_code' => [
                'string',
                'nullable',
            ],
        ];
    }

    protected function initListsForFields(): void
    {
        $this->listsForFields['role']           = Role::pluck('title', 'id')->toArray();
        $this->listsForFields['user']           = User::pluck('email', 'id')->toArray();
        $this->listsForFields['gender']         = Gender::pluck('gender', 'id')->toArray();
        $this->listsForFields['ethnicity']      = Ethnicity::pluck('ethnicity', 'id')->toArray();
        $this->listsForFields['contact_method'] = ContactMethod::pluck('contact_method', 'id')->toArray();
        $this->listsForFields['contact_time']   = ContactTime::pluck('contact_time', 'id')->toArray();
        $this->listsForFields['distance']       = Distance::pluck('distance', 'id')->toArray();
    }
}
