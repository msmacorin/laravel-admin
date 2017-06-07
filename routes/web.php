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
    return redirect('home');
});

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', 'HomeController@index')->name('home');
    
    // profile
    Route::get('/profile', 'ProfileController@index')->name('profile');
    Route::post('/profile', 'ProfileController@save')->name('profile');
    Route::post('/profile/reset-password', 'ProfileController@sendResetLinkEmail');
});

// usando middleware
//Route::get('/foo', ['middleware' => ['auth', 'needsRole'], 'is' => 'admin', function() {
//        return 'Yes I am!';
//    }]);
