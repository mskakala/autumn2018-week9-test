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

// Route::get('/', function () {
//    return view('welcome');
// });


// HOMEPAGE -> LOGIN ()/ 
Route::get('/', function () {
    return view('homepage');
 });

 Route::get('/homepage', function () {
    return view('homepage');
 });

//Route::get('/homepage', 'HomeController@homepage');

//Pages
Route::get('hero/index', 'HeroController@index');

// Hero slug
Route::get('/hero/{hero_slug}', 'HeroController@show');



Auth::routes();
