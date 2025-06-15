<?php

namespace App\Livewire\Products;

use Str;
use Livewire\Component;
use Livewire\Attributes\Lazy;

use App\Models\NexaProducts;
use App\Models\NexaShippings;

#[Lazy]
class Carts extends Component
{
    public $CartItems = [];
    public $CartCount = 0;

    public $location = 'Marrakech';
    public $shippingCost = 0;

    protected $listeners = ['locationSelected' => 'updateLocation'];

    public function mount()
    {
        $this->CartItems = session()->get('CartItems', []);
        $this->CartCount = array_sum(array_column($this->CartItems, 'quantity'));
        $this->location = session()->get('selectedLocation', 'Marrakech');
        $this->currentLocation();
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
        $this->dispatch('togglePopup');
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

    public function refreshCart()
    {
        $this->CartItems = session()->get('CartItems', []);
        $this->CartCount = array_sum(array_column($this->CartItems, 'quantity'));

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

    public function showProductDetails($productId)
    {
        $product = NexaProducts::find($productId);

        if ($product) {
            $this->redirectRoute('products.details', ['productId' => $product->Id, 'productName' => Str::slug($product->Name)]);
        }
    }

    public function placeholder()
    {
        return view('components.layouts.placeholders');
    }

    public function render()
    {
        return view('livewire.products.carts');
    }
}
