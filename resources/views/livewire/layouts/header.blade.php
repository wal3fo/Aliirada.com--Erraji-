<div>
    <div class="newsletter-banner">🔥 Every FRIDAY (Jumma🌙) -10% ✨</div>

    <nav class="main-nav">
        <div class="main-logo fs-4 fw-bolder cursor-default">
            <a wire:navigate href="{{ route('home') }}" class="brandlogo">#LOGO HERE</a>
        </div>
        <div class="main-items">
            <a wire:navigate href="{{ route('products') }}">New In</a>
            <a wire:navigate href="{{ route('products') }}">Best Sellers</a>
            <a wire:navigate href="{{ route('products') }}">Accessories</a>
            <a wire:navigate href="#">Magazine</a>
        </div>

        <div class="main-actions">
            <a wire:navigate href="#" class="btn main-action">
                <i class="bi bi-suit-heart"></i>
                <small class="badge bg-dark">0</small>
            </a>

            <a wire:navigate href="{{ route('carts') }}" class="btn main-action">
                <i class="bi bi-cart"></i>
                <small class="badge bg-dark">{{ $CartCount }}</small>
            </a>

            <div class="main-search ms-2">
                <div class="newsletter-form input-group">
                    <input type="email" class="newsletter-input" placeholder="#TODO LIST">
                    <div class="input-group-text"><i class="bi bi-search"></i></div>
                </div>
            </div>
        </div>
    </nav>

    <section class="hero">
        <video autoplay muted loop playsinline class="hero-video">
            <source src="{{ asset('assets/illustrations/header.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <span class="hero-subanner d-none">Women’s Clothes & Fashion</span>
    </section>
</div>