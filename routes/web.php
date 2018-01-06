<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


Route::group(['middleware' => 'auth'], function(){
    Route::get('/', function () {
        return view('frontpage');
    });
    //Route::get('/notebooks', ['as' => 'notebooks.index', 'uses' => 'NotebooksController@index']);
    //Route::post('/notebooks', 'NotebooksController@store');
    //Route::get('/notebooks/create', 'NotebooksController@create');
    //Route::get('/notebooks/{notebooks}', 'NotebooksController@show')->name('notebooks.show');
    //Route::get('/notebooks/{notebooks}/edit', 'NotebooksController@edit')->name('notebooks.edit');
    //Route::put('/notebooks/{notebooks}', 'NotebooksController@update');
    //Route::delete('/notebooks/{notebooks}', 'NotebooksController@destroy');

    Route::resource('notebooks', 'NotebooksController');
    Route::resource('notes', 'NotesController');

    Route::get('notes/{notebookId}/createNote', 'NotesController@createNote')->name('notes.createNote');
});

Auth::routes();

//Route::get('/home', 'HomeController@index');
