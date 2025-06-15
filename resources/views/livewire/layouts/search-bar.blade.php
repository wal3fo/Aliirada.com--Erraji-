<div class="wire-searching">
    <input type="text" wire:model.live.debounce.300ms="search" class="main-search-input"
        placeholder="Search products...">

    <div class="dropdown-menu d-{{ $showResults ? 'block' : 'none' }}">
        @foreach($results as $product)
            <div class="search-result-item" wire:click="showProductDetails({{ $product->Id }})">
                <div class="result-image"><img src="{{ asset('assets/illustrations/products/' . $product->Landing) }}"></div>
                <div class="result-info">
                    <h6>{{ $product->Name }}</h6>
                    <div class="price text-decoration-underline">
                        {{ number_format($product->PriceOf, 2) }} MAD
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>