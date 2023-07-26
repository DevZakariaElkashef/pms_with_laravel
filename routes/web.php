<?php

use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;
use App\Models\Product;

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




Auth::routes();

Route::get('/', function (){
    return view('front.index');
})->name('home');

Route::get('/product/{id}', function($id) {
    return view('front.productDetails', [
        'product' => Product::find($id)
    ]);
})->name('product.show');

// gaurd in laravel

Route::middleware('auth')->group(function() {
    Route::get('cart', [CartController::class, 'index'])->name('cart.index');
    Route::get('cart/add/{id}', [CartController::class, 'add'])->name('cart.add');
    Route::post('cart/update', [CartController::class, 'update'])->name('cart.update');
    Route::get('cart/remove/{id}', [CartController::class, 'remove'])->name('cart.remove');
    Route::get('cart/destroy', [CartController::class, 'destroy'])->name('cart.destroy');
});