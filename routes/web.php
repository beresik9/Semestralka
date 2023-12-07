<?php

use Illuminate\Support\Facades\Route;

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
    return view('Domov');
});

Route::get('/bicykles', function () {
    return view("BicykleView", ['bicykles'=>\App\Models\Bicykle::all()]);
});

Route::get('/bicykles/create', function () {
    return view("CreateBicyklesView", ['bicykel'=>null]);
});



Route::get('/Rezervacie', function () {
    return view('Rezervacie');
});

Route::get('/Kontakt', function () {
    return view('Kontakt');
});

Route::post('/bicykles', [\App\Http\Controllers\BicykleController::class, "store"]);

Route::post('/bicykles/update/{id}', [\App\Http\Controllers\BicykleController::class, 'update']);

Route::get('/bicykles/{id}', [\App\Http\Controllers\BicykleController::class, 'edit']);

Route::get('/bicykles/delete/{id}', [\App\Http\Controllers\BicykleController::class, 'delete']);

