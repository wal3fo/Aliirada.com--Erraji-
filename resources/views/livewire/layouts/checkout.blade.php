<div>
    @if($showCheckout)
        <div class="checkout-popup-overlay" wire:click.self="$toggle('showCheckout')">
            <div class="checkout-popup-container">
                <div class="checkout-popup-header">
                    <h5>Checkout</h5>
                    <button type="button" class="btn-close" wire:click="$toggle('showCheckout')"></button>
                </div>

                <div class="checkout-popup-content">
                    <!-- Begin Checkout Form Placeholder -->
                    <form wire:submit.prevent="submitCheckout">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <label class="form-label required">Name</label>
                                <input type="text" class="form-control" wire:model="checkoutName"
                                    placeholder="Enter your name">
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label">Email Address <small class="text-muted">(optional)</small></label>
                                <input type="email" class="form-control" wire:model="checkoutEmail"
                                    placeholder="Enter your email">
                            </div>

                            <div class="col-12 col-md-6">
                                <label class="form-label required">Phone</label>
                                <input type="tel" class="form-control" wire:model="checkoutPhone"
                                    placeholder="Enter your phone">
                            </div>

                            <div class="col-12 col-md-3">
                                <label class="form-label required">Country</label>
                                <input type="text" class="form-control" wire:model="checkoutCountry" placeholder="Morocco"
                                    disabled>
                            </div>

                            <div class="col-12 col-md-3">
                                <label class="form-label required">City</label>
                                <input type="text" class="form-control" wire:model="checkoutCity"
                                    placeholder="Enter your city" wire:click="changeLocation" readonly>
                            </div>

                            <div class="col-12 col-md-6">
                                <label class="form-label required">Address</label>
                                <input type="text" class="form-control" wire:model="checkoutAddress"
                                    placeholder="Enter your address">
                            </div>

                            <div class="col-12 col-md-6">
                                <label class="form-label required">Payment Method</label>
                                <select wire:model="checkoutPaymentMethod" disabled>
                                    <option value="Cash On Delivery" selected>Cash On Delivery</option>
                                </select>
                            </div>

                            <div class="col-12">
                                <button type="submit" class="btn btn-dark rounded w-100">Place Order</button>
                            </div>
                        </div>
                    </form>
                    <!-- End Checkout Form Placeholder -->
                </div>
            </div>
        </div>
    @endif
</div>