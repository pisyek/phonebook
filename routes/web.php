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

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('contacts', 'ContactController@index')->name('contacts.index');
Route::get('contacts/create', 'ContactController@create')->name('contacts.create');
Route::post('contacts', 'ContactController@store')->name('contacts.store');

Route::group(['prefix' => 'datatables'], function () {
    Route::get('contacts', 'DatatablesController@getContacts');
});