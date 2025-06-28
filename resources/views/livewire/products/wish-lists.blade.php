<div>
    <div class="main-container-header">
        <span class="shopping-cart cursor-default">
            <span>{{ __('messages.carts.yourwishlist') }} [{{$WishListCount}}]</span>
        </span>
    </div>

    <div class="main-container">
        <div class="row align-items-start">
            @if(count($WishListItems) > 0)
                @foreach (collect($WishListItems)->reverse() as $Product)

                    <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                        <div class="card product-card">
                            <a wire:navigate
                                href="{{ route('products.details', ['productId' => $Product['product']->Id, 'productName' => Str::slug($Product['product']->Name)]) }}">
                                <img src="{{ asset('assets/illustrations/products/' . $Product['product']->Landing) }}"
                                    class="img-fluid">
                            </a>
                            <div class="product-info">
                                <a wire:navigate
                                    href="{{ route('products.details', ['productId' => $Product['product']->Id, 'productName' => Str::slug($Product['product']->Name)]) }}"
                                    class="product-name">
                                    {{ $Product['product']->Name }}
                                </a>
                            </div>

                            <div class="product-actions justify-content-between">
                                <div class="product-price justify-content-center m-0">
                                    <span class="original-price text-nowrap">
                                        {{ number_format($Product['product']->PriceOf, 2, '.', ',') }} <span
                                            class="currency">MAD</span>
                                    </span>
                                </div>

                                <div class="d-flex align-items-center gap-1">
                                    @if($Product['product']->Sizes->count() > 0)
                                        <select class="form-select select-size rounded-0"
                                            wire:change="selectSize({{ $Product['product']->Id }}, $event.target.value)">
                                            @foreach ($Product['product']->Sizes as $size)
                                                <option value="{{ $size->Name }}">{{ $size->Name }}</option>
                                            @endforeach
                                        </select>
                                    @endif

                                    <button class="btn-addToBag w-auto rounded-0"
                                        wire:click="addToCart({{ $Product['product']->Id }})" wire:loading.class="loading"
                                        wire:target="addToCart({{ $Product['product']->Id }})">
                                        <span class="text-nowrap" wire:loading.remove
                                            wire:target="addToCart({{ $Product['product']->Id }})">
                                            {{ __('messages.shopping.buy') }}
                                        </span>
                                        <span wire:loading wire:target="addToCart({{ $Product['product']->Id }})">
                                            <div class="spinner-border spinner-border-sm text-light" role="status">
                                                <span class="visually-hidden">Loading...</span>
                                            </div>
                                        </span>
                                    </button>

                                    <button class="btn-removeFromWishlist w-auto rounded-0"
                                        wire:click="removeFromWishList({{ $Product['product']->Id }})"
                                        wire:loading.class="loading"
                                        wire:target="removeFromWishList({{ $Product['product']->Id }})">
                                        <span class="text-nowrap" wire:loading.remove
                                            wire:target="removeFromWishList({{ $Product['product']->Id }})">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor"
                                                class="bi bi-trash-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0">
                                                </path>
                                            </svg>
                                        </span>
                                        <span wire:loading wire:target="removeFromWishList({{ $Product['product']->Id }})">
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

        <livewire:layouts.locations />
    </div>
</div>