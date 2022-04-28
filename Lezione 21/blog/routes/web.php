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

Route::view('helloView','hello');

//Route::get('/helloCon','HelloController@hello');


Route::get('/utente/{user}', function ($user) {
    return 'Raff';
});

Route::get('/orders/{action}/{id}', function ($action, $id) {
    return $action . ' ' . $id ;
});

Route::get('/', function () {
    return view('welcome');
});


Route::get('/hello', function () {
    return "Hello World";
});



