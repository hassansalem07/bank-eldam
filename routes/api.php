<?php

use App\Http\Controllers\apiAuthController;
use App\Http\Controllers\apiController;
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



Route::prefix("v1")->group(function(){
Route::get("/governorates" , [apiController::class , "governorates"]);
Route::get("/cities" , [apiController::class , "cities"]);
Route::get("/bloodTypes" , [apiController::class , "bloodTypes"]);
Route::get("/categories" , [apiController::class , "categories"]);
Route::get("/clients" , [apiController::class , "clients"]);
Route::get("/contacts" , [apiController::class , "contacts"]);
Route::get("/donations" , [apiController::class , "donation_requests"]);
Route::get("/notifications" , [apiController::class , "notifications"]);
Route::get("/posts" , [apiController::class , "posts"]);
Route::get("/settings" , [apiController::class , "settings"]);


Route::post("/register" , [apiAuthController::class , "register"]);
Route::post("/login" , [apiAuthController::class , "login"]);

});





