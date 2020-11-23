<?php

use App\Http\Controllers\BeerController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\RetailerController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BreweryController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/brewery', function (Request $request) {
    return BreweryController::getAll($request->query('withBeers'));
});

Route::get('/retailer', [RetailerController::class, 'getAll']);
Route::get('/retailer/{retailerId}/menu', function($retailerId) {
    return MenuController::getMenuByRetailerId($retailerId);
});

Route::get('/beer', [BeerController::class, 'getAll']);
Route::get('/beer/{beerID}', function($beerID) {
    return BeerController::getBeerById($beerID);
});