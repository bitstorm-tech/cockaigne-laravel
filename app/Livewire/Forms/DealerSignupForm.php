<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Rule;
use Livewire\Form;

class DealerSignupForm extends Form
{
    #[Rule('required')]
    public string $email = 'josef.bauer.business@gmail.com';

    #[Rule('required|min:3')]
    public string $username = 'Josef Doenerbude';

    #[Rule('required|min:4|confirmed')]
    public string $password = 'test';

    #[Rule('required|min:4')]
    public string $password_confirmation = 'test';

    #[Rule('required|gt:0')]
    public int $defaultCategory = 1;

    #[Rule('required')]
    public string $street = 'Josef-Frankl-Str.';

    #[Rule('required')]
    public string $houseNumber = '31a';

    #[Rule('required')]
    public string $city = 'Muenchen';

    #[Rule('required')]
    public int $postalCode = 80995;

    #[Rule('required')]
    public string $phoneNumber = '1234567890';

    #[Rule('required')]
    public string $taxId = 'DE-1234567890';
}
