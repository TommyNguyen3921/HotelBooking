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


/*
Route::get('/hello', function () {
    return 'welcome';
    
});

Route::get('/users/{id}', function ($id) {
    return 'This is user ' . $id;
    
});
*/
Route::get('/', 'PagesController@index');
Route::get('/booking', 'PagesController@booking');
Route::get('/about', 'PagesController@about');

Route::resource('posts', 'PostsController');

