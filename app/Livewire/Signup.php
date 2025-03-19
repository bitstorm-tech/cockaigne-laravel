<?php

namespace App\Livewire;

use App\Livewire\Forms\DealerSignupForm;
use App\Livewire\Forms\UserSignupForm;
use Livewire\Attributes\Rule;
use Livewire\Component;

class Signup extends Component
{
    public bool $isDealer = true;

    #[Rule('accepted')]
    public bool $acceptTerms = false;

    public UserSignupForm $userForm;

    public DealerSignupForm $dealerForm;

    public function save()
    {
        $this->validate();

        if ($this->isDealer) {
            $this->dealerForm->validate();
        } else {
            $this->userForm->validate();
        }
    }

    public function render()
    {
        $industries = [
            ['id' => 1, 'name' => 'Flowsers'],
            ['id' => 2, 'name' => 'Hotel'],
            ['id' => 3, 'name' => 'Cars'],
            ['id' => 4, 'name' => 'Finance'],
        ];

        return view('livewire.signup', [
            'industries' => $industries,
        ]);
    }
}
