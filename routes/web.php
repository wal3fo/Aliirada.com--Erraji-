<?php

use App\Livewire\Dashboard;
use App\Livewire\Policies\Sales;
use App\Livewire\Products\Carts;
use App\Livewire\Products\Items;
use App\Livewire\Products\NewIn;
use App\Livewire\Products\Details;
use App\Livewire\Products\BestSales;
use App\Livewire\Products\WishLists;
use App\Livewire\Products\Categories;

use App\Livewire\Admin\Login;
use App\Livewire\Admin\Products\Edit;
use App\Livewire\Admin\Products\Lists;
use App\Livewire\Admin\Products\Create;

use Illuminate\Support\Facades\Route;

Route::middleware(['guestMiddleware'])->group(function () {
    Route::get('/', Dashboard::class)->name('home');

    Route::get('carts', Carts::class)->name('carts');
    Route::get('wishlists', WishLists::class)->name('wishlists');
    Route::get('products', Items::class)->name('products');
    Route::get('products/newin', NewIn::class)->name('products.newin');
    Route::get('products/bestsales', BestSales::class)->name('products.bestsales');
    Route::get('products/details/{productId}-{productName}', Details::class)->name('products.details');
    Route::get('categories/{categoryId}-{categoryName}', Categories::class)->name('categories');

    Route::get('policies/sales', Sales::class)->name('policies.sales');

    Route::get('admin', Login::class)->name('admin.login');
});

Route::middleware(['authMiddleware'])->group(function () {
    Route::get('admin/products', Lists::class)->name('admin.lists');
    Route::get('admin/create', Create::class)->name('admin.create');
    Route::get('admin/edit/{productId}-{productName}', Edit::class)->name('admin.edit');
});