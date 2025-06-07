<?php

namespace App\Livewire\Products;

use Livewire\Component;
use Livewire\Attributes\Lazy;

use App\Models\NexaProducts;

#[Lazy]
class Details extends Component
{
    public $product;
    public $selectedVariant = null;
    public $selectedSize = null;
    public $quantity = 1;
    public $availableSizes = [];

    public function mount($productId)
    {
        $this->product = NexaProducts::find($productId);

        if (!$this->product) {
            abort(404, 'Product not found');
        }

        //$this->initializeVariants();
    }

    protected function initializeVariants()
    {
        if ($this->product && $this->product->variants && $this->product->variants->count() > 0) {
            // Set default variant (first available)
            $this->selectedVariant = $this->product->variants->first();
            $this->updateAvailableSizes();
        }
    }

    public function selectVariant($variantId)
    {
        if (!$this->product || !$this->product->variants) {
            return;
        }

        $this->selectedVariant = $this->product->variants->firstWhere('id', $variantId);
        $this->selectedSize = null; // Reset size when variant changes
        $this->updateAvailableSizes();
    }

    public function selectSize($sizeCode)
    {
        $this->selectedSize = $sizeCode;
    }

    public function updateAvailableSizes()
    {
        if ($this->selectedVariant && $this->selectedVariant->sizes) {
            $this->availableSizes = $this->selectedVariant->sizes->map(function ($size) {
                return [
                    'code' => $size->code,
                    'name' => $size->name,
                    'in_stock' => $size->stock > 0
                ];
            })->toArray();
        } else {
            $this->availableSizes = [];
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

    public function openSizeGuide()
    {
        $this->dispatch('open-size-guide');
    }

    public function addToCart()
    {
        if (!$this->selectedVariant || !$this->selectedSize) {
            $this->dispatch('show-error', 'Please select both color and size');
            return;
        }

        // Add to cart logic here
        $this->dispatch('add-to-cart', [
            'product_id' => $this->product->id,
            'variant_id' => $this->selectedVariant->id,
            'size' => $this->selectedSize,
            'quantity' => $this->quantity
        ]);
    }

    public function addToWishlist()
    {
        if (!$this->selectedVariant) {
            $this->dispatch('show-error', 'Please select a color');
            return;
        }

        // Add to wishlist logic here
        $this->dispatch('add-to-wishlist', [
            'product_id' => $this->product->id,
            'variant_id' => $this->selectedVariant->id
        ]);
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
