<?php

use App\Http\Controllers\resController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SinglController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


/// route for invoke controller :

Route::get('/userForm', function(){
    return view('form');
})->name('userRout');

Route::any('/user', SinglController::class)->name('send');


Route::resource('/promotions', resController::class);

// Route::controller(resController::class)->group(function(){
//     Route::get('promo1/{id}', 'show');
//     Route::get('promo2', 'index');
// });


