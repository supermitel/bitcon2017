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
    return view('main');
});

Route::get('/sponsori', function () {
    return view('pages.sponsori');
});
Route::get('/inscriete', function () {
    return view('pages.inscriete');
});
Route::get('/contact', function () {
    return view('pages.contact');
});
Route::get('/userProfile', function () {
    return view('pages.userProfile');
});

Route::get('/logIn', function () {
    return view('layouts.app');
});


Auth::routes();


Route::get('/home', 'HomeController@index');
