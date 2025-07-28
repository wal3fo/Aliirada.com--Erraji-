<div>
    <!-- Filter & Sort -->
    <div class="filter-bar justify-content-between bg-dark text-white">
        <span class="filter-bar-title">
            [Management] Products List ({{ $Products->count() }})
        </span>
        <a wire:navigate href="{{ route('admin.create') }}" class="btn btn-light btn-sm">Add Product</a>
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
                                <span class="badge bg-{{ $Product->Locked ? 'danger' : 'success' }} rounded">
                                    @if($Product->Locked)
                                        <span class="bi bi-lock-fill fs-6"></span>
                                    @else
                                        <span class="bi bi-unlock-fill fs-6"></span>
                                    @endif
                                </span>
                                {{ $Product->Name }}
                            </div>
                        </div>

                        <div class="product-actions">
                            <div class="product-price justify-content-center m-0">
                                <span class="original-price">
                                    {{ number_format($Product->PriceOf, 2, '.', ',') }} <span class="currency">MAD</span>
                                </span>
                            </div>

                            <a type="button" class="btn btn-dark btn-sm" wire:navigate
                                href="{{ route('admin.edit', ['productId' => $Product->Id, 'productName' => Str::slug($Product->Name)]) }}">
                                Edit
                            </a>
                        </div>

                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>