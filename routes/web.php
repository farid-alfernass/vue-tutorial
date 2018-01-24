<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('projects/list', 'ProjectsController@index');
Route::get('projects/create', 'ProjectsController@create');
Route::post('projects', 'ProjectsController@store');
