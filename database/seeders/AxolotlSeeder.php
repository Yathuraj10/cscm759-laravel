<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Axolotl;

class AxolotlSeeder extends Seeder
{
    public function run(): void
    {
        Axolotl::create([
            'name' => 'Luna',
            'colour' => 'Blue',
            'age' => 3
        ]);
    }
}
