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

Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', 'HomeController@index');
    Route::get('contacts', 'ContactController@index')->name('contacts.index');
    Route::get('contacts/create', 'ContactController@create')->name('contacts.create');
    Route::post('contacts', 'ContactController@store')->name('contacts.store');
    Route::get('contacts/{id}/edit', 'ContactController@edit')->name('contacts.edit');
    Route::put('contacts/{id}', 'ContactController@update')->name('contacts.update');
    Route::delete('contacts/{id}', 'ContactController@destroy')->name('contacts.destroy');

    Route::get('edit-password', 'EditPasswordController@index')->name('password.edit');
    Route::get('update-password', 'UpdatePasswordController@index')->name('password.update');

});

Route::group([
    'middleware' => 'auth',
    'prefix' => 'datatables'
    ], function () {
    Route::get('contacts', 'DatatablesController@getContacts');
});