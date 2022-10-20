<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApprenantsController;
use App\Http\Controllers\ShowApprenants;

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
    return view('welcome');
});

Route::get('/Save_page', [ApprenantsController::class, 'select'])->name('getRoute');
Route::post('/insert', [ApprenantsController::class, 'insertData'])->name('insert');




// ///////// routing (Route Parammetre, csrf Protection) /////////// 

// Route::get('/request', function (){
//     return view('helloworld');
// });

// use Illuminate\Http\Request;

// Route::any('/user', function (Request $request) {
//     $name = $request->input("input");
//     return $name;
// });
// Route::get('hello', function(){
//     return view('helloworld');
// });

// // Route::get('/Promotion{id}', [ApprenantsController::class, 'addId']);
// Route::get('/apprenants/{name}', [ApprenantsController::class, 'addId']);


/// route for invoke controller :
// Route::get('/userForm', [ApprenantsController::class, 'show'])->name('userRout');
// Route::get('/user', ShowApprenants::class)->name('send');