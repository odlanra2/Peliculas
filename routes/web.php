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


//pantalla principal
Route::get('/', function () {
    return view();
});
//login usuario
Route::get('auth/login', function () {
    return 'login';
});
//logout usuario
Route::get('auth/logout', function () {
    return 'logout';
});
//listado de peliculas
Route::get('catalog', function () {
    return 'catalog';
});
//vista detalle pelicula
Route::get('catalog/show/{id}', function () {
    return 'catalog'.$id;
});

//añadir pelicula
Route::get('catalog/create', function () {
    return 'catalog create';
});

//modificar pelicula
Route::get('catalog/edit/{id}', function () {
    return 'catalog edit' .$id;
});