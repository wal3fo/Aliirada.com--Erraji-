<div>
    <!-- Category Nav -->
    <nav class="categories d-none">
        @foreach ($Categories as $Index => $Category)
            <a href="#">{{ $Category }}</a>
        @endforeach
    </nav>

    <!-- Filter & Sort -->
    <div class="filter-bar justify-content-center">
        <button class="filter-by-advanced tracking-wide d-none">
            <i class="bi bi-filter"></i>
            <span class="filter-titulo">FILTER</span>
            <small class="text-muted tracking-wide">({{ $Products->total() }} Items)</small>
        </button>

        <span class="filter-bar-title">{{ __('messages.header.categories.bestsales') }}</span>

        <button class="filter-by-popularity tracking-wide d-none">
            <i class="bi bi-funnel"></i>
            <span class="filter-titulo">SORTED BY POPULARITY</span>
        </button>
    </div>

    <div class="main-container">
        <!-- Product Grid -->
        <div class="row row-deck">
            @foreach ($Products as $Product)
                <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <div class="card product-card">
                        <a wire:navigate class="product-image"
                            href="{{ route('products.details', ['productId' => $Product->Id, 'productName' => Str::slug($Product->Name)]) }}">
                            <img src="{{ asset('assets/illustrations/products/' . $Product->Landing) }}">
                        </a>
                        <div class="product-info">
                            <a wire:navigate
                                href="{{ route('products.details', ['productId' => $Product->Id, 'productName' => Str::slug($Product->Name)]) }}"
                                class="product-name">
                                {{ $Product->Name }}
                            </a>

                            <div class="product-wishlist" wire:click="addToWishlist({{ $Product->Id }})">
                                <i class="bi bi-heart-fill"></i>
                            </div>
                        </div>

                        <div class="product-actions justify-content-between">
                            <div class="product-price justify-content-center m-0">
                                <span class="original-price text-nowrap">
                                    {{ number_format($Product->PriceOf, 2, '.', ',') }} <span class="currency">MAD</span>
                                </span>
                            </div>

                            <div class="d-flex align-items-center gap-1">
                                @if($Product->Sizes->count() > 0)
                                    <select class="form-select select-size rounded-0"
                                        wire:change="selectSize({{ $Product->Id }}, $event.target.value)">
                                        @foreach ($Product->Sizes as $size)
                                            <option value="{{ $size->Name }}">{{ $size->Name }}</option>
                                        @endforeach
                                    </select>
                                @endif

                                <button class="btn-addToBag w-auto rounded-0" wire:click="addToCart({{ $Product->Id }})"
                                    wire:loading.class="loading" wire:target="addToCart({{ $Product->Id }})">
                                    <span class="text-nowrap" wire:loading.remove
                                        wire:target="addToCart({{ $Product->Id }})">
                                        {{ __('messages.shopping.buy') }}
                                    </span>
                                    <span wire:loading wire:target="addToCart({{ $Product->Id }})">
                                        <div class="spinner-border spinner-border-sm text-light" role="status">
                                            <span class="visually-hidden">Loading...</span>
                                        </div>
                                    </span>
                                </button>
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