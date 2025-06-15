<?php

namespace App\Livewire\Admin\Products;

use Str;
use Livewire\Component;
use Livewire\Attributes\Lazy;

use App\Models\NexaProducts;

#[Lazy]
class Lists extends Component
{
    public $Products;

    public function mount()
    {
        $this->Products = NexaProducts::orderByDesc('Id')->get();
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
        return view('livewire.admin.products.lists');
    }
}
