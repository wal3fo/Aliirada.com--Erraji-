<?php

use App\Livewire\Dashboard;
use App\Livewire\policies\Sales;
use App\Livewire\products\Carts;
use App\Livewire\Products\Items;
use App\Livewire\Products\NewIn;
use App\Livewire\Products\Details;
use App\Livewire\Products\WishLists;
use App\Livewire\Products\Categories;
use App\Livewire\Products\Bestsellers;

use App\Livewire\Admin\Login;
use App\Livewire\Admin\Products\Lists;
use App\Livewire\Admin\Products\Create;

use Illuminate\Support\Facades\Route;

Route::get('/', Dashboard::class)->name('home');

Route::get('carts', Carts::class)->name('carts');
Route::get('wishlists', WishLists::class)->name('wishlists');
Route::get('products', Items::class)->name('products');
Route::get('products/newin', NewIn::class)->name('products.newin');
Route::get('products/bestsellers', Bestsellers::class)->name('products.bestsellers');
Route::get('products/details/{productId}-{productName}', Details::class)->name('products.details');
Route::get('categories/{categoryId}-{categoryName}', Categories::class)->name('categories');

Route::get('policies/sales', Sales::class)->name('policies.sales');

Route::get('admin', Login::class)->name('admin');
Route::get('admin/login', Login::class)->name('admin.login');
Route::get('admin/products/lists', Lists::class)->name('admin.products.lists');
Route::get('admin/products/create', Create::class)->name('admin.products.create');