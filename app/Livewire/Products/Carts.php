<?php

namespace App\Livewire\Products;

use Livewire\Component;
use Livewire\Attributes\Lazy;

#[Lazy]
class Carts extends Component
{
    public $CartItems = [];
    public $CartCount = 0;

    public function mount() {
        $this->CartItems = session()->get('CartItems', []);
        $this->CartCount = array_sum(array_column($this->CartItems, 'quantity'));
    }

    public function removeFromCart($productId)
    {
        $cart = session()->get('CartItems', []);

        if (isset($cart[$productId])) {
            unset($cart[$productId]);
            session()->put('CartItems', $cart);
        }

        $this->refreshCart();
        $this->dispatch('refreshHeader');
    }

    public function refreshCart() {
        $this->CartItems = session()->get('CartItems', []);
        $this->CartCount = array_sum(array_column($this->CartItems, 'quantity'));
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

    public function placeholder()
    {
        return view('components.layouts.placeholders');
    }

    public function render()
    {
        return view('livewire.products.carts');
    }
}
