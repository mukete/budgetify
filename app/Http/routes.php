<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('master');
});

Route::get('/departments', function () {
    return view('department');
});

Route::get('/rbudget', function () {
    return view('rbudget');
});

Route::get('/abudget', function () {
    return view('abudget');
});


Route::get('/category', function () {
    return view('category');
});
