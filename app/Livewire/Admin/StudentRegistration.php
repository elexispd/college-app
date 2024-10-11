<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use Livewire\Attributes\Rule;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class StudentRegistration extends Component
{

    public $rules = [
        'name' => ['required','min:2','max:50'],
        'email' => ['required', 'email', 'unique:users'],
        'ap_number' => ['required', 'unique:users'],
        'birth_year' => ['required', 'integer', 'min:1900', 'max:2022'],
        'gender' => ['required', 'string'],
        'command' => ['required', 'string'],
        'enlistment_date' => ['date'],
        'promoted_date' => ['date'],
        'qualification' => ['required','string'],
        'state' => ['required','string'],
        'category' => ['required','string']
    ];

    public $name;
    public $email;
    public $ap_number;
    public $birth_year;
    public $gender;
    public $command;
    public $enlistment_date;
    public $promoted_date;
    public $qualification;
    public $state;
    public $category;

    #
    public function process() {
        $validated = $this->validate($this->rules);

        User::create([
            'name' => $validated["name"],
            'email' => $validated["email"],
            'password' => Hash::make($validated["ap_number"]),
            'ap_number' => $validated["ap_number"],
            'username' => $validated["ap_number"],
            'birth_year' => $validated["birth_year"],
            'gender' => $validated["gender"],
            'command' => $validated["command"],
            'enlistment_date' => $validated["enlistment_date"],
            'promotion_date' => $validated["promoted_date"],
            'qualification' => $validated["qualification"],
            'state' => $validated["state"],
            'student_type' => $validated["category"]

        ]);



        $this->reset();

        // Dispatch a browser event to show the alert
        // $this->dispatchBrowserEvent('show-alert', [
        //     'type' => 'success',
        //     'message' => 'Student created successfully'
        // ]);
    }
    public function render()
    {
        return view('livewire.admin.student-registration');
    }
}
