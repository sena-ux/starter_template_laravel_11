<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Login extends Component
{
    public $username, $password, $title = "Login";

    public function login()
    {
        $this->validate([
            'username' => 'required|min:5',
            'password' => 'required|min:6',
        ]);

        if (Auth::attempt(['username' => $this->username, 'password' => $this->password])) {
            flash()->success('Login completed successfully.');
            return redirect()->intended('/');
        }
        
        flash()->error('Invalid credentials.');
    }

    public function render()
    {
        return view('livewire.auth.login')->layout('components.layouts.app', ['title' => $this->title]);
    }
}
