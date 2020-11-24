<?php

namespace App\Http\Controllers;

use App\Models\Retailer;
use Symfony\Component\HttpKernel\Exception\UnprocessableEntityHttpException;

class RetailerController extends Controller
{
    //
    public static function getAll()
    {
        return Retailer::all()->toJson();
    }

    public static function create($request) {
        try {
            $validateData = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'city' => 'required'
            ]);
            return Retailer::create($request->all());
        }
        catch (\Exception $exception) {
            throw new UnprocessableEntityHttpException("Your input in incorrect"); 
        }
                
      
}}
