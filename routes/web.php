<?php

use App\Http\Livewire\Cart\Index as CartIndex;
use App\Http\Livewire\Categories\Index as CategoryIndex;
use App\Http\Livewire\Categories\Show as CategoryShow;
use App\Http\Livewire\Products\Show as ProductShow;
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
    return redirect('login');
});

Auth::routes([
    'register' => false, // Registration Routes...
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
  ]);

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function () {
    Route::get('/categories', CategoryIndex::class)->name('categories');
    Route::get('/categories/{category}', CategoryShow::class)->name('categories.show');
    Route::get('/products/{product}', ProductShow::class)->name('products.show');
    Route::get('/cart/list', CartIndex::class)->name('cart');
});