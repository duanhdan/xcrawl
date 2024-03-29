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
	Route::get('targets/{target}/fetch', 'TargetController@fetch')->name('targets.fetch');

	Route::resource('rules', 'RuleController');
	Route::get('rules/getSourceCategories/{id}', 'RuleController@getSourceCategories');
	Route::get('rules/getTargetCategories/{id}', 'RuleController@getTargetCategories');

	Route::resource('posts', 'PostController');
	Route::get('posts/{post}/approve', 'PostController@approve')->name('posts.approve');
	Route::get('posts/{link}/create', 'PostController@create')->name('posts.create');

	Route::resource('links', 'LinkController');
	Route::get('links/post', 'LinkController@post')->name('links.post');

	Route::get('settings/targets/index', 'SettingTargetController@index')->name('settings.targets.index');
	Route::get('settings/targets/{target}/edit', 'SettingTargetController@edit')->name('settings.targets.edit');
	Route::put('settings/targets/{target}', 'SettingTargetController@update')->name('settings.targets.update');
});