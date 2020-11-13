<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public static function getMenuByRetailerId($retailerId) {
        // needs to be find by or summin like that
        return Menu::where('retailer_id', $retailerId)->with('beers')->get()->toJson();
    }
}
