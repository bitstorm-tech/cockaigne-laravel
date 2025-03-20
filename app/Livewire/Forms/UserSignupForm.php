<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Rule;
use Livewire\Form;

class UserSignupForm extends Form
{
    #[Rule('required')]
    public string $email = 'josef.bauer.1st@gmail.com';

    #[Rule('required|min:2')]
    public string $username = 'JBA';

    #[Rule('required|min:4|confirmed')]
    public string $password = 'test';

    #[Rule('required|min:4')]
    public string $password_confirmation = 'test';

    public ?int $age = null;

    public ?int $gender = null;
}
