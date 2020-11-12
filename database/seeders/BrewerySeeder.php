<?php

namespace Database\Seeders;

use App\Models\Brewery;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrewerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('breweries')->delete();
        $file = file_get_contents(base_path('database/data/breweries.json'));
        $breweries = json_decode($file);
        foreach($breweries as $brewery) {
            Brewery::create([
                'name' => $brewery->name,
                'address1' => $brewery->address1,
                'city' => $brewery->city,
                'zip_code' => $brewery->zip_code,
                'country' => $brewery->country,
                'phone' => $brewery->phone,
                'filepath' => $brewery->filepath,
                'description' => $brewery->description,
                'latitude' => $brewery->latitude,
                'longitude' => $brewery->longitude
            ]);
        }
    }
}
