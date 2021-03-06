<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/login/okta', 'Auth\LoginController@redirectToProvider')->name('login-okta');

Route::get('/login/okta/callback', 'Auth\LoginController@handleProviderCallback');

Route::get('/fluent-strings', 'NewFeatureController@fluentStrings');

Route::get('/http-wrapper', 'NewFeatureController@httpWrapper');

Route::get('/users/{user:id}/posts/{post:id}', 'NewFeatureController@getUserPost');
