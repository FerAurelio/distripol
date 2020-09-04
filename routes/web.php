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

Route::get('/', function () {
    return view('index');
});


Route::get('/', function () {
    return view('/layouts/master');
});

Route::get('/home', 'HomeController@directory')->name('home');

Route::get('/productos',  'IndexController@index')->name('productos');

Route::get('/',  'IndexController@index')->name('productos');

Route::get('/servicios',  'ServiciosController@directory')->name('servicios');

Route::get('/contacto',  'ContactoController@directory')->name('contacto');

Route::get('/cotizar',  'CotizarController@directory')->name('cotizar');