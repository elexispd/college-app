<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Student; // Import your Student model
use App\Models\User;
use Livewire\Attributes\On;

class FormModal extends Component
{
    public $title;
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


    public function process() {
        // Processing form submission logic
        dd($this->email); // Test the data submission
    }

    #[On('show-edit-modal')]
    public function showModal($student_id)
    {
        $student = User::findOrFail($student_id);
        $this->name = $student->name;
        $this->email = $student->email;
        $this->command = $student->command;
        $this->gender = $student->gender;
        $this->ap_number = $student->state; // Assuming this should be state instead of ap_number
        $this->state = $student->state;

    }



    public function render()
    {
        return view('livewire.form-modal');
    }
}
