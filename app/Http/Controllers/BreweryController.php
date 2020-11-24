<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brewery;
use Symfony\Component\HttpKernel\Exception\UnprocessableEntityHttpException;

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

    public static function create(Request $request) {
        try {
            $request->validate([
                'name' => 'required',
                'address1' => 'required',
                'city' => 'required',
                'zip_code' => 'required|max:6',
                'country' => 'required',
                'phone' => 'required',
                'filepath' => 'required',
                'description' => 'required',
                'latitude' => 'required',
                'longitude' => 'required'
            ]);
            return Brewery::create($request->all());
        } catch(\Exception $exception) {
            throw new UnprocessableEntityHttpException("Yo request was missing fields");
        }
    }
}
