<?php

Route::get('/', 'PagesController@welcome');

# Pages
Route::get('pages/about', 'TasksController@about');
Route::get('pages/faq', 'TasksController@faq');
Route::get('pages/contact', 'TasksController@contact');

Route::group(['middleware' => 'auth'], function() {

	# Tasks
	Route::get('tasks', 'TasksController@index');
	Route::get('tasks/create', 'TasksController@create');

	# Task views
	Route::get('tasks/active', 'TasksController@active');
	Route::get('tasks/completed', 'TasksController@completed');
	Route::get('tasks/all', 'TasksController@all');
	Route::get('tasks/clear', 'TasksController@clear');

	Route::post('tasks/{id}/delete', 'TasksController@destroy');
	Route::get('tasks/{id}', 'TasksController@show');
	Route::post('tasks', 'TasksController@store');
	Route::get('tasks/{id}/edit', 'TasksController@edit');
	Route::post('tasks/{id}', 'TasksController@update');

});

# Users authentication routes
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

# Users Registration routes
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');
