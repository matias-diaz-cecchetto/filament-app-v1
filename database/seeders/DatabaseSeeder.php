<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Database\Seeders\CountriesTableSeeder as SeedersCountriesTableSeeder;
use Database\Seeders\StatesTableSeeder as SeederStatesTableSeeder;
use Database\Seeders\CitySeeder as SeedersCitySeeder;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call(SeedersCountriesTableSeeder::class);
        $this->call(SeederStatesTableSeeder::class);
        $this->call(SeedersCitySeeder::class);
    }
}
