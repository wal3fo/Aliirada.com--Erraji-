<div>
    <!-- Filter & Sort -->
    <div class="filter-bar justify-content-between bg-dark text-white">
        <span class="filter-bar-title">
            [Management] Products List ({{ $Products->count() }})
        </span>
        <a wire:navigate href="{{ route('admin.products.create') }}" class="btn btn-light btn-sm">Add Product</a>
    </div>

    <div class="main-container">
        <div class="row row-deck">
            @foreach ($Products as $Product)
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card product-card">
                        <div class="product-image" wire:click="showProductDetails({{ $Product->Id }})">
                            <img src="{{ asset('assets/illustrations/products/' . $Product->Landing) }}">
                        </div>
                        <div class="product-info">
                            <div class="product-name" wire:click="showProductDetails({{ $Product->Id }})">
                                {{ $Product->Name }}
                            </div>
                        </div>

                        <div class="product-actions">
                            <div class="product-price justify-content-center m-0">
                                <span class="original-price">
                                    {{ number_format($Product->PriceOf, 2, '.', ',') }} <span class="currency">MAD</span>
                                </span>
                            </div>

                            <div class="input-group w-auto overflow-hidden">
                                <button type="button" class="btn btn-dark btn-sm rounded-end-0">Edit</button>
                                <button type="button" class="btn btn-danger btn-sm rounded-start-0">Delete</button>
                            </div>
                        </div>

                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>