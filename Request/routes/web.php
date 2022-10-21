<?php

use App\Http\Controllers\request_Controller;
use Illuminate\Support\Facades\Route;

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

Route::resource('/Form', request_Controller::class);
Route::post('Login_form', [request_Controller::class,'Login'])->name('Login_Form');
