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
    $name = Route::currentRouteName();
    //dd($name);
    return view('comics', compact('comics', 'comics_utyls', 'shop_utyls', 'dc_utyls', 'sites_utyls'));
})->name('comics');

Route::get('/app', function () {
    return view('app');
})->name('app');

