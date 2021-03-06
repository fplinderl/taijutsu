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

Route::get('/as2022', function () {
    return view('as2022');
});
Route::get('/', function () {
    return view('list');
});
Route::get('/as3100', function () {
    return view('as3100');
});
Route::get('/as3000', function () {
    return view('as3000');
});
Route::get('/as10000', function () {
    return view('as10000');
});
