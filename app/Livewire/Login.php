<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $username;
    public $password;

    protected $rules = [
        'username' => 'required|string',
        'password' => 'required|string',
    ];

    public function process() {
        // Validate input fields
        $this->validate();

        // Attempt to authenticate using the provided username and password
        if (Auth::attempt(['username' => $this->username, 'password' => $this->password])) {
            // If authentication is successful, redirect to the dashboard
            return redirect()->to('/dashboard');
        } else {
            // If authentication fails, add an error message
            $this->addError('login_error', 'Invalid username or password');
        }
    }

    public function render()
    {
        return view('livewire.login');
    }
}
