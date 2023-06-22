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
    return view('index');
})->name('home');


Route::get('/categories', function(){
    return view('categories.index');
})->name('categories.index');

Route::get('/categories/create', function(){
    return view('categories.add');
})->name('categories.create');


// Route::view('/cat', 'categories.index');


// products

// orders

// users
