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

    return view('welcome');
})->name('welcome');

Route::get('users', [
    'as' => 'users',
    'uses' => 'UserController@index'
]);

Route::get('posts/{post}/comments/{comment?}', function($postId, $commentId=0){
    return 'Posts/' . $postId . '/comments/' . $commentId;
});

Route::get('user/{name}', function($name){

    return $name;

})->where('name', '[A-Za-z]+');

Route::get('user/{id}', function($id){

    //return $id;
    return redirect()->route('welcome');
})->where('id', '[0-9]+');

Route::get('user/{id}/{name}', function($id, $name){
    return $id . " " . $name;
})->where(['id', '[0-9]+', 'name' => '[a-z]+']);

Route::prefix('userinfo')->group(function(){

    Route::get('/', function(){
        return "User Info";
    });

    Route::get('profile', function(){
        return "User Profile";
    });



});
