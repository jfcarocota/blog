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

Route::get('/{name?}', 'HomeController@index');

Route::get('info', function(){
    echo "<a href='".route('contact')."'> ver contacto</a";
});

Route::get('contactanos/{name?}', function($name = 'invitado'){
    return "Hola $name, bienvenido a la página de contacto";
})->name('contact');
