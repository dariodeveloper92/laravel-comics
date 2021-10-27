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


/* Characters */
Route::get('/', function () {
    $array_comics = config('comics');
    $data = [
        'comics' => $array_comics
    ];
    return view('characters', $data);
});

/* Comics */
Route::get('/comics', function () {
    $array_comics = config('comics');
    $data = [
        'comics' => $array_comics
    ];
    return view('comics', $data);
});

/* Movies */
Route::get('/movies', function () {
    $array_comics = config('comics');
    $data = [
        'comics' => $array_comics
    ];
    return view('movies', $data);
});

