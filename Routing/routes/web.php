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

// ///////// routing (Route Parammetre, csrf Protection) /////////// 

Route::get('/request', function (){
    return view('helloworld');
});


use Illuminate\Http\Request;

Route::any('/user', function (Request $request) {
    $name = $request->input("input");
    return $name;
});



