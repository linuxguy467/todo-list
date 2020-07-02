<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'IndexController@home');
Route::get('/tasks', 'TasksController@index')->name('tasks.show');
