<?php

namespace App\Http\Controllers;

use App\Models\Retailer;

class RetailerController extends Controller
{
    //
    public static function getAll($withMenu)
    {
        if ($withMenu) {
            return Retailer::with('menu')->get()->toJson();
        }
        return Retailer::all()->toJson();
    }
}
