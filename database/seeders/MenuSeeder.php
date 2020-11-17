<?php

namespace Database\Seeders;

use App\Models\Beer;
use App\Models\Menu;
use App\Models\Retailer;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $retailers = Retailer::all();
        foreach($retailers as $retailer) {
            Menu::create(['retailer_id' => $retailer->id]);
        }

        $beers = Beer::all();
        Menu::all()->each(function ($menu) use ($beers) {
            $menu->beers()->attach(
                $beers->random(rand(1, 25))->pluck('id')->toArray()
            );
        });

    }
}
