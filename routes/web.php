<?php

use App\Livewire\Auth\ForgotPassword;
use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;
use App\Livewire\NewPassword;
use Illuminate\Support\Facades\Route;



Route::middleware(['auth'])->group(function() {
    Route::get('/', function () {
        flash()->success('Aplication Ready.');
        return view('admin_lte.index');
    })->name('home');
});
Route::middleware(['guest'])->group(function(){
    Route::get('/login', Login::class)->name('login');
    Route::get('/register', Register::class)->name('register');
    Route::get('/forgot-password', ForgotPassword::class)->name('password.request');
    Route::get('/forgot-password/new/password/{user}', NewPassword::class)->name('password.new');
});
