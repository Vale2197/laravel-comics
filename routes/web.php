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
    
    $comics = config('db.comics');

    $headerLinks = config('db.headerLinks');

    return view('home', compact('comics', 'headerLinks'));
});


Route::get('/buyComic/{id}', function ($id) {

    $comics = config('db.comics');
    
    $headerLinks = config('db.headerLinks');

    $comic = $comics[$id];

    return view('buyComic', compact('headerLinks', 'comics', 'comic'));
})->name('comic');

