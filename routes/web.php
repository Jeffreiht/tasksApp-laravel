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

Route::get('/', 'PageController@tasks')->name('taskList');
Route::get('/task/{task}', 'PageController@task')->name('task');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('tasks', 'Backend\TaskController')->middleware('auth')->except('show');
