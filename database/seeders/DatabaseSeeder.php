<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Age;
use App\Models\Gender;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Gender::create([
            'gender' => 'Woman',
        ]);
        Gender::create([
            'gender' => 'Man',
        ]);

        Age::create([
            'age' => '1 - 18',
        ]);
        Age::create([
            'age' => '19 - 29',
        ]);
        Age::create([
            'age' => '30 - 39',
        ]);
        Age::create([
            'age' => '40 - 49',
        ]);
        Age::create([
            'age' => '50 - 59',
        ]);
        Age::create([
            'age' => '60+',
        ]);
    }
}
