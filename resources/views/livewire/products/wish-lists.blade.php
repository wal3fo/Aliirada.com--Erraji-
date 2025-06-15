<div>
    <div class="main-container-header">
        <span class="shopping-cart cursor-default">
            <span>Your Wish List [{{$WishListCount}}]</span>
        </span>
    </div>

    <div class="main-container">
        <div class="row align-items-start">
            @if(count($WishListItems) > 0)
                @foreach (collect($WishListItems)->reverse() as $Product)

                    <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                        <div class="card product-card">
                            <div class="product-image" wire:click="showProductDetails({{ $Product['product']->Id }})">
                                <img src="{{ asset('assets/illustrations/products/' . $Product['product']->Landing) }}">
                            </div>
                            <div class="product-info">
                                <div class="product-name" wire:click="showProductDetails({{ $Product['product']->Id }})">
                                    {{ $Product['product']->Name }}
                                </div>
                                <!-- <div class="product-wishlist"><i class="bi bi-heart-fill"></i></div> -->
                            </div>

                            <div class="product-actions">
                                <div class="product-price justify-content-center m-0">
                                    <span class="original-price">
                                        {{ number_format($Product['product']->PriceOf, 2, '.', ',') }} <span
                                            class="currency">MAD</span>
                                    </span>
                                </div>

                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <div class="input-group-qua">
                                        <button class="btn-minus"
                                            wire:click="decrementQuantity({{ $Product['product']->Id }})">-</button>
                                        <span class="btn-quantity">{{ $quantities[$Product['product']->Id] ?? 1 }}</span>
                                        <button class="btn-plus"
                                            wire:click="incrementQuantity({{ $Product['product']->Id }})">+</button>
                                    </div>

                                    <div class="btn-addToBag" wire:click="addToCart({{ $Product['product']->Id }})"
                                        wire:loading.class="loading" wire:target="addToCart({{ $Product['product']->Id }})">
                                        <span wire:loading.remove wire:target="addToCart({{ $Product['product']->Id }})">
                                            <i class="bi bi-cart-fill"></i>
                                        </span>
                                        <span wire:loading wire:target="addToCart({{ $Product['product']->Id }})">
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
            @endif
        </div>

        <livewire:layouts.locations />
    </div>
</div>