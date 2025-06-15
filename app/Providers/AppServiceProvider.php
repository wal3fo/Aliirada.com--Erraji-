<?php

namespace App\Providers;

use Livewire\Livewire;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Livewire::component('*', function ($component) {
            // Add 1-second delay for all Livewire components
            usleep(1000000); // 1,000,000 microseconds = 1 second
            return $component;
        });
    }
}
