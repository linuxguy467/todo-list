<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Route::get('/', 'IndexController@home')->name('app.welcome');
Route::get('/tasks', 'TasksController@index')->name('tasks.show');
Route::get('/dashboard', 'HomeController@index')->name('app.dashboard');

Auth::routes();
