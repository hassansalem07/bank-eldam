<?php

use App\Http\Controllers\apiAuth;
use App\Http\Controllers\apiAuthController;
use App\Models\Category;
use App\Http\Resources\categoryResource;
use App\Http\Resources\cityResourceCollection;
use App\Http\Resources\governorateResourceCollection;
use App\Models\City;
use App\Models\Governorate;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});



Route::get("/Categories/{id}" , function($id){

    $categories = Category::findOrFail($id);
    $cats = new categoryResource($categories);
    return $cats;
});

Route::get("/cities" , function(){

    $cities = City::all();
    return new cityResourceCollection( $cities);

});


Route::get("/governorate/{id}" , function($id){

    $governorate = Governorate::findOrFail($id);
    $gov = new categoryResource($governorate);
    return $gov;
});

Route::get("/governorate" , function(){

    $governorate = Governorate::all();
    return new governorateResourceCollection($governorate);

});


Route::post("/register" , [apiAuthController::class , "register"]);
Route::post("/login" , [apiAuthController::class , "login"]);

