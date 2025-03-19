<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Rule;
use Livewire\Form;

class DealerSignupForm extends Form
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
    public string $industry;

    #[Rule('required')]
    public string $street;

    #[Rule('required')]
    public string $houseNumber;

    #[Rule('required')]
    public string $city;

    #[Rule('required')]
    public int $postalCode;

    #[Rule('required')]
    public string $phoneNumber;

    #[Rule('required')]
    public string $taxId;
}
