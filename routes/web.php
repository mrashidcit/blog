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



Route::get('/', function () {

    return view('child');
});

Route::get('user/show', [
    'uses' => 'UserController@show',
    'as' => 'user.show'
]);

Route::get('user/index', [
    'uses' => 'UserController@index',
    'as' => 'user.index'
]);


Route::get('home', function () {

    return response('Hello World', 200)
                ->header('Content-Type', 'text/plain')
                ->cookie('name', 'rashid', 1)
                ->cookie('username', 'mrashidcit', 1);

});

