<div>
    @if(count($CartItems) > 0)
        <div class="finalize-order">
            <div class="finalize-order-content d-flex flex-wrap gap-4">
                <div class="d-flex align-items-center gap-2">
                    <span class="fw-bold">My Shopping Bag [{{ $CartCount }}]</span>
                    <span class="original-price">
                        <span class="fw-bold">
                            {{ $CartAmount }}
                            <span class="currency">MAD</span>
                        </span>
                    </span>
                </div>

                <a class="btn-checkout text-decoration-none" wire:click="checkout" wire:loading.attr="disabled" wire:target="checkout">
                    <span wire:loading.remove="" wire:target="checkout">
                        Proceed to Checkout
                    </span>
                    <span wire:loading="" wire:target="checkout">
                        <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                        Processing...
                    </span>
                </a>
            </div>
        </div>
    @endif
</div>