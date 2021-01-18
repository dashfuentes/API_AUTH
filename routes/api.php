<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//BOOKS
Route::get('books', 'BookController@index');
Route::get('books/{id}', 'BookController@show');
Route::post('books', 'BookController@store');
Route::put('books/{id}', 'BookController@update');
Route::delete('books/{id}', 'BookController@delete');


//Route::post('/login', 'LoginController@login')->name('login');

Route::group([
    'prefix' => 'auth'
], function () {
    Route::post('login', 'LoginController@login');
    Route::post('signup', 'LoginController@signUp');

     Route::group([
      'middleware' => 'auth:api'
    ], function() {
        Route::get('logout', 'LoginController@logout');
        Route::get('user', 'LoginController@user');
    }); 
});