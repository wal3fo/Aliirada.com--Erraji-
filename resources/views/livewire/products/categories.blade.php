<div>
    <!-- Filter & Sort -->
    <div class="filter-bar">
        <button class="filter-by-advanced tracking-wide">
            <i class="bi bi-filter"></i>
            <span>FILTER</span>
            <small class="text-muted tracking-wide">({{ $Products->total() }} Items)</small>
        </button>

        <span class="filter-bar-title">{{ $categoryName }}</span>

        <button class="filter-by-popularity tracking-wide">
            <i class="bi bi-funnel"></i>
            <span>SORTED BY POPULARITY</span>
        </button>
    </div>

    <div class="main-container">
        <!-- Product Grid -->
        <div class="row row-deck">
            @foreach ($Products as $Product)
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card product-card">
                        <div class="product-image" wire:click="showProductDetails({{ $Product->Id }})">
                            <img src="{{ $Product->Landing }}">
                        </div>
                        <div class="product-info">
                            <div class="product-name" wire:click="showProductDetails({{ $Product->Id }})">
                                {{ $Product->Name }}
                            </div>
                            <div class="product-wishlist btn-addToWishlist"><i class="bi bi-heart-fill"></i></div>
                        </div>

                        <div class="product-actions">
                            <div class="product-price justify-content-center m-0">
                                <span class="original-price">
                                    {{ number_format($Product->PriceOf, 2, '.', ',') }} <span class="currency">MAD</span>
                                </span>
                            </div>

                            <div class="d-flex align-items-center justify-content-center gap-2">
                                <div class="input-group-qua">
                                    <button class="btn-minus" wire:click="decrementQuantity({{ $Product->Id }})">-</button>
                                    <span class="btn-quantity">{{ $quantities[$Product->Id] ?? 1 }}</span>
                                    <button class="btn-plus" wire:click="incrementQuantity({{ $Product->Id }})">+</button>
                                </div>

                                <div class="btn-addToBag" wire:click="addToCart({{ $Product->Id }})"
                                    wire:loading.class="loading" wire:target="addToCart({{ $Product->Id }})">
                                    <span wire:loading.remove wire:target="addToCart({{ $Product->Id }})">
                                        <i class="bi bi-cart-fill"></i>
                                    </span>
                                    <span wire:loading wire:target="addToCart({{ $Product->Id }})">
                                        <div class="spinner-border spinner-border-sm text-light" role="status">
                                            <span class="visually-hidden">Loading...</span>
                                        </div>
                                    </span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            @endforeach
        </div>

        <!-- Load More Button -->
        @if ($Products->hasMorePages())
            <div class="text-center mt-4">
                <button wire:click="loadMore" class="load-more-btn">
                    {{ $Products->count() }} of {{ $Products->total() }} Items
                </button>
            </div>
        @endif
    </div>
</div>