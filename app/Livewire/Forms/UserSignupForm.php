<?php

namespace App\Livewire\Forms;

use App\Models\ProUser;
use Illuminate\Support\Facades\Log;
use Livewire\Attributes\Rule;
use Livewire\Form;

class UserSignupForm extends Form
{
    #[Rule('required')]
    public string $email = 'a@b.com';

    #[Rule('required|min:2')]
    public string $username = 'JBA';

    #[Rule('required|min:4|confirmed')]
    public string $password = 'test';

    #[Rule('required|min:4')]
    public string $password_confirmation = 'test';

    public int $age;

    public string $gender;

    public function save()
    {
        Log::info("Save pro user: {$this->email}");
        $this->validate();
        Log::info('Pro user is valid ...');
        ProUser::create($this);
        Log::info('Done ...');
    }
}
