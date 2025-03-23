<?php

namespace App\Livewire;

use App\Livewire\Forms\DealerSignupForm;
use App\Livewire\Forms\UserSignupForm;
use App\Models\Age;
use App\Models\Category;
use App\Models\Dealer;
use App\Models\Gender;
use App\Models\ProUser;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Signup extends Component
{
    public bool $isDealer = true;

    public bool $acceptTerms = true;

    public UserSignupForm $userForm;

    public DealerSignupForm $dealerForm;

    public function save()
    {
        $this->validate([
            'acceptTerms' => 'accepted',
        ]);

        $user = match ($this->isDealer) {
            true => Dealer::create($this->dealerForm),
            false => ProUser::create($this->userForm),
        };

        Auth::login($user);

        response()->redirectTo('/');
    }

    public function render()
    {
        $ages = Age::select(['id', 'age'])->where('active', true)->orderBy('age')->get();
        $genders = Gender::select(['id', 'gender'])->where('active', true)->orderBy('gender')->get();
        $categories = Category::select(['id', 'category'])->where('active', true)->orderBy('category')->get();

        return view('livewire.signup', [
            'ages' => $ages,
            'genders' => $genders,
            'categories' => $categories,
        ]);
    }
}
