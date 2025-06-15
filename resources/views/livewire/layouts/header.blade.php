<div class="main-header">
    <div class="newsletter-banner">Every FRIDAY (Jumma🌙) -10%</div>

    <nav class="main-nav">
        <div class="main-logo cursor-default">
            <a wire:navigate href="{{ route('home') }}" class="brandlogo">
                <!-- <img src="{{ asset('assets/illustrations/textdark_исходники.png') }}"> -->
                <span class="fs-4 fw-bolder">#LOGO HERE</span>
            </a>
        </div>

        <livewire:layouts.navigations />

        <div class="main-actions">
            <div class="main-search">
                <livewire:layouts.search-bar />
            </div>

            <a wire:navigate href="{{ route('wishlists') }}" class="main-action">
                @if($WishListCount > 0)
                    <i class="bi bi-suit-heart-fill text-danger"></i>
                @else
                    <i class="bi bi-suit-heart"></i>
                @endif
            </a>

            <a wire:navigate href="{{ route('carts') }}" class="main-action">
                <i class="bi bi-cart"></i>
                <small class="counts">{{ $CartCount }}</small>
            </a>

            <div class="main-items-mobile">
                <a wire:navigate href="#" class="main-action">
                    <i class="bi bi-list"></i>
                </a>
            </div>
        </div>
    </nav>

    @if(request()->routeIs('home'))
        <section class="hero">
            <video autoplay muted loop playsinline class="hero-video">
                <source src="{{ asset('assets/illustrations/header2.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <div class="hero-image d-none"></div>
            <span class="hero-subanner d-none">Women's Clothes & Fashion</span>
        </section>
    @endif
</div>