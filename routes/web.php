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

Route::get('login', function () {
    return view('login');
});

Route::get('register', function () {
    return view('register');
});

/*Routes baru hasil dari php artisan make:auth*/
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
/**/

//Route::get('/admin', 'AdminController@index')->name('admin.dashboard');

Route::prefix('admin')->group(function() {
	Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
	Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
	Route::get('/', 'AdminController@index')->name('admin.dashboard');
});

Route::get('reserve', function () {
    return view('reserve');
});