<?php

/*
|--------------------------------------------------------------------------
| Web Routesgeneratecode
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
Route::get('/see', 'AgentController@launch');
Route::patch('/generate-referal-code/{id}', 'AgentController@generatecode');
Route::get('/transactions', 'AgentController@transactions');

Auth::routes();
// Auth::routes(['verify' => true]);
Route::get('/home', 'HomeController@index')->name('home');
