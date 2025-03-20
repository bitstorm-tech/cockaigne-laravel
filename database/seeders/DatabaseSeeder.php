<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Age;
use App\Models\Category;
use App\Models\Gender;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->seedCategories();
        $this->seedGenders();
        $this->seedAges();
    }

    private function seedCategories()
    {
        Category::create([
            'category' => 'Elektronik & Technik',
            'color' => '#6898af',
        ]);
        Category::create([
            'category' => 'Unterhaltung & Gaming',
            'color' => '#4774b2',
        ]);
        Category::create([
            'category' => 'Lebensmittel & Haushalt',
            'color' => '#86b200',
        ]);
        Category::create([
            'category' => 'Fashion, Schmuck & Lifestyle',
            'color' => '#b3396a',
        ]);
        Category::create([
            'category' => 'Beauty, Wellness & Gesundheit',
            'color' => '#9059b3',
        ]);
        Category::create([
            'category' => 'Family & Kids',
            'color' => '#02b0b2',
        ]);
        Category::create([
            'category' => 'Home & Living',
            'color' => '#b2aba0',
        ]);
        Category::create([
            'category' => 'Baumarkt & Garten',
            'color' => '#b28d4b',
        ]);
        Category::create([
            'category' => 'Auto, Fahhrad & Motorrad',
            'color' => '#5c5e66',
        ]);
        Category::create([
            'category' => 'Gastronomie, Bars & Cafes',
            'color' => '#b35a37',
        ]);
        Category::create([
            'category' => 'Kultur & Freizeit',
            'color' => '#b3b100',
        ]);
        Category::create([
            'category' => 'Sport & Outdoor',
            'color' => '#b22929',
        ]);
        Category::create([
            'category' => 'Reisen, Hotels & Übernachtungen',
            'color' => '#3d484b',
        ]);
        Category::create([
            'category' => 'Dienstleistungen & Finanzen',
            'color' => '#465c8e',
        ]);
        Category::create([
            'category' => 'Floristik',
            'color' => '#60b262',
        ]);
        Category::create([
            'category' => 'Sonstiges',
            'color' => '#b3b3b3',
        ]);
    }

    private function seedGenders()
    {
        Gender::create([
            'gender' => 'Woman',
        ]);
        Gender::create([
            'gender' => 'Man',
        ]);
    }

    private function seedAges()
    {
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
