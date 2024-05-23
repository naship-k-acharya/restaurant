<?php

use Illuminate\Routing\Route as RoutingRoute;
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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/','RestoController@index');
use App\Http\Controllers\RestoController;

Route::namespace('App\Http\Controllers')->group(function () {
    Route::get('/', 'RestoController@index');
});
Route::namespace('App\Http\Controllers')->group(function () {
    Route::get('/list', 'RestoController@list');
});
Route::namespace('view')->group(function () {
    Route::view('/add', 'add');
});
Route::namespace('App\Http\Controllers')->group(function () {
    Route::post('/add', 'RestoController@add');
});
Route::namespace('App\Http\Controllers')->group(function () {
    Route::get('/delete/{id}', 'RestoController@delete');
});

Route::namespace('view')->group(function () {
    Route::view('/register', 'register');
});
Route::namespace('App\Http\Controllers')->group(function () {
    Route::post('/register', 'RestoController@register');
});


Route::namespace('view')->group(function () {
    Route::view('/login', 'login');
});
Route::namespace('App\Http\Controllers')->group(function () {
    Route::post('/login', 'RestoController@login');
});
Route::namespace('App\Http\Controllers')->group(function () {
Route::post('/logout', 'RestoController@logout');
});
Route::namespace('view')->group(function () {
    Route::view('/search', 'search');
});