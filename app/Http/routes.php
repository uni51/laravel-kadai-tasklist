<?php

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/', 'TasksController@index');

// ユーザ登録
Route::get('signup', 'Auth\AuthController@getRegister')->name('signup.get');
Route::post('signup', 'Auth\AuthController@postRegister')->name('signup.post');

Route::resource('tasks', 'TasksController');
