<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
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
Route::get('/viewposts/{id}', 'PostController@displayPost')->name('viewposts/id');

//Registrarse
Route::view('/register', 'register')->name('register');
Route::post('/register', 'UserController@createUser')->name('post_register');

//Perfil Usuario
Route::get('/editprofile', 'UserController@editProfile')->name('editProfile');
Route::post('/editprofile', 'UserController@post_editProfile')->name('post_editProfile');

//Login
Route::get('/login', 'LoginController@login')->name('login');
Route::post('/login', 'LoginController@checkLogin')->name('post_login');

//Crear Posts
Route::get('/post', 'PostController@createPost')->name('createpost');
Route::post('/post', 'PostController@post_createPost')->name('post_createpost');

//Editar Posts
Route::post('/editpost', 'PostController@post_editPost')->name('editPost');
Route::post('/updatepost', 'PostController@post_updatePost')->name('post_updatepost');
Route::view('/editpost', 'post_editPost')->name('post_editpost');

//Añadir comentario
Route::post('/viewposts', 'CommentController@saveComment')->name('addcomment');

//Logoutviewposts
Route::get('/logout', 'LoginController@logout')->name('logout');


//Administrar usuarios
Route::get('/viewusers', 'AdminController@viewUsers')->name('viewusers');

Route::get('/phpinfo', function () {
    phpinfo();
});

#Route::get('/login', 'LoginController@showLogin')->name('showlogin');

#Route::get('/login', 'LoginController@showLogin')->name('showlogin');

//Route::post('/login', 'LoginController@checkLogin')->name('checklogin');


//Route::get('/', 'LoginController@successLogin')->name('successlogin');
