<div>
    <div class="container-fluid filter-bar align-items-center justify-content-between overflow-hidden">
        <span class="shopping-cart">
            <span>{{ $categoryName }}</span>
        </span>
    </div>

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
                <div class="d-flex flex--column align-items-center justify-content-between">
                    <div class="product-price m-0 d-flex gap-1">
                        <span class="original-price">${{ $Product->PriceOf }}</span>
                        <span class="discounted-price">${{ $Product->FinalOf }}</span>
                    </div>

                    <div class="btn-addCard" wire:click="addToCart({{ $Product->Id }})" wire:loading.class="loading" wire:target="addToCart({{ $Product->Id }})">
                        <span wire:loading.remove wire:target="addToCart({{ $Product->Id }})">ADD TO BAG</span>
                        <span wire:loading wire:target="addToCart({{ $Product->Id }})">Adding...</span>
                    </div>

                    <div class="input-group justify-content-center d-none">
                        <div class="input-group d-none w-50">
                            <button class="btn-minus btn-addCard" wire:click="decrementQuantity({{ $Product->Id }})">-</button>
                            <input type="text" class="form-control" value="1" readonly>
                            <button class="btn-plus btn-addCard" wire:click="incrementQuantity({{ $Product->Id }})">+</button>
                        </div>
                    </div>

                    <div class="product-wishlist"><i class="bi bi-heart"></i></div>
                </div>
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