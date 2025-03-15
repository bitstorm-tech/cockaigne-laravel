<?php

namespace App\Livewire;

use Livewire\Component;

class Signup extends Component
{
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
