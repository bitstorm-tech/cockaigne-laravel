<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        if (Auth::user()?->isDealer()) {
            return view('livewire.dealer');
        }

        return view('livewire.user');
    }
}
