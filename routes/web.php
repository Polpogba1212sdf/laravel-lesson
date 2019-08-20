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

Auth::routes();
Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/tasks', 'TaskController@index');

Route::post('/task', 'TaskController@store');

Route::delete('/task/{task}', 'TaskController@destroy');

Route::get('/posts', 'PostAllController@index');

Route::get('/create-post', 'PostController@post');

Route::get('/task/{task}/subtask/', 'TaskController@createSubTask');

Route::post('/task/{task}/subtask/', 'TaskController@storeSubTask');

Route::post('/create-post', 'PostAllController@store');

Route::get('/update-post/{post}', 'PostController@update');

Route::post('/update-post/{post}', 'PostController@store');


Route::get('/delete-post/{post}', 'PostController@delete');

Route::get('/ajax', 'TaskController@ajax');




Route::get('/groups', 'StudentController@index');

Route::get('/add-group', 'GroupController@addGroup');

Route::post('/add-group', 'GroupController@storeGroup');

Route::get('/update-group/{group}', 'GroupController@updateGroup');

Route::post('/update-group/{group}', 'GroupController@storeUpdateGroup');

Route::get('/delete-group/{group}', 'GroupController@deleteGroup');


Route::get('/students', 'StudentController@index');
Route::get('/add-student', 'StudentController@addStudent');


