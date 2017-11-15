<?php

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
Route::get('/contact_us', function () {
    return view('front-end.contact_us');
});
Route::get('/gallary', function () {
    return view('front-end.gallary');
});
Route::get('/home', function () {
    return view('front-end.index');
});
Route::get('/tours', function () {
    return view('front-end.tours');
});

Route::get('/', function () {
    return view('front-end.index');
});

Auth::routes();
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/admin/dashboard', 'HomeController@index');
