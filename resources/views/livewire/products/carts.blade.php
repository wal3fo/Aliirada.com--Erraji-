<div>
    <div class="main-container-header">
        <span class="shopping-cart cursor-default">
            <span>{{ __('messages.carts.yourshoppingbag') }} [{{$CartCount}}]</span>
        </span>
    </div>

    <div class="main-container">
        <div class="row align-items-start">
            <div class="col-12 col-md-8">
                <div class="row row-deck">
                    @if(count($CartItems) > 0)
                        @foreach (collect($CartItems)->reverse() as $Product)
                            <div class="col-12 col-md-4">
                                <div class="card product-card">
                                    <a wire:navigate
                                        href="{{ route('products.details', ['productId' => $Product['product']->Id, 'productName' => Str::slug($Product['product']->Name)]) }}">
                                        <img src="{{ asset('assets/illustrations/products/' . $Product['product']->Landing) }}"
                                            class="img-fluid">
                                    </a>
                                    <div class="product-info">
                                        <a wire:navigate
                                            href="{{ route('products.details', ['productId' => $Product['product']->Id, 'productName' => Str::slug($Product['product']->Name)]) }}"
                                            class="overflow-hidden">
                                            <h6 class="text-truncate product-name m-0">{{ $Product['product']->Name }}</h6>
                                        </a>

                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="product-price justify-content-center m-0">
                                                <span class="original-price text-nowrap">
                                                    {{ number_format(($Product['product']->PriceOf * $Product['quantity']), 2, '.', ',') }}
                                                    <span class="currency">MAD</span>
                                                </span>
                                            </div>

                                            @if($Product['size'])
                                                <small class="fw-medium text-muted cursor-default">
                                                    <span class="text-decoration-underline">Size: {{ $Product['size'] }}</span>
                                                </small>
                                            @else
                                                <small class="fw-medium text-muted cursor-default">
                                                    <span class="text-decoration-underline">Size: Standard</span>
                                                </small>
                                            @endif
                                        </div>
                                        <div class="product-wishlist"><i class="bi bi-heart-fill"></i></div>
                                    </div>

                                    <div class="product-actions justify-content-between">
                                        <div class="input-group-qua rounded-0">
                                            <button class="btn-minus"
                                                wire:click="decrementQuantity({{ $Product['product']->Id }})">-</button>
                                            <span class="btn-quantity">{{ $Product['quantity'] }}</span>
                                            <button class="btn-plus"
                                                wire:click="incrementQuantity({{ $Product['product']->Id }})">+</button>
                                        </div>

                                        <div class="d-flex align-items-center gap-1">
                                            @if($Product['product']->Sizes->count() > 0)
                                                <select class="form-select select-size rounded-0"
                                                    wire:change="selectSize({{ $Product['product']->Id }}, $event.target.value)">
                                                    @foreach ($Product['product']->Sizes as $size)
                                                        <option value="{{ $size->Name }}" {{ $Product['size'] == $size->Name ? 'selected' : '' }}>{{ $size->Name }}</option>
                                                    @endforeach
                                                </select>
                                            @endif
                                            <button class="btn-removeFromBag rounded-0"
                                                wire:click="removeFromCart({{ $Product['product']->Id }})"
                                                wire:loading.class="loading"
                                                wire:target="removeFromCart({{ $Product['product']->Id }})">
                                                <span class="text-nowrap" wire:loading.remove
                                                    wire:target="removeFromCart({{ $Product['product']->Id }})">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                                        <path
                                                            d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0">
                                                        </path>
                                                    </svg>
                                                </span>
                                                <span wire:loading wire:target="removeFromCart({{ $Product['product']->Id }})">
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
                    @endif
                </div>
            </div>

            <div class="col-12 col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-4">{{ __('messages.carts.orderSummary') }}</h5>

                        <div class="card-actions">
                            <span wire:click="changeLocation" class="text-decoration-underline">
                                {{ __('messages.locations.change') }}
                            </span>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="d-flex align-items-center justify-content-between">
                                    <span class="d-flex align-items-center gap-1">
                                        <span>{{ __('messages.carts.subtotal') }}</span>
                                        <span class="subtotal text-muted d-none">({{$CartCount}} items)</span>
                                    </span>

                                    <span class="cursor-default fw-medium">
                                        {{ number_format($SubTotal, 2, '.', ',') }}
                                        <span class="currency">MAD</span>
                                    </span>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="d-flex align-items-center justify-content-between">
                                    <span class="d-flex align-items-end gap-1">
                                        <span>{{ __('messages.carts.shipping') }}</span>
                                        <span class="currency">({{ $location }})</span>
                                    </span>
                                    <span class="cursor-default">
                                        {{ number_format($shippingCost, 2, '.', ',') }}
                                        <span class="currency">MAD</span>
                                    </span>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="d-flex align-items-center justify-content-between">
                                    <span class="fw-bold">{{ __('messages.carts.total') }}</span>
                                    <span class="fw-bold">{{ number_format($Total, 2, '.', ',') }}
                                        <span class="currency">MAD</span>
                                    </span>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="d-flex flex-column gap-2">
                                    @if(count($CartItems) > 0)
                                        <button class="btn-checkout" wire:click="toggleCheckout"
                                            wire:loading.attr="disabled" wire:target="toggleCheckout">
                                            <span wire:loading.remove wire:target="toggleCheckout">
                                                {{ __('messages.carts.proceedtocheckout') }}
                                            </span>
                                            <span wire:loading wire:target="toggleCheckout">
                                                <span class="spinner-border spinner-border-sm" role="status"
                                                    aria-hidden="true"></span>
                                                Processing...
                                            </span>
                                        </button>
                                    @endif
                                    <a href="{{ route('products') }}" class="btn btn-outline-dark">
                                        {{ __('messages.carts.continueShopping') }}
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <livewire:layouts.checkout />
        <livewire:layouts.locations />
    </div>
</div>