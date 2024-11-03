<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class Register extends Component
{
    public $name, $username, $email, $password, $password_confirmation, $title = "Register";

    public function register()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);

        User::create([
            'name' => $this->name,
            'username' => $this->username,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);

        // flash()->success('Operation completed successfully.');
        toastr()->success('Data has been saved successfully!');
        return redirect()->route('login');
    }

    public function render()
    {
        return view('livewire.auth.register')->layout('components.layouts.app', ['title' => $this->title]);
    }
}
