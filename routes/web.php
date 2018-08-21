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
})->name('inicio');

Route::get('/quienes-somos', function () {
    return view('nosotros');
})->name('nosotros');

Route::get('/servicios', function () {
    return view('servicios');
})->name('servicios');

Route::get('/detalle-de-los-servicios', function () {
    return view('servicios-detallados');
})->name('servicios-detallados');

Route::get('/autoevalue', function () {
    return view('autoevalue');
})->name('autoevalue');

Route::get('/contacto', [
	'uses' => 'ContactMessageController@create'
])->name('contacto');

Route::post('/contacto', [
	'uses' => 'ContactMessageController@store',
	'as' => 'contact.store'
]);