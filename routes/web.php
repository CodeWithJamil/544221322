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
    return view('home.home');
});
Route::get('/Aether', function () {
    return view('home.deskripsiAether');
});
Route::get('/dataAether', function () {
    return view('home.dataAether');
});
Route::get('/Isagi', function () {
    return view('home.deskripsiIsagi');
});
Route::get('/cart', function () {
    return view('cart.cart');
});
