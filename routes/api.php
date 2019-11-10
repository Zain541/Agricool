<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group([

    'prefix' => 'user',
    'namespace' => 'Api\User',

], function () {

	/* ====================== Auth for Admin ====================== */
    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');
    Route::post('register', 'AuthController@register');
});

Route::group([

    'prefix' => 'investor',
    'namespace' => 'Api\Investor',

], function () {

	/* ====================== Auth for Admin ====================== */
    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');
    Route::post('register', 'AuthController@register');

    /* ====================== Investment for Admin ====================== */


     Route::get('/projects', 'ProjectController@index');

	Route::group([

    	'prefix' => 'investment',

	], function () {


          Route::post('/make', 'InvestmentController@store');
          Route::post('/insertcard', 'InvestmentController@insertcard');
    	  Route::get('/{investor}', 'InvestmentController@index');
	});
});
