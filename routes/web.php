<?php


/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/', 'PublicController@index')->name('welcome');
//Route::view('/about', 'about');
Route::view('/about', 'about')->name('about');
Route::get('/contact', 'PublicController@contact')->name('contact');
Route::post('/contact', 'PublicController@contactPost')->name('contactPost');

//Route::get('/{name}/{age}', 'PublicController@index')->name('welcome');

Route::namespace('Admin')->prefix('admin')->group(function(){
  Route::get('users', 'UsersController@index')->middleware('CheckAge');
  Route::get('posts', function(){
    return route('welcome', ['name'=>'Jony', 'age'=>'24']);
  });
  //Route::get('/{name}/{age}', 'PublicController@index')->name('welcome');
  //Route::get('posts', 'Admin/UsersController@listUsers');
  Route::get('user/{userId}/{name}', 'PublicController@userinfo');


  /*Route::get('user/{userId}', function($userId){
    return 'user id:'.$userId;
  });*/
});
Route::redirect('/old', '/new', 301);

Route::get('posts', 'PublicController@displayPost')->name('displayPost');


/*
  Route::prefix('admin')->group(function(){
  Route::get('users', function(){
    return "admin users";
  });
  Route::get('posts', 'Admin/UsersController@listUsers');
  Route::get('user/{userId}/{name}', 'PublicController@userinfo');

  /*Route::get('user/{userId}', function($userId){
    return 'user id:'.$userId;
  });*/
//});
