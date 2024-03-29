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
Route::group([
  'middleware' => [ 'localize' ], // Route translate middleware
  'prefix' => LaravelLocalization::setLocale()],
  function(){
Route::get('/', function () {
    return view('home');
})->name('home');
Route::get(LaravelLocalization::transRoute('routes.about'), function () {
    return view('about');
})->name('about');
});
