<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class NewPassword extends Component
{

    public $password, $title="New Password";

    public function NewPassword($user) {
        User::find('id')->update([
            'password' => $this->password,
        ]);
    }
    public function render()
    {
        return view('livewire.new-password')->layout('components.layouts.app', ['title' => $this->title]);
    }
}
