<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\HomeController;
use App\Http\Controllers\Site\ToyController;
use App\Http\Controllers\Site\ProfileController;
use App\Http\Controllers\Site\LoginController;
use App\Http\Controllers\Site\RegisterController;

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


Route::get('/', 'App\Http\Controllers\Site\HomeController@getIndex')->name('site.home.getIndex');

Route::get('/toys', 'App\Http\Controllers\Site\ToyController@getIndex')->name('site.toys.getIndex');
Route::get('/toys/create', 'App\Http\Controllers\Site\ToyController@getCreate')->name('site.toys.getCreate');
Route::post('/toys/store', 'App\Http\Controllers\Site\ToyController@postStore')->name('site.toys.postStore');
Route::get('/toys/show', 'App\Http\Controllers\Site\ToyController@getShow')->name('site.toys.getShow');
Route::get('/toys/edit/{id}', 'App\Http\Controllers\Site\ToyController@getEdit')->name('site.toys.getEdit');
Route::post('/toys/update/{id}', 'App\Http\Controllers\Site\ToyController@postUpdate')->name('site.toys.postUpdate');
Route::get('/toys/delete/{id}', 'App\Http\Controllers\Site\ToyController@getDestroy')->name('site.toys.getDestroy');

Route::get('/profile', 'App\Http\Controllers\Site\ProfileController@getIndex')->name('site.profile.getIndex');

Route::get('/login', 'App\Http\Controllers\Site\LoginController@getIndex')->name('site.login.getIndex');
Route::post('/login', [LoginController::class, 'postLogin']);

Route::get('/register', 'App\Http\Controllers\Site\RegisterController@getIndex')->name('site.register.getIndex');

Route::get('/register/create', 'App\Http\Controllers\Site\RegisterController@getCreate')->name('site.register.getCreate');
Route::post('/register/store', 'App\Http\Controllers\Site\RegisterController@postStore')->name('site.register.postStore');
Route::get('/register/show', 'App\Http\Controllers\Site\RegisterController@getShow')->name('site.register.getShow');
Route::get('/register/edit/{id}', 'App\Http\Controllers\Site\Register\ToyController@getEdit')->name('site.register.getEdit');

// Route::get('/', function () {
//     return view('welcome');
// });
