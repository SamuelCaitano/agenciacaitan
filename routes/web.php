<?php

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
Route::get('login', 'LoginController@index')->name('login');

Route::post('/login/signIn', 'LoginController@signIn');

Route::get('login/signOut', 'LoginController@signOut'); 

Route::get('/', function () {
    return view('index');
});

Route::get('/signUp', function () {
    return view('admin.signUp');
});

Route::get('/cursos', function () {
    return view('site/pages/couses');
});

Route::get('/o-que-e-dropshiping', function () {
    return view('site/pages/couses/drop/o-que-e-dropshiping');
});

Route::get('/como-o-dropshiping-funciona', function () {
    return view('site/pages/couses/drop/como-o-dropshiping-funciona');
});