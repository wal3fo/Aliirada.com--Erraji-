<?php

namespace App\Livewire\Products;

use Exception;
use Livewire\Component;
use App\Models\NexaProducts;

class Details extends Component
{
    public $product;
    public $productName;
    public $Quantities = [];
    public $selectedSize = null;

    public function mount($productId, $productName)
    {
        $this->product = NexaProducts::with('pictures')->find($productId);
        $this->productName = $productName;

        sleep(1);
    }

    public function addToCart()
    {
        if (!$this->product) {
            return;
        }

        try {
            $cart = session()->get('CartItems', []);
            $quantity = $this->Quantities[$this->product->Id] ?? 1;

            $cart[$this->product->Id] = [
                'product' => $this->product,
                'quantity' => $quantity,
                'size' => $this->selectedSize,
            ];

            session()->put('CartItems', $cart);
            $this->dispatch('refreshHeader');
        } catch (Exception $e) {
        }
    }

    public function addToWishlist()
    {
        if (!$this->product) {
            return;
        }

        try {
            $wishlist = session()->get('WishListItems', []);

            $wishlist[$this->product->Id] = [
                'product' => $this->product,
                'size' => $this->selectedSize,
            ];

            session()->put('WishListItems', $wishlist);
        } catch (Exception $e) {
        }
    }

    public function selectSize($size)
    {
        $this->selectedSize = $size;
    }

    public function refreshCart()
    {
        $this->dispatch('refreshHeader');
    }

    public function placeholder()
    {
        return view('components.layouts.placeholders');
    }

    public function render()
    {
        return view('livewire.products.details');
    }
}
