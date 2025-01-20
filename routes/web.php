<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/galleri', function () {
    return view('galleri');
});
Route::get('/mh', function () {
    return view('mh');
});
Route::get('/qurban', function () {
    return view('qurban');
});
Route::get('/healing', function () {
    return view('healing');
});
Route::get('/ramadhan', function () {
    return view('ramadhan');
});
