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
    return redirect('/login');
});
Route::get('/see', 'AgentController@launch');
Route::patch('/generate-referal-code/{id}', 'AgentController@generatecode');
Route::get('/transactions', 'AgentController@transactions');
Route::get('/profile', 'AgentController@profile');
Route::get('/withdraw', 'AgentController@withdrawal');
Route::post('/withdrawal', 'AgentController@withdrawwbalance');
Route::patch('/updateprofile/{id}', 'ProfileController@updateprofile');
Route::patch('/updatepassword/{id}', 'ProfileController@updatepassword');
Route::get('/statement-of-account', 'AgentController@statementOfAccount');
Route::get('/account-statement', 'AgentController@generateStatementView');
Route::post('/generate/statement',array('as'=>'generate.print','uses'=>'AgentController@accountStatement'));
// Route::get('/customer/print-pdf', [ 'as' => 'customer.printpdf, 'uses' => 'CustomerController@printPDF']);

// Route::get('send_test_email', function(){
// 	Mail::raw('Sending emails with Mailgun and Laravel is easy!', function($message)
// 	{
// 		$message->subject('Mailgun and Laravel are awesome!');
// 		$message->from('fagbenrosamuel@gmail.com', 'Website Name');
// 		$message->to('dahmielaray11@gmail.com');
// 	});
// });


Auth::routes();
Auth::routes(['verify' => true]);
Route::get('/home', 'HomeController@index')->name('home');
