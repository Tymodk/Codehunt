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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/generatecodes', 'HomeController@gentable');
Route::get('/huntstart', 'HomeController@huntstart');
Route::get('/hunt2', 'HomeController@hunt2');
Route::get('/huntstart/startlink1', 'HomeController@startlink1');
Route::get('/huntstart/startlink2', 'HomeController@startlink2');
Route::get('/huntstart/startlink3', 'HomeController@startlink3');
Route::get('/huntstart/startlink4', 'HomeController@startlink4');
Route::get('/huntstart/startlink5', 'HomeController@startlink5');
Route::get('/huntstart/startlink6', 'HomeController@startlink6');



Route::get('/code1/{id}', 'HomeController@code1found');
Route::get('/code2/{id}', 'HomeController@code2found');
Route::get('/code3/{id}', 'HomeController@code3found');
Route::get('/code4/{id}', 'HomeController@code4found');
Route::get('/code5/{id}', 'HomeController@code5found');


