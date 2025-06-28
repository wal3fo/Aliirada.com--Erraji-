<section class="main-container">
    <div class="row g-4 product--container">
        <div class="col-12 col-md-7">
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="product-main-image">
                        <img src="{{ asset('assets/illustrations/products/' . $product->Landing) }}">
                    </div>
                </div>
                @if($product->pictures)
                    @foreach($product->pictures as $picture)
                        <div class="col-12 col-md-6">
                            <div class="product-main-image">
                                <img src="{{ asset('assets/illustrations/products/' . $picture->Name) }}">
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>

        <div class="col-12 col-md-5">
            <div class="product-details">
                <div class="product-header">
                    <div class="product-breadcrumb">
                        <span>{{ __('messages.products.home') }}</span> / <span>{{ __('messages.products.products') }}</span> / <span>{{ $product->Name }}</span>
                    </div>
                    <h1 class="product-title">{{ $product->Name }}</h1>

                    <div class="product-price">
                        @if($product->original_price > $product->PriceOf)
                            <span class="original-price">{{ number_format($product->original_price, 2, '.', ',') }}
                                MAD</span>
                        @endif
                        <span class="current-price">
                            {{ number_format($product->PriceOf, 2, '.', ',') }} <span class="currency">MAD</span>
                        </span>
                    </div>

                    <p class="product-description small text-muted m-0">{!! $product->Description !!}</p>
                </div>

                <div class="product-options">
                    @if($product->sizes->count() > 0)
                        <div class="option-group">
                            <label class="option-label">Size</label>
                            <div class="size-grid">
                                @foreach($product->sizes as $size)
                                    <div class="size-option" {{ $selectedSize === $size->Name ? 'selected' : '' }}
                                        wire:click="selectSize('{{ $size->Name }}')"
                                        style="{{ $selectedSize === $size->Name ? 'background:#a90505;color:#fff;' : '' }}">
                                        <span>{{ $size->Name }}</span>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif

                    <div class=" product-actions">
                        <button class="bag-btn" wire:click="addToCart" wire:loading.class="loading"
                            wire:target="addToCart">
                            <span wire:loading.remove wire:target="addToCart">
                                {{ __('messages.shopping.addtobag') }}
                            </span>
                            <span wire:loading wire:target="addToCart">
                                <div class="spinner-border spinner-border-sm text-light">
                                    <span class="visually-hidden">Loading...</span>
                                </div>
                            </span>
                        </button>

                        <button class="wishlist-btn" wire:click="addToWishlist" wire:loading.class="loading"
                            wire:target="addToWishlist">
                            <span wire:loading.remove wire:target="addToWishlist">
                                {{ __('messages.shopping.addtowishlist') }}
                            </span>
                            <span wire:loading wire:target="addToWishlist">
                                <div class="spinner-border spinner-border-sm text-light">
                                    <span class="visually-hidden">Loading...</span>
                                </div>
                            </span>
                        </button>
                    </div>
                </div>

                <div class="product-benefits">
                    <div class="benefit-item">
                        <i class="fas fa-leaf benefit-icon"></i>
                        <div class="benefit-text">
                            <strong>Sustainable</strong>
                            <span>Made with sustainable materials</span>
                        </div>
                    </div>
                    <div class="benefit-item">
                        <i class="fas fa-money-bill benefit-icon"></i>
                        <div class="benefit-text">
                            <strong>Cash on Delivery</strong>
                            <span>Pay when you receive your order</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>