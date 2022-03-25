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

if (env('REDIRECT_HTTPS') === true) {
    URL::forceScheme('https');
}

Route::get('/', 'HomeController@index')->name('home');
Route::get('media', 'HomeController@media')->name('media');
Route::get('stats', 'HomeController@stats')->name('stats');
Route::get('contact', 'MailController@sendEmail')->name('contact');
