<?php

use App\Livewire\Dashboard;
use App\Livewire\Products\Items;
use App\Livewire\Products\Details;
use Illuminate\Support\Facades\Route;

Route::get('/', Dashboard::class)->name('dashboard');
Route::get('products', Items::class)->name('products');
Route::get('products/details', Details::class)->name('products.details');