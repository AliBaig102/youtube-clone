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

//Route::get('/', function () {
//    return view('content');
//})->name('home');
//Route::get('/shorts', function () {
//    return view('shorts');
//})->name('shorts');
Route::view('/subscription','subscription')->name('subscription');
Route::view('/shorts','shorts')->name('shorts');
Route::view('/library','library')->name('library');
Route::view('/','content')->name('home');
