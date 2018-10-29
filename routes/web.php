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

Route::get('/hero/{hero_slug}', 'HeroController@show');
// but cannot find class: Hero..
// ! done -> needed a model ;-)

Auth::routes();
