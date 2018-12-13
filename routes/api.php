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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('login', 'UserController@login');
Route::post('register', 'UserController@register');

Route::group(['middleware' => 'auth:api'], function(){
Route::post('details', 'UserController@details');
});

//List books
Route::get('books', 'BookController@index');
//Get book by id
Route::get('book/{id}', 'BookController@show');


//List Authors
Route::get('authors', 'AuthorController@index');

//List Genres
Route::get('genres', 'GenreController@index');

//Get cover from book
Route::get('cover/{id}','CoverController@image');
