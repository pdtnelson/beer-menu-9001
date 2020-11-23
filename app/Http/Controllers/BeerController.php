<?php

namespace App\Http\Controllers;

use App\Models\Beer;
use Illuminate\Http\Request;

class BeerController extends Controller
{
    public static function getBeerById($beerId) {
        // needs to be find by or summin like that
        return Beer::where('id', $beerId)->first()->toJson();
    }
    public static function getAll() {
        return Beer::all();
    }
}
