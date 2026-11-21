<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Axolotl;
use App\Models\Story;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
   public function run(): void
    {
        // Run the individual seeders
        $this->call([
        AxolotlSeeder::class,
        StorySeeder::class,
        ]);

        // Generate 5 random axolotls
        Axolotl::factory(5)->create();

        // Generate 10 random stories
        Story::factory(10)->create();
    }
}
