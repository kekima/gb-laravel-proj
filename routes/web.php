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
    return view('welcome');
});

Route::get('/welcome', function () {
    return "Greetings, traveller!";
});

Route::get('/about', function () {
    return "We are planning to do something awesome, stay tuned!";
});

Route::get('/news', function () {
    return "Here are all the news.";
});

Route::get('/news/{id}', function (string $id) {
    return "Here is an article number {$id}.";
});
