<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Illuminate\Support\Facades\Password;

class ForgotPassword extends Component
{
    public $key, $password, $title = "Forgot Password", $idUser;

    public function forgotPassword()
    {
        $user = User::where('email', $this->key)->orWhere('username', $this->key)->first();
        if ($user) {
            flash()->success('Data ditemukan silahkan masukkan password baru!');
            $this->idUser = $user->id;
        } else {
            flash()->error('Data tidak ditemukan!');
        }
    }

    public function NewPassword()
    {
        $this->validate(['password' => 'required|min:6']);
        $user = User::find($this->idUser);
        if ($user) {
            $user->update(['password' => Hash::make($this->password)]);
            flash()->success('Forgot Password Successfully!');
            $this->idUser = null;
            return redirect()->route('login');
        } else {
            flash()->error('Data tidak ditemukan!');
        }
    }

    public function render()
    {
        return view('livewire.auth.forgot-password')->layout('components.layouts.app', ['title' => $this->title]);
    }
}
