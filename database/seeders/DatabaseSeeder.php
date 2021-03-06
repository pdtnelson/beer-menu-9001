<?php

namespace Database\Seeders;

use App\Models\Brewery;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            BrewerySeeder::class,
            BeerSeeder::class,
            RetailerSeeder::class,
            MenuSeeder::class
        ]);
    }
}
