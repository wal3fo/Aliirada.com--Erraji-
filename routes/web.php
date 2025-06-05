<?php

use App\Livewire\Dashboard;
use App\Livewire\policies\Sales;
use App\Livewire\products\Carts;
use App\Livewire\Products\Items;
use App\Livewire\Products\Details;
use App\Livewire\Products\Categories;

use Illuminate\Support\Facades\Route;

Route::get('/', Dashboard::class)->name('home');

Route::get('carts', Carts::class)->name('carts');
Route::get('products', Items::class)->name('products');
Route::get('products/details', Details::class)->name('products.details');

Route::get('categories/{categoryId}-{categoryName}', Categories::class)->name('categories');

Route::get('policies/sales', Sales::class)->name('policies.sales');