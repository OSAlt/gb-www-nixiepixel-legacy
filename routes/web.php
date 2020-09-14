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

Route::get('/', 'HomeController@index')->name('home');
Route::get('stats', 'HomeController@stats')->name('stats');
Route::post('contact', 'MailController@sendEmail')->name('contact');
Route::get('nixie', 'HomeController@nixie')->name('nixie');
