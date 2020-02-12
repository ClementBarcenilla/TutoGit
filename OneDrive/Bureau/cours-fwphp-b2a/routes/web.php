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
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/admin',  function () {
    return view ('admin');
})->middleware('auth');


Route::middleware('admin')->group(function () {
    Route::get('/admin', function () {
        return view('admin');
    });

Route::resource('skills', 'SkillController');

<<<<<<< HEAD
Route::resource('rank', 'AdminController');
=======
Route::resource('admins', 'AdminController');

Route::resource('users', 'UserController');
>>>>>>> Last commit

});