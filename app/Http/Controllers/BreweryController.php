<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brewery;

class BreweryController extends Controller
{
    //

    public static function getAll($withBeers)
    {
        if ($withBeers) {
            return Brewery::with('beers')->get()->toJson();
        }
        return Brewery::all()->toJson();
    }
}
