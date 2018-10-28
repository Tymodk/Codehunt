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
Route::get('/generatecodes', 'CodeController@gentable');
Route::get('/huntstart', 'CodeController@huntstart');
Route::get('/hunt2', 'CodeController@hunt2');
Route::get('/huntstart/startlink1', 'CodeController@startlink1');
Route::get('/huntstart/startlink2', 'CodeController@startlink2');
Route::get('/huntstart/startlink3', 'CodeController@startlink3');
Route::get('/huntstart/startlink4', 'CodeController@startlink4');
Route::get('/huntstart/startlink5', 'CodeController@startlink5');
Route::get('/huntstart/startlink6', 'CodeController@startlink6');



Route::get('/code1/{id}', 'CodeController@code1found');
Route::get('/code2/{id}', 'CodeController@code2found');
Route::get('/code3/{id}', 'CodeController@code3found');
Route::get('/code4/{id}', 'CodeController@code4found');
Route::get('/code5/{id}', 'CodeController@code5found');


