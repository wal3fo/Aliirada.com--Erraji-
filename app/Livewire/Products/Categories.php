<?php

namespace App\Livewire\Products;

use Livewire\Component;
use Livewire\WithPagination;

use App\Models\NexaProducts;
use App\Models\NexaCategories;

class Categories extends Component
{
    use WithPagination;

    public $categoryId;
    public $categoryName;
    public $perPage = 4;

    protected $updatesQueryString = ['page'];

    public function loadMore()
    {
        $this->placeholder();
        $this->perPage += 4;
    }

    public function addToCart($productId)
    {
        $product = NexaProducts::find($productId);

        $cart = session()->get('CartItems', []);

        $cart[$productId] = $product;
        session()->put('CartItems', $cart);

        $this->dispatch('refreshHeader');
    }

    public function placeholder()
    {
        return view('components.layouts.placeholders');
    }

    public function mount($categoryId, $categoryName) {
        $this->categoryId = $categoryId;
        $this->categoryName = $categoryName;
    }

    public function render()
    {
        $Products = NexaProducts::where('Category', $this->categoryId)->paginate($this->perPage);

        return view('livewire.products.categories', [
            'Products' => $Products,
        ]);
    }
}
