<?php

namespace App\Livewire;

use App\Livewire\Forms\DealerSignupForm;
use App\Livewire\Forms\UserSignupForm;
use App\Models\Age;
use App\Models\Gender;
use Livewire\Component;

class Signup extends Component
{
    public bool $isDealer = false;

    public bool $acceptTerms = true;

    public UserSignupForm $userForm;

    public DealerSignupForm $dealerForm;

    public function save()
    {
        $this->validate([
            'acceptTerms' => 'accepted',
        ]);

        if ($this->isDealer) {
            // $this->dealerForm->create();
        } else {
            $this->userForm->create();
        }

        response()->redirectTo('/');
    }

    public function render()
    {
        $industries = [
            ['id' => 1, 'name' => 'Flowsers'],
            ['id' => 2, 'name' => 'Hotel'],
            ['id' => 3, 'name' => 'Cars'],
            ['id' => 4, 'name' => 'Finance'],
        ];

        $ages = Age::select(['id', 'age'])->where('active', true)->orderBy('age')->get();
        $genders = Gender::select(['id', 'gender'])->where('active', true)->orderBy('gender')->get();

        return view('livewire.signup', [
            'ages' => $ages,
            'genders' => $genders,
            'industries' => $industries,
        ]);
    }
}
