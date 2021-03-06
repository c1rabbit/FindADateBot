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

Route::get('/', function () {
    return view('welcome');
});
// Route::resource('profiles', 'ProfileController', ['only' =>[
//   'show', 'store', 'update'
// ]]);
Route::get('profiles', 'ProfileController@index');
Route::get('profile/store', 'ProfileController@store');
Route::get('profile/show/{id}', 'ProfileController@show');
Route::get('profile/match/{profile_id}', 'ProfileController@match');
Route::get('profiles/recent', 'ProfileController@recent');
