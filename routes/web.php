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


Route::get('/','SheetsController@sheet_confirm')
    ->middleware('auth');

// Route::get('/{id}','SheetsController@sheet_select');


Route::get('/profile','SheetsController@profile');

Route::get('/profile/{id}/edit','SheetsController@profile_edit');







Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/flat_ui','ComponentsController@parts');





// 認証画面
Route::group(['prefix' => 'auth','middleware' => 'auth.basic'], function() {

    Route::get('/test', 'TestController@view');
    

}); //})->middleware('auth.basic');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
