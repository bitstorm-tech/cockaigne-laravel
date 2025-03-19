<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Rule;
use Livewire\Form;

class UserSignupForm extends Form
{
    #[Rule('required')]
    public string $email;

    #[Rule('required|min:3')]
    public string $username;

    #[Rule('required|min:8|confirmed')]
    public string $password;

    #[Rule('required|min:8')]
    public string $password_confirmation;

    #[Rule('required')]
    public int $age;

    #[Rule('required')]
    public string $gender;
}
