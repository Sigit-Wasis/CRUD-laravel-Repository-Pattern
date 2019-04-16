<?php

// Laravel Default Index Page

Route::get('/', function () {
    return view('welcome');
});

// Task Routes
Route::group(['prefix' => 'tasks'], function () {
	Route::get('/{id?}', [
	    'uses' => 'TaskController@getAllTasks',
	    'as' => 'task.index'
	]);

	Route::get('/tasks/create', [
	    'uses' => 'TaskController@create',
	    'as' => 'task.create'
	]);

	Route::post('store', [
	    'uses' => 'TaskController@postStoreTask',
	    'as' => 'task.store'
	]);

	Route::get('/tasks/{id}/edit', [
	    'uses' => 'TaskController@edit',
	    'as' => 'task.edit'
	]);

	Route::patch('{id}/update', [
	    'uses' => 'TaskController@postUpdateTask',
	    'as' => 'task.update'
	]);

	Route::delete('{id}/delete', [
	    'uses' => 'TaskController@postDeleteTask',
	    'as' => 'task.delete'
	]);
});
