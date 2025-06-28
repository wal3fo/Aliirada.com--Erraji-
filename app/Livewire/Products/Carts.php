<?php

namespace App\Livewire\Products;

use Str;
use Exception;
use Livewire\Component;
use Livewire\Attributes\Lazy;

use App\Models\NexaProducts;
use App\Models\NexaShippings;

#[Lazy]
class Carts extends Component
{
    public $CartItems = [];
    public $CartCount = 0;
    public $SubTotal = 0;
    public $Total = 0;

    public $location = 'Marrakech';
    public $shippingCost = 0;

    protected $listeners = ['locationSelected' => 'updateLocation'];

    public function mount()
    {
        $this->CartItems = session()->get('CartItems', []);
        $this->CartCount = array_sum(array_column($this->CartItems, 'quantity'));
        $this->location = session()->get('selectedLocation', 'Marrakech');

        $this->currentLocation();

        $this->SubTotal = collect($this->CartItems)->sum(function ($item) {
            return $item['product']->PriceOf * $item['quantity'];
        });

        $this->Total = $this->SubTotal + $this->shippingCost;

        sleep(1);
    }

    public function currentLocation()
    {
        $this->shippingCost = NexaShippings::where('City', $this->location)->first()->Cost;
    }

    public function updateLocation($city)
    {
        $this->location = $city;
        session()->put('selectedLocation', $city);
        $this->currentLocation();
    }

    public function changeLocation()
    {
        $this->dispatch('toggleLocationPopup');
    }

    public function toggleCheckout()
    {
        $this->dispatch('toggleCheckout');
    }

    public function removeFromCart($productId)
    {
        $cart = session()->get('CartItems', []);

        if (isset($cart[$productId])) {
            unset($cart[$productId]);
            session()->put('CartItems', $cart);
        }

        $this->refreshCart();
    }

    public function selectSize($productId, $size)
    {
        $cart = session()->get('CartItems', []);
        if (isset($cart[$productId])) {
            $cart[$productId]['size'] = $size;
            session()->put('CartItems', $cart);
        }

        $this->refreshCart();
    }

    public function refreshCart()
    {
        $this->CartItems = session()->get('CartItems', []);
        $this->CartCount = array_sum(array_column($this->CartItems, 'quantity'));
        $this->location = session()->get('selectedLocation', 'Marrakech');

        $this->currentLocation();

        $this->SubTotal = collect($this->CartItems)->sum(function ($item) {
            return $item['product']->PriceOf * $item['quantity'];
        });

        $this->Total = $this->SubTotal + $this->shippingCost;

        $this->dispatch('refreshHeader');
    }

    public function incrementQuantity($productId)
    {
        $cart = session()->get('CartItems', []);
        if (isset($cart[$productId])) {
            $cart[$productId]['quantity']++;
            session()->put('CartItems', $cart);

            $this->refreshCart();
        }
    }

    public function decrementQuantity($productId)
    {
        $cart = session()->get('CartItems', []);
        if (isset($cart[$productId]) && $cart[$productId]['quantity'] > 1) {
            $cart[$productId]['quantity']--;
            session()->put('CartItems', $cart);

            $this->refreshCart();
        }
    }

    public function addToWishlist($productId)
    {
        $product = NexaProducts::find($productId);
        if (!$product) {
            return;
        }

        try {
            $wishlist = session()->get('WishListItems', []);

            $wishlist[$productId] = [
                'product' => $product
            ];

            session()->put('WishListItems', $wishlist);
        } catch (Exception $e) {
        }
    }

    public function placeholder()
    {
        return view('components.layouts.placeholders');
    }

    public function render()
    {
        $this->dispatch('initComponents');
        return view('livewire.products.carts');
    }
}
