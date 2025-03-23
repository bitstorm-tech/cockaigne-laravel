<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException as ValidationValidationException;
use Livewire\Attributes\Rule;
use Livewire\Component;

class Login extends Component
{
    #[Rule('required|email')]
    public string $email;

    #[Rule('required')]
    public string $password;

    public function login()
    {
        $this->validate();

        $loginSuccessful = Auth::attempt([
            'email' => $this->email,
            'password' => $this->password,
        ]);

        if (! $loginSuccessful) {
            throw ValidationValidationException::withMessages([
                'email' => __('Either e-mail or password does not match'),
            ]);
        }

        request()->session()->regenerate();

        redirect('/');
    }
}
