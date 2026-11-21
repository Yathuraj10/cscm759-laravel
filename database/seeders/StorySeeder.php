<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Axolotl;

class StorySeeder extends Seeder
{
    public function run(): void
    {
        $axolotl = Axolotl::firstOrFail();

        $axolotl->stories()->create([
            'title' => 'The Adventure of Luna',
            'content' => 'Luna is a blue axolotl who loves exploring the underwater world.'
        ]);
    }
}
