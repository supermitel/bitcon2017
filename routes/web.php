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

use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;

Route::get('/page/{pageName?}', function ($pageName=admin) {
    $pagePath = 'pages.'.$pageName;
    if (View::exists($pagePath)) {
        return view($pagePath);
    }
    else return view('pages.404');
});

Route::get('profile', function(){
    return view('userProfile', ['user' => Auth::user()]);
})->middleware('auth');



Auth::routes();


Route::get('/home', 'HomeController@index');
