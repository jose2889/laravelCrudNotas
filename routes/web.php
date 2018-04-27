<?php

use App\Note;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contacto', function () {
    return view('contacto');
});

Route::get('/notes', 'NotesController@index');
Route::post('/notes', 'NotesController@store');

Route::get('/notes/create', 'NotesController@create');

Route::get('/notes/{note}', 'NotesController@show');
Route::get('/notes/{note}/edit', 'NotesController@edit');
Route::put('/notes/{note}', 'NotesController@update');
Route::delete('/notes/{note}', 'NotesController@destroy');

// Route::resource('almacen/categoria','UserController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
