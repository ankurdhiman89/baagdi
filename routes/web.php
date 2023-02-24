<?php

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
/*
Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home');
Route::post('/free_quote', 'App\Http\Controllers\HomeController@get_a_free_quote')->name('free_quote');
Route::post('/contact_us', 'App\Http\Controllers\HomeController@contact_us')->name('contact_us');


Route::get('sendbasicemail','App\Http\Controllers\MailController@basic_email');
Route::get('sendhtmlemail','App\Http\Controllers\MailController@html_email');
Route::get('sendattachmentemail','App\Http\Controllers\MailController@attachment_email');
