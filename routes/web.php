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
    return view('home');
});

Route::get('/characters', function () {
    return view('characters');
});

/* Comics */
Route::get('/comics', function () {
    $array_comics = config('comics');
    $data = [
        'comics' => $array_comics
    ];
    return view('comics', $data);
});

Route::get('/movies', function () {
    return view('movies');
});

