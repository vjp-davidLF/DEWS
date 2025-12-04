<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/users', function () {
    return view('usuarios');
}) -> name('usuarios');


/* http://localhost/datos/ */

Route::view('datos', 'usuarios');

Route::get('cliente/{id}', function($id) {
    return('Cliente con el id: ' . $id);
});

Route::get('cliente/{id?}', function($id = 1) {
    return ('Cliente con el id: ' . $id);
}) -> where('id', '[0-9]+');

Route::view('datos', 'usuarios', ['id' => 5446]);