<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
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

//Incio
Route::get('/', 'HomeController@home')->name('home');

//Ver Posts
Route::get('/viewposts', 'PostController@viewPosts')->name('viewposts');
Route::get('/viewposts/{id}', 'PostController@displayPost')->name('displaypost');

//Registrarse
Route::view('/register', 'register')->name('register');
Route::post('/register', 'RegisterController@createUser')->name('createUser');


//Login
Route::view('/login', 'login')->name('login');
Route::post('/login', 'LoginController@checkLogin')->name('checklogin');

//Crear Posts
Route::view('/formpost', 'formpost')->name('formpost')->middleware('auth');
Route::post('/formpost', 'PostController@formPost')->name('formpost')->middleware('auth');


//Logout
Route::get('/logout', 'LoginController@logout')->name('logout');



#Route::get('/login', 'LoginController@showLogin')->name('showlogin');

#Route::get('/login', 'LoginController@showLogin')->name('showlogin');

//Route::post('/login', 'LoginController@checkLogin')->name('checklogin');


//Route::get('/', 'LoginController@successLogin')->name('successlogin');
