<?php

namespace App\Http\Controllers;

use App\Models\Retailer;

class RetailerController extends Controller
{
    //
    public static function getAll()
    {
        return Retailer::all()->toJson();
    }
}
