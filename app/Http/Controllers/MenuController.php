<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public static function getMenuByRetailerId($retailerId) {
        return Menu::where('retailer_id', $retailerId)->with('beers')->first()->toJson();
    }
}
