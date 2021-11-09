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
    $data = config("comics");
    $series = [
        'series' => $data
    ];
    // dd($series);
    return view('home', $series );
})->name("home");


Route::get('/cardSerie/{id}', function ($id) {
    $data = config("comics");
    $serie = $data[$id];
    // dd($serie);
    return view('cardSerie', $serie);
})->name("serie");

// Route::get('/cardSerie/0', function () {
//     $data = config("comics");
//     $series = $data[0];
//     // dd($series);
//     return view('cardSerie', $series);
// })->name("serie");

