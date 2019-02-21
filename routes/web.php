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
    return view('welcome');
});


//JH de aqui para abajo me lo creo automaticamente el auth
//......php artisan make::auth y deberia funcionar no se si hay que conectarlo
//a una base de datos o ya lo hace solo no lo se???????
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
