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
    return view('welcome');
});

// 1) saluta tutti gli utenti in inglese
Route::get('/helloAll', function () {
    return view('helloAll');
});

// 2) saluta utente per nome con variabile
Route::get('helloYou', function () {
    $name = 'Vincenzo';
    return view('helloYou', compact('name'));
});

// 3) saluta utente per nome in nuova route ma con stessa variabile (nome diverso) nella stessa view
Route::get('helloYou2', function () {
    $name = 'Gianni';
    return view('helloYou', compact('name'));
});

//Controller route

// 1) saluta tutti in spagnolo

Route::get('holaTodo', 'HolaController@holaTodos');

// 2) saluta tutti in spagnolo

Route::get('holaTu', 'HolaController@holaTu');
