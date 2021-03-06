<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Route::get('/', 'IndexController@home')->name('app.welcome');
//Route::get('/tasks', 'TasksController@index')->name('tasks.show');
Route::get('/tasks', 'TasksController@index')->name('app.dashboard');
Route::post('/tasks', 'TasksController@store')->name('tasks.store');
Route::get('/tasks/create', 'TasksController@create')->name('tasks.create');

Auth::routes();
