<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ZbrojKontroler;
use App\Http\Controllers\OsobaController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
    return view('welcome');
});



Route::get("/sum", [ZbrojKontroler::class, "add"]);

Route::get("/form", [ZbrojKontroler::class, "prikazi"]);

Route::post("/zbroji", [ZbrojKontroler::class, "zbroji"]);

//slijede rute za osobe iz baze
Route::get("/form_osoba", [OsobaController::class, "form"]);
Route::post("/store", [OsobaController::class, "store"]);
Route::get("/show", [OsobaController::class, "show"]);
