<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brewery

class BreweryController extends Controller
{
    //
    public function getAll()
    {
        return Brewery::all()
    }
}
