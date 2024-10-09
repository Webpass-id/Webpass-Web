<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('about', function () {
    return view('about');
});
Route::get('service', function () {
    return view('service');
});
Route::get('promo', function () {
    return view('promo');
});
Route::get('cat', function () {
    return view('cat');
});
Route::get('premium', function () {
    return view('premium');
});
Route::get('service', function () {
    return view('service');
});
Route::get('jok', function () {
    return view('jok');
});

Route::get('galeri', function () {
    return view('galeri');
});
Route::get('super', function () {
    return view('promo/super');
});
Route::get('promo1', function () {
    return view('promo/promo1');
});
Route::get('promo2', function () {
    return view('promo/promo2');
});
Route::get('promo3', function () {
    return view('promo/promo3');
});
