<?php

namespace Database\Seeders;

use App\Models\Retailer;
use Illuminate\Database\Seeder;

class RetailerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Retailer::factory()
            ->times(10)
            ->hasMenu(1)
            ->create();
    }
}
