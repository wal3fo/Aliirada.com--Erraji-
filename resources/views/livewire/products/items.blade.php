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
                <div class="d-flex align-items-center justify-content-between">
                    <div class="product-price">
                        <span class="original-price">${{ $Product->PriceOf }}</span>
                        <span class="discounted-price">${{ $Product->FinalOf }}</span>
                    </div>
                    <div class="product-wishlist"><i class="bi bi-heart"></i></div>
                </div>
                <div class="product-colors">3 Colors</div>
            </div>
        </div>
        @endforeach
    </div>

    <!-- Load More Button -->
    @if ($Products->hasMorePages())
    <div class="load-more text-center">
        <button wire:click="loadMore" class="load-more-btn">LOAD MORE PRODUCTS</button>
    </div>
    @endif

    <!-- Product Count -->
    <div class="product-count text-center text-muted">
        <span>{{ $Products->count() }} of {{ $Products->total() }} Products</span>
    </div>
</div>