<?php

use App\Http\Controllers\apprenants_controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Promotion_controller;

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

Route::get('/', function () {
    return view('home');
});

// Route::get('/Save_page', [ApprenantsController::class, 'select'])->name('getRoute');
// Route::post('/insert', [ApprenantsController::class, 'insertData'])->name('insert');

Route::resource('Promotion', Promotion_controller::class);

Route::get('search', [Promotion_controller::class, 'search']);
Route::get('search/{name}', [Promotion_controller::class, 'search']);

Route::get('Appre_Form/{id}', [apprenants_controller::class, 'form_apprenants'])->name('Form_appr');
Route::post('/insert', [apprenants_controller::class, 'Add_apprenants'])->name('add_appr');


