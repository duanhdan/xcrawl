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

Route::get('/', 'HomeController@index')->name('home');

Auth::routes();

Route::middleware(['auth'])->group(function () {
	Route::resource('workspaces', 'WorkspaceController');
	Route::delete('workspaces/{workspace}/user/{user}', 'WorkspaceController@user')->name('workspaces.user');
	Route::put('workspaces/{workspace}/user/{user}/role/{role}', 'WorkspaceController@setCurrent')->name('workspaces.setCurrent');

	Route::resource('sources', 'SourceController');
	Route::resource('targets', 'TargetController');
	Route::resource('rules', 'RuleController');
	Route::resource('posts', 'PostController');
	Route::resource('links', 'PostController');
});