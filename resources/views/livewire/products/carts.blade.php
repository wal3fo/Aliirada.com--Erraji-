<div>
    <div class="main-container-header">
        <span class="shopping-cart cursor-default">
            <span>Your Shopping Bag [{{$CartCount}}]</span>
        </span>
    </div>

    <div class="main-container">
        <div class="row align-items-start">
            <div class="col-12 col-md-7">
                <div class="row align-items-center">
                    @if(count($CartItems) > 0)
                        @foreach (collect($CartItems)->reverse() as $Product)
                            <div class="col-12 col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-auto">
                                                <img src="{{ asset('assets/illustrations/products/' . $Product['product']->Landing) }}"
                                                    class="img-fluid rounded"
                                                    style="width: 5rem; height: auto; object-fit: cover;">
                                            </div>

                                            <div class="col">
                                                <div class="d-flex flex-column justify-content-between h-100">
                                                    <h6 class="m-0 cursor-pointer"
                                                        wire:click="showProductDetails({{ $Product['product']->Id }})">
                                                        {{ $Product['product']->Name }}
                                                    </h6>

                                                    <div class="original-price">
                                                        {{ number_format(($Product['product']->PriceOf * $Product['quantity']), 2, '.', ',') }}
                                                        <span class="currency">MAD</span>
                                                    </div>

                                                    <div class="d-flex align-items-center gap-2">
                                                        <div class="input-group-qua">
                                                            <button class="btn-minus"
                                                                wire:click="decrementQuantity({{ $Product['product']->Id }})">-</button>
                                                            <span class="form-control">{{ $Product['quantity'] }}</span>
                                                            <button class="btn-plus"
                                                                wire:click="incrementQuantity({{ $Product['product']->Id }})">+</button>
                                                        </div>
                                                        <div class="btn-removeFromBag"
                                                            wire:click="removeFromCart({{ $Product['product']->Id }})"
                                                            wire:loading.attr="disabled"
                                                            wire:target="removeFromCart({{ $Product['product']->Id }})">
                                                            <span wire:loading.remove
                                                                wire:target="removeFromCart({{ $Product['product']->Id }})"><i
                                                                    class="bi bi-trash-fill"></i></span>
                                                            <span wire:loading
                                                                wire:target="removeFromCart({{ $Product['product']->Id }})">
                                                                <div class="spinner-border spinner-border-sm text-light"
                                                                    role="status">
                                                                    <span class="visually-hidden">Loading...</span>
                                                                </div>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>

            <div class="col-12 col-md-5">
                <div class="card card-body">
                    <h5 class="card-title mb-4">Order Summary</h5>

                    <div class="d-flex justify-content-between mb-2">
                        <span class="d-flex align-items-center gap-1">
                            <span>Subtotal</span>
                            <span class="subtotal text-muted d-none">({{$CartCount}} items)</span>
                        </span>
                        <span class="cursor-default fw-medium">{{ number_format(collect($CartItems)->sum(function ($item) {
    return $item['product']->PriceOf * $item['quantity']; }), 2, '.', ',') }}
                            <span class="currency">MAD</span>
                        </span>
                    </div>
                    <div class="d-flex justify-content-between mb-2">
                        <span class="d-flex align-items-center gap-1">
                            <span>Shipping</span>
                            <span class="currency">({{ $location }})</span>
                            <span class="shipping-location text-decoration-underline" wire:click="changeLocation">
                                Change location
                            </span>
                        </span>
                        <span>
                            {{ $shippingCost }} MAD
                        </span>
                    </div>
                    <div class="d-flex justify-content-between mb-2">
                        <span>Tax</span>
                        <span>Free</span>
                    </div>

                    <div class="d-flex justify-content-between mb-3">
                        <span class="fw-bold">Total</span>
                        <span class="fw-bold">{{ number_format(collect($CartItems)->sum(function ($item) {
    return $item['product']->PriceOf * $item['quantity']; }) + $shippingCost, 2, '.', ',') }}
                            <span class="currency">MAD</span>
                        </span>
                    </div>

                    <div class="d-grid gap-2">
                        @if(count($CartItems) > 0)
                            <button class="btn-checkout" wire:click="checkout" wire:loading.attr="disabled"
                                wire:target="checkout">
                                <span wire:loading.remove wire:target="checkout">
                                    Proceed to Checkout
                                </span>
                                <span wire:loading wire:target="checkout">
                                    <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                    Processing...
                                </span>
                            </button>
                        @endif
                        <a href="#" class="btn btn-outline-dark">
                            Continue Shopping
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <livewire:layouts.locations />
    </div>
</div>