<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Password;

class ForgotPassword extends Component
{
    public $email, $title = "Forgot Password";

    public function sendResetLink()
    {
        $this->validate(['email' => 'required|email']);

        $status = Password::sendResetLink(['email' => $this->email]);

        session()->flash('status', __($status));
    }

    public function render()
    {
        return view('livewire.auth.forgot-password')->layout('components.layouts.app', ['title' => $this->title]);
    }
}
