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

Route::get('about', function () {
    return view('about');
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
Route::post('/users/logout', 'Auth\LoginController@userLogout')->name('user.logout');
/**/

//Route::get('/admin', 'AdminController@index')->name('admin.dashboard');

Route::prefix('admin')->group(function() {
	Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
	Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
	Route::get('/', 'AdminController@index')->name('admin.dashboard');
	Route::post('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
});

Route::get('reserve', function () {
    return view('reserve');
});

	/*routing biasa, jika belum logi sebagai admin, tetap masih bisa mengakses*/
	//Route::get('ka-input', function () {return view('admin.input-ka');});

	/*routing, jika belum login sebagai admin belum dapat mengakses*/
	Route::get('ka-input', 'AdminController@kainput')->name('admin.kainput');	
	Route::get('ka-list', 'AdminController@kalist')->name('admin.kalist');

	Route::get('berita-input', 'AdminController@beritainput')->name('admin.input');	
	Route::get('berita-list', 'AdminController@beritalist')->name('admin.kalist');
	Route::get('reserve-list', 'AdminController@reservelist')->name('admin.reservelist');