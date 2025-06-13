<?php

use App\Livewire\Dashboard;
use App\Livewire\policies\Sales;
use App\Livewire\products\Carts;
use App\Livewire\Products\Items;
use App\Livewire\Products\NewIn;
use App\Livewire\Products\Details;
use App\Livewire\Products\Categories;
use App\Livewire\Products\Bestsellers;

use Illuminate\Support\Facades\Route;

Route::get('/', Dashboard::class)->name('home');

Route::get('carts', Carts::class)->name('carts');
Route::get('products', Items::class)->name('products');
Route::get('products/newin', NewIn::class)->name('products.newin');
Route::get('products/bestsellers', Bestsellers::class)->name('products.bestsellers');
Route::get('products/details/{productId}-{productName}', Details::class)->name('products.details');
Route::get('categories/{categoryId}-{categoryName}', Categories::class)->name('categories');

Route::get('policies/sales', Sales::class)->name('policies.sales');