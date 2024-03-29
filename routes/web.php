<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

//BACK OFFICE AREA PUBBLICA
Route::get('/', function () {
    return view('welcome');
});

//BACK OFFICE AREA PUBBLICA - AUTH
Auth::routes();

//BACK OFFICE AREA PRIVATA
Route::middleware('auth')
->namespace('Admin')
->name('admin.')
->prefix('admin')
->group(function(){
    Route::get('/home', 'HomeController@index')->name('home'); 
    Route::resource('posts', 'PostController');
});


//FRONT OFFICE
Route::any('{any?}', function(){
    return view('guest.home');
})->where('any', '.*');

