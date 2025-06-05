<div>
    <!-- Category Nav -->
    <nav class="categories d-flex align-items-center justify-content-start gap-2">
        @foreach ($Categories as $Index => $Category)
        <a href="{{ route('products.details', ['Category' => $Category]) }}">{{ $Category }}</a>
        @endforeach
    </nav>

    <!-- Filter & Sort -->
    <div class="container-fluid filter-bar align-items-center justify-content-between overflow-hidden">
        <button class="filter-by-advanced tracking-wide">
            <i class="bi bi-filter"></i>
            <span class="filter-titulo">FILTER</span>
            <small class="text-muted tracking-wide">({{ $Products->total() }} Items)</small>
        </button>
        <button class="filter-by-popularity tracking-wide">
            <i class="bi bi-funnel"></i>
            <span class="filter-titulo">SORTED BY POPULARITY</span>
        </button>
    </div>

    <!-- Product Grid -->
    <div class="product-grid">
        @foreach ($Products as $Product)
        <div class="product-card">
            <div class="product-image">
                <img src="{{ $Product->Landing }}">
            </div>
            <div class="product-info">
                <div class="product-name">{{ $Product->Name }}</div>

                <div class="d-flex flex-wrap justify-content-between">
                    <div class="product-price justify-content-center m-0">
                        <span class="original-price text-decoration-underline">${{ $Product->PriceOf }}</span>
                    </div>

                    <div class="d-flex align-items-center justify-content-center gap-2">
                        <div class="input-group-qua">
                            <button class="btn-minus" wire:click="decrementQuantity({{ $Product->Id }})">-</button>
                            <input type="number" class="form-control" value="1" readonly>
                            <button class="btn-plus" wire:click="incrementQuantity({{ $Product->Id }})">+</button>
                        </div>

                        <div class="btn-addToBag" wire:click="addToCart({{ $Product->Id }})" wire:loading.class="loading" wire:target="addToCart({{ $Product->Id }})">
                            <span wire:loading.remove wire:target="addToCart({{ $Product->Id }})"><i class="bi bi-cart-fill"></i></span>
                            <span wire:loading wire:target="addToCart({{ $Product->Id }})">Adding...</span>
                        </div>
                    </div>
                </div>

                <div class="product-wishlist"><i class="bi bi-heart"></i></div>
            </div>
        </div>
        @endforeach
    </div>

    <!-- Load More Button -->
    @if ($Products->hasMorePages())
    <div class="load-more text-center">
        <button wire:click="loadMore" class="load-more-btn d-flex flex-column gap-2 mx-auto">
            <span>
                {{ $Products->count() }} of {{ $Products->total() }} Items
            </span>
        </button>
    </div>
    @endif
</div>