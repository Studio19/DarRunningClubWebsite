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


Route::get('/about', function () {
    return view('about');
});

Route::get('/DRC-blog', [
	'uses'=> 'NewsController@index',
	'as'  => 'blog'
	]);

Route::get('/contactus', function () {
    return view('contactus');
});

Route::get('/home', function () {
    return view('index');
});

Route::get('/races',[
	'uses' => 'RaceController@marathons',
	'as' => '/races',
	]);

Route::get('/',[
	'uses' => 'RaceController@index',
	'as' => '/',
	]);





Auth::routes();

Route::group(['middleware' => 'auth'], function () {

    Route::get('/admin', ['as' => 'admin', 'uses' => 'AdminsController@index']);

    Route::get('/edit/homepage', ['as' => 'homepage', 'uses' => 'AdminsController@homepage']);

    Route::get('/posts', ['as' => 'posts', 'uses' => 'AdminsController@showPosts']);

	Route::post('/{exp}',[
		'uses' => 'AdminsController@updateHomePage',
		'as' => 'homepageUpdate',
		]);

	Route::post('/update-runs',[
		'uses' => 'AdminsController@updateRuns',
		'as' => 'runsUpdate',
		]);

	Route::get('/{$title}',[
		'uses' => 'AdminsController@delete',
		'as' => 'destroy-run',
		]);


	Route::post('/{creater}/create/post',[
		'uses' => 'AdminsController@createPosts',
		'as' => 'createPost',
		]);

	Route::post('/admin/registration',[
		'uses' => 'AdminsController@registerAdmin',
		'as' => 'reg_admin',
		]);

	Route::post('/{id}/reply',[
	'uses' => 'NewsController@reply',
	'as' => 'reply',
	]);
    
});


Route::get('/home', 'HomeController@index')->name('home');
