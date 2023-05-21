<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/car', function (Request $request) {
    if ($request->price == 'true' && $request->mileage == 'false' && $request->year == 'false') {
        return DB::select(DB::raw(App\Models\Car::PriceOnly));
    } elseif ($request->price == 'false' && $request->mileage == 'true' && $request->year == 'false') {
        return DB::select(DB::raw(App\Models\Car::MileageOnly));
    } elseif ($request->price == 'false' && $request->mileage == 'false' && $request->year == 'true') {
        return DB::select(DB::raw(App\Models\Car::YearOnly));
    } elseif ($request->price == 'true' && $request->mileage == 'true' && $request->year == 'false') {
        return DB::select(DB::raw(App\Models\Car::PriceMileage));
    } elseif ($request->price == 'true' && $request->mileage == 'false' && $request->year == 'true') {
        return DB::select(DB::raw(App\Models\Car::PriceYear));
    } elseif ($request->price == 'false' && $request->mileage == 'true' && $request->year == 'true') {
        return DB::select(DB::raw(App\Models\Car::YearMileage));
    } elseif ($request->price == 'true' && $request->mileage == 'true' && $request->year == 'true') {
        return DB::select(DB::raw(App\Models\Car::PriceYearMileage));
    } 

    return App\Models\Car::all();
});