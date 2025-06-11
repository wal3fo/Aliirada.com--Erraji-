<?php

namespace App\Livewire\Products;

use Livewire\Component;
use Livewire\Attributes\Lazy;

use App\Models\NexaProducts;

#[Lazy]
class Details extends Component
{
    public $product;
    public $productName;
    public $quantity = 1;

    public function mount($productId, $productName)
    {
        $this->product = NexaProducts::find($productId);
        $this->productName = $productName;

        if (!$this->product) {
            abort(404, 'Product not found');
        }
    }

    public function incrementQuantity()
    {
        if ($this->quantity < 10) {
            $this->quantity++;
        }
    }

    public function decrementQuantity()
    {
        if ($this->quantity > 1) {
            $this->quantity--;
        }
    }

    public function addToCart()
    {
        if (!$this->selectedVariant || !$this->selectedSize) {
            $this->dispatch('show-error', 'Please select both color and size');
            return;
        }

        // Logic to add to cart
    }

    public function addToWishlist()
    {
        if (!$this->selectedVariant) {
            $this->dispatch('show-error', 'Please select a color');
            return;
        }
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
