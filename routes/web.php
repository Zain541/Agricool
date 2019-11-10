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

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('layouts.pages.index');
});


Route::get('/mail', function () {
    return view('email.contactmail');
});

Route::prefix('home')->group(function () {
    Route::get('/', 'HomeController@home')->name('home');
    Route::get('/project/details', 'HomeController@work')->name('work');

});


Route::prefix('agreement')->group(function () {

    Route::get('/', 'AggrementController@agreement')->name('agreement');
    Route::get('/form', 'AggrementController@form')->name('form');
    Route::post('/store', 'AggrementController@store')->name('aggrement.store');



});

Route::group(
	[
		'prefix' => 'admin',
		'namespace' => 'Admin',
	], function () {

		Route::group(
		[
			'middleware' => 'guest',
		], function () {
			Route::get('/register','Auth\RegisterController@showAdminRegisterForm')->name('admin.showregisterform');

			Route::post('/register', 'Auth\RegisterController@register')->name('admin.register');

			Route::get('/login', 'Auth\LoginController@showAdminLoginForm')->name('admin.showregisterform');

			Route::post('/login', 'Auth\LoginController@login')->name('admin.login');
		});


		Route::group(
		[
			'middleware' => 'admin',
		], function () {
				Route::get('home','HomeController@index')->name('admin.home');
				Route::resource('project','ProjectController');
		});
	});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
