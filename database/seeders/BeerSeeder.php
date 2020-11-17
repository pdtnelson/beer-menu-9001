<?php

namespace Database\Seeders;

use App\Models\Beer;
use App\Models\Brewery;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BeerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('beers')->delete();
        $beers = json_decode(file_get_contents(base_path('database/data/beers.json')));
        foreach($beers as $beer) {
            if(Brewery::where('id', '=', $beer->brewery_id)->exists()) {
                Beer::create([
                    'brewery_id' => $beer->brewery_id,
                    'name' => $beer->name,
                    'abv' => $beer->abv,
                    'ibu' => $beer->ibu,
                    'filepath' => $beer->filepath,
                    'description' => $beer->description,
                    'style_type' => $beer->style_type ? $beer->style_type : "Undefined Style Type",
                    'category_type' => $beer->category_type ? $beer->category_type : "Undefined Category Type"
                ]);
            }
        }
    }
}
