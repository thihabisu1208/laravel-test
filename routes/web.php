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

Route::get('/',  'PagesController@home');
Route::get('/about',  'PagesController@about');
Route::get('/contact',  'PagesController@contact');

/*
    GET     /projects           (index)
    GET     /projects/create    (create)
    GET     /projects/1         (show)
    POST    /projects           (store)
    GET     /projects/1/edit    (edit)
    PATCH   /projects/1         (update)
    DELETE  /projects/1         (destroy)

Route::get('/projects', 'ProjectsController@index'); // Get All Projects
Route::get('/projects/create', 'ProjectsController@create'); // Create Form
Route::post('/projects', 'ProjectsController@store'); // Create New Projects
Route::get('/projects/{project}', 'ProjectsController@show'); // Show Details of Selected Project
Route::get('/projects/{project}/edit', 'ProjectsController@edit'); // Edit the Selected Project
Route::patch('/projects/{project}', 'ProjectsController@update'); // Update the Selected Project
Route::delete('/projects/{project}', 'ProjectsController@destroy'); // Delete the Selected Project

*/

Route::resource('projects', 'ProjectsController'); // Do All of the Above

Route::post('/projects/{project}/tasks', 'ProjectTasksController@store');
Route::patch('/tasks/{task}', 'ProjectTasksController@update');