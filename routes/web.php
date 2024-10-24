<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('pages.home');
})->name("home-page");


Route::get('/comics', function () {
    $comics = config("db.comics");
    //dd($comics);

    return view('comics.index', compact("comics"));
})->name("comics.index");


Route::get('/comics/{id}', function ($id) {
    $comics = config("db.comics");
    if(!isset($comics[$id])){
        abort(404);
    }
    $comic = $comics[$id];


    return view('comics.show', compact("comic"));
})->name("comics.show");