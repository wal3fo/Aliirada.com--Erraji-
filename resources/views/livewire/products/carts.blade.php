<div>
    <div class="container-fluid filter-bar align-items-center justify-content-between overflow-hidden">
        <span class="shopping-cart">
            <span>My Cart</span>
            <span>({{ $CartCount}})</span>
        </span>
        <span class="text-uppercase shopping-cart">
            <span class="fw-bolder text-decoration-underline">TOTAL</span>
            <span class="text-decoration--underline">${{ number_format(collect($CartItems)->sum('PriceOf'), 2, '.', ',') }}</span>
        </span>

        <button class="btn-addCard fw-bold tracking-wide" wire:click="checkout" wire:loading.attr="disabled" wire:target="checkout">
            <span wire:loading.remove wire:target="checkout">
                <span class="fs-6">💳</span>
                Proceed to Checkout <u>#TODO LIST</u>
            </span>
            <span wire:loading wire:target="checkout">Checking out...</span>
        </button>
    </div>

    <div class="product-grid">
        @if(count($CartItems) > 0)
        @foreach ($CartItems as $Product)
        <div class="product-card">
            <div class="product-image">
                <img src="{{ $Product->Landing }}">
            </div>
            <div class="product-info">
                <div class="product-name">{{ $Product->Name }}</div>
                <div class="d-flex align-items-center justify-content-between">
                    <div class="product-price m-0 d-flex gap-1">
                        <span class="original-price">${{ $Product->PriceOf }}</span>
                        <span class="discounted-price">${{ $Product->FinalOf }}</span>
                    </div>
                    <div class="btn-addCard" wire:click="removeFromCart({{ $Product->Id }})" wire:loading.attr="disabled" wire:target="removeFromCart({{ $Product->Id }})">
                        <span wire:loading.remove wire:target="removeFromCart({{ $Product->Id }})">Remove</span>
                        <span wire:loading wire:target="removeFromCart({{ $Product->Id }})">Removing...</span>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        @endif
    </div>
</div>