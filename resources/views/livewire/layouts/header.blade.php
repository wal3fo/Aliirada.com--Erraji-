<div class="main-header">
    <div class="newsletter-banner">{{ __('messages.header.newsletter-banner') }}</div>

    <nav class="main-nav {{ session('Nexalang') === 'ar' ? 'ps-0' : 'pe-0' }}">
        <div class="main-logo">
            <a wire:navigate href="{{ route('home') }}" class="brandlogo">
                <img class="cursor-pointer" src="{{ asset('assets/illustrations/textdark_исходники.png') }}">
            </a>
        </div>

        <livewire:layouts.navigations />

        <div class="main-actions {{ session('Nexalang') === 'ar' ? 'me-auto' : 'ms-auto' }}">
            <div class="main-search">
                <livewire:layouts.search-bar />
            </div>

            <a class="main-action wirenone" wire:navigate href="{{ route('wishlists') }}">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    fill="{{ $WishListCount > 0 ? '#a90505' : 'currentColor' }}" class="bi bi-cart" viewBox="0 0 16 16">
                    @if($WishListCount > 0)
                        <path fill-rule="evenodd"
                            d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314" />
                    @else
                        <path
                            d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143q.09.083.176.171a3 3 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15" />
                    @endif
                </svg>
            </a>

            <a class="main-action wirenone" wire:navigate href="{{ route('carts') }}">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-cart"
                    viewBox="0 0 16 16">
                    <path
                        d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l1.313 7h8.17l1.313-7zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2" />
                </svg>
                <small class="counts">{{ $CartCount }}</small>
            </a>

            <div class="main-languages">
                <livewire:layouts.languages />
            </div>

            <livewire:layouts.mobile-navigations />
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