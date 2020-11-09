<?php

namespace Database\Seeders;

use App\Models\Brewery;
use Illuminate\Database\Seeder;

class BrewerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Use da factory
        Brewery::factory()
            ->times(10)
            ->hasBeers(15)
            ->create();
    }
}
