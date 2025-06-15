<div class="d-none">
    @if(count($CartItems) > 0)
        <div class="finalize-order">
            <div class="d-flex align-items-center gap-4">
                <i class="bi bi-bag-check-fill fw-bold"></i>
            </div>

            <div class="d-flex align-items-center flex-wrap gap-2 d-none">
                <div class="d-flex align-items-center gap-2">
                    <span class="text-uppercase fw-bold">My Shopping Bag <span
                            class="currency">[{{ $CartCount }}]</span></span>
                    <span class="original-price d-none">
                        <span class="fw-bold">
                            {{ $CartAmount }}
                            <span class="currency">MAD</span>
                        </span>
                    </span>
                </div>

                <button class="btn-checkout text-decoration-none d-none" wire:click="checkout" wire:loading.attr="disabled"
                    wire:target="checkout">
                    <span wire:loading.remove="" wire:target="checkout">
                        Proceed to Checkout
                    </span>
                    <span wire:loading="" wire:target="checkout">
                        <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                        Processing...
                    </span>
                </button>
            </div>
        </div>
    @endif
</div>