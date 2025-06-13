<div class="main-header">
    <div class="newsletter-banner">Every FRIDAY (Jumma🌙) -10%</div>

    <nav class="main-nav">
        <div class="main-logo fs-4 fw-bolder cursor-default">
            <a wire:navigate href="{{ route('home') }}" class="brandlogo">#LOGO HERE</a>

            <div class="main-items-mobile ms-auto">
                <a wire:navigate href="#" class="main-action">
                    <i class="bi bi-list"></i>
                </a>
            </div>
        </div>
        <div class="main-items">
            <a wire:navigate href="{{ route('products.newin') }}">New In</a>
            <a wire:navigate href="{{ route('products.bestsellers') }}">Best Sellers</a>
            <livewire:layouts.categories />
            <a wire:navigate href="#">Magazine</a>
        </div>

        <div class="main-actions">
            <div class="main-search">
                <livewire:layouts.search-bar />
            </div>

            <a wire:navigate href="#" class="main-action">
                <i class="bi bi-suit-heart"></i>
            </a>

            <a wire:navigate href="{{ route('carts') }}" class="main-action">
                <i class="bi bi-cart"></i>
                <small class="counts">{{ $CartCount }}</small>
            </a>
        </div>
    </nav>

    @if(request()->routeIs('home'))
        <section class="hero">
            <video autoplay muted loop playsinline class="hero-video">
                <source src="{{ asset('assets/illustrations/header.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <span class="hero-subanner d-none">Women's Clothes & Fashion</span>
        </section>
    @endif
</div>