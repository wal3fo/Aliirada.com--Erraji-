<div>
    <div class="container-fluid pe-0 filter-bar align-items-center justify-content-between overflow-hidden">
        <span class="shopping-cart">
            <span>Shopping Bag [{{$CartCount}}]</span>
        </span>

        <div class="d-flex flex-wrap align-items-center gap-2">
            <span class="text-uppercase shopping-cart">
                <span class="fw-bolder">TOTAL:</span>
                <span class="ms-1">{{ number_format(collect($CartItems)->sum(function ($item) {
    return $item['product']->PriceOf * $item['quantity']; }), 2, '.', ',') }}
                    <span class="currency">MAD</span></span>
            </span>
            <button class="btn-addToBag fw-bold tracking-wide rounded-0" wire:click="checkout"
                wire:loading.attr="disabled" wire:target="checkout">
                <span wire:loading.remove wire:target="checkout">
                    <span class="fs-6">💳</span>
                    <span>Proceed to Checkout</span>
                </span>
                <span wire:loading wire:target="checkout">Checking out...</span>
            </button>
        </div>
    </div>

    <div class="main-container product-grid">
        @if(count($CartItems) > 0)
            @foreach ($CartItems as $Product)
                <div class="product-card">
                    <div class="product-image">
                        <img src="{{ $Product['product']->Landing }}">
                    </div>
                    <div class="product-info">
                        <div class="product-name">
                            {{ $Product['product']->Name }}
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="product-price m-0">
                                <span
                                    class="original-price">{{ number_format(($Product['product']->PriceOf * $Product['quantity']), 2, '.', ',') }}
                                    <span class="currency">MAD</span></span>
                            </div>
                            <div class="d-flex align-items-center gap-2">
                                <div class="input-group-qua">
                                    <button class="btn-minus" wire:click="decrementQuantity({{ $Product['product']->Id }})">-</button>
                                    <input type="number" class="form-control" value="{{ $Product['quantity'] }}" readonly>
                                    <button class="btn-plus" wire:click="incrementQuantity({{ $Product['product']->Id }})">+</button>
                                </div>
                                <div class="btn-removeFromBag" wire:click="removeFromCart({{ $Product['product']->Id }})"
                                    wire:loading.attr="disabled" wire:target="removeFromCart({{ $Product['product']->Id }})">
                                    <span wire:loading.remove wire:target="removeFromCart({{ $Product['product']->Id }})"><i
                                            class="bi bi-trash-fill"></i></span>
                                    <span wire:loading
                                        wire:target="removeFromCart({{ $Product['product']->Id }})">Removing...</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
</div>