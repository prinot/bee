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
    return view('inicio');
});

Route::get('gracias', function () {
    return view('gracias');
});

Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return "Cache is cleared";
});

// Authentication Routes...
Auth::routes();

Route::get('envio', 'EnviosController@index')
         ->name('envio');

Route::post('envio', 'EnviosController@store')
         ->name('envio');
         
route::get('envio-list-pdf', 'EnviosController@exportPdf')->name('envios.pdf');

route::get('envio-list-excel', 'EnviosController@exportExcel')->name('envios.excel');




Route::get('/home', 'HomeController@index')->name('home');


