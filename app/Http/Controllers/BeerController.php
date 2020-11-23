<?php

namespace App\Http\Controllers;

use App\Models\Beer;
use Illuminate\Http\Request;

class BeerController extends Controller
{
    public static function getBeerById($beerId) {
        return Beer::where('id', $beerId)->first()->toJson();
    }
    public static function getAll() {
        return Beer::all();
    }
    public static function createBeer(Request $request) {
        $Beer = new Beer;
        $Beer->brewery_id = $request->brewery_id;
        $Beer->name = $request->name;
        $Beer->abv = $request->abv;
        $Beer->ibu = $request->ibu;
        $Beer->filepath = $request->filepath;
        $Beer->description = $request->description;
        $Beer->style_type = $request->style_type;
        $Beer->category_type = $request->category_type;
        $Beer->save();
        
        return $Beer;
      }
}
