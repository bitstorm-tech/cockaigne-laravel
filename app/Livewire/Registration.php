<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Lang;
use Illuminate\View\View;
use Livewire\Component;

class Registration extends Component
{
    public bool $isDealer = false;
    public string $mail = '';

    public $ageOptions = [
        ['id' => 1, 'name' => 'bis 18'],
        ['id' => 2, 'name' => '19 - 29'],
        ['id' => 3, 'name' => '30 - 39'],
        ['id' => 4, 'name' => '40 - 49'],
        ['id' => 5, 'name' => '50 - 59'],
        ['id' => 6, 'name' => 'ab 60'],
    ];

    public $genderOptions = [
        ['id' => 1, 'name' => 'Frau'],
        ['id' => 2, 'name' => 'Mann'],
        ['id' => 3, 'name' => 'Egal'],
    ];

    public function termsLink(): string
    {
        return '<a class="link" href="#">' . Lang::get('Terms') . '</a>';
    }

    public function privacyLink(): string
    {
        return '<a class="link" href="#">' . Lang::get('Privacy') . '</a>';
    }

    public function render(): View
    {

        return view('livewire.registration');
    }
}