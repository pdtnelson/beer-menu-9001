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
    public static function create($request) {
        // die(print_r($request));
        return Beer::create($request);
      }
}
