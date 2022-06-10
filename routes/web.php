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

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/', function () {
    $comics = config('db.comics');
    $comics_utyls = config('db.comics_utyls');
    $shop_utyls = config('db.shop_utyls');
    $dc_utyls = config('db.dc_utyls');
    $sites_utyls = config('db.sites_utyls');
    //dd($comics);
    return view('home', compact('comics', 'comics_utyls', 'shop_utyls', 'dc_utyls', 'sites_utyls'));
})->name('home');


Route::get('/characters', function () {
    $comics = config('db.comics');
    $comics_utyls = config('db.comics_utyls');
    $shop_utyls = config('db.shop_utyls');
    $dc_utyls = config('db.dc_utyls');
    $sites_utyls = config('db.sites_utyls');
    $name = Route::currentRouteName();
    //dd($name);
    return view('characters', compact('comics', 'comics_utyls', 'shop_utyls', 'dc_utyls', 'sites_utyls'));
})-> name('characters');

Route::get('/comics', function () {
    $comics = config('db.comics');
    $comics_utyls = config('db.comics_utyls');
    $shop_utyls = config('db.shop_utyls');
    $dc_utyls = config('db.dc_utyls');
    $sites_utyls = config('db.sites_utyls');
    return view('comics.index', compact('comics', 'comics_utyls', 'shop_utyls', 'dc_utyls', 'sites_utyls'));
   
})->name('comics.index');

Route::get('/comics/{id}', function ($id) {
    $comics = config('db.comics');
    $comics_utyls = config('db.comics_utyls');
    $shop_utyls = config('db.shop_utyls');
    $dc_utyls = config('db.dc_utyls');
    $sites_utyls = config('db.sites_utyls');
    //dd($id);

    if ($id >= 0 && is_numeric($id) && $id < count($comics)) {
        $figure = $comics[$id];
        return view('comics.show', compact('comics', 'comics_utyls', 'shop_utyls', 'dc_utyls', 'sites_utyls', 'figure'));
    } else {
        abort(404);
    }
})->name('comics.show');

Route::get('/movies', function () {
    $comics = config('db.comics');
    $comics_utyls = config('db.comics_utyls');
    $shop_utyls = config('db.shop_utyls');
    $dc_utyls = config('db.dc_utyls');
    $sites_utyls = config('db.sites_utyls');
    return view('movies', compact('comics', 'comics_utyls', 'shop_utyls', 'dc_utyls', 'sites_utyls'));
})->name('movies');

Route::get('/tv', function () {
    $comics = config('db.comics');
    $comics_utyls = config('db.comics_utyls');
    $shop_utyls = config('db.shop_utyls');
    $dc_utyls = config('db.dc_utyls');
    $sites_utyls = config('db.sites_utyls');
    return view('tv', compact('comics', 'comics_utyls', 'shop_utyls', 'dc_utyls', 'sites_utyls'));
})->name('tv');

Route::get('/games', function () {
    $comics = config('db.comics');
    $comics_utyls = config('db.comics_utyls');
    $shop_utyls = config('db.shop_utyls');
    $dc_utyls = config('db.dc_utyls');
    $sites_utyls = config('db.sites_utyls');
    return view('games', compact('comics', 'comics_utyls', 'shop_utyls', 'dc_utyls', 'sites_utyls'));
})->name('games');

Route::get('/collectibles', function () {
    $comics = config('db.comics');
    $comics_utyls = config('db.comics_utyls');
    $shop_utyls = config('db.shop_utyls');
    $dc_utyls = config('db.dc_utyls');
    $sites_utyls = config('db.sites_utyls');
    return view('collectibles', compact('comics', 'comics_utyls', 'shop_utyls', 'dc_utyls', 'sites_utyls'));
})->name('collectibles');

Route::get('/videos', function () {
    $comics = config('db.comics');
    $comics_utyls = config('db.comics_utyls');
    $shop_utyls = config('db.shop_utyls');
    $dc_utyls = config('db.dc_utyls');
    $sites_utyls = config('db.sites_utyls');
    return view('videos', compact('comics', 'comics_utyls', 'shop_utyls', 'dc_utyls', 'sites_utyls'));
})->name('videos');

Route::get('/fans', function () {
    $comics = config('db.comics');
    $comics_utyls = config('db.comics_utyls');
    $shop_utyls = config('db.shop_utyls');
    $dc_utyls = config('db.dc_utyls');
    $sites_utyls = config('db.sites_utyls');
    return view('fans', compact('comics', 'comics_utyls', 'shop_utyls', 'dc_utyls', 'sites_utyls'));
})->name('fans');

Route::get('/news', function () {
    $comics = config('db.comics');
    $comics_utyls = config('db.comics_utyls');
    $shop_utyls = config('db.shop_utyls');
    $dc_utyls = config('db.dc_utyls');
    $sites_utyls = config('db.sites_utyls');
    return view('news', compact('comics', 'comics_utyls', 'shop_utyls', 'dc_utyls', 'sites_utyls'));
})->name('news');

Route::get('/shop', function () {
    $comics = config('db.comics');
    $comics_utyls = config('db.comics_utyls');
    $shop_utyls = config('db.shop_utyls');
    $dc_utyls = config('db.dc_utyls');
    $sites_utyls = config('db.sites_utyls');
    return view('shop', compact('comics', 'comics_utyls', 'shop_utyls', 'dc_utyls', 'sites_utyls'));
})->name('shop');




