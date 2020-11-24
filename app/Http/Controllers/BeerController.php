<?php

namespace App\Http\Controllers;

use App\Models\Beer;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\UnprocessableEntityHttpException;

class BeerController extends Controller
{
    public static function getBeerById($beerId) {
        return Beer::where('id', $beerId)->first()->toJson();
    }
    public static function getAll() {
        return Beer::all();
    }
    public static function create($request) {
        try {
            // die(print_r($request->all()));
            $request->validate([
                'brewery_id'  => 'required',
                'name'  => 'required',
                'description'  => 'required',
                'abv'  => 'required',
                'ibu'  => 'required',
                'filepath'  => 'required',
                'style_type'  => 'required',
                'category_type'  => 'required'
            ]);
            return Beer::create($request->all());
        }
        catch (\Exception $exception) {
            throw new UnprocessableEntityHttpException("Your input is incorrect"); 
        }
        
      }}

