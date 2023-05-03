<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Album;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        #_____________________________________ User Factory
         User::factory(9)->create();

         User::factory()->create([
             'name' => 'Carl Alaeddin',
             'email' => 'carl.alaeddin@gmail.com',
         ]);

        #_____________________________________ Album Factory
        Album::factory(1)->create();
    }
}
