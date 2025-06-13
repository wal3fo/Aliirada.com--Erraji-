<?php

namespace App\Livewire\Products;

use Str;
use Livewire\Component;
use Livewire\Attributes\Lazy;

use App\Models\NexaProducts;
use Livewire\WithPagination;
use App\Models\NexaCategories;

#[Lazy]
class NewIn extends Component
{
    use WithPagination;

    public $perPage = 8;
    public $quantities = [];

    protected $updatesQueryString = ['page'];

    public function loadMore()
    {
        $this->placeholder();
        $this->perPage += 4;
    }

    public function incrementQuantity($productId)
    {
        if (isset($this->quantities[$productId])) {
            $this->quantities[$productId]++;
        } else {
            $this->quantities[$productId] = 2;
        }
    }

    public function decrementQuantity($productId)
    {
        if (isset($this->quantities[$productId]) && $this->quantities[$productId] > 1) {
            $this->quantities[$productId]--;
        }
    }

    public function addToCart($productId)
    {
        $product = NexaProducts::find($productId);
        $cart = session()->get('CartItems', []);
        $quantity = $this->quantities[$productId] ?? 1;

        $cart[$productId] = [
            'product' => $product,
            'quantity' => $quantity,
        ];

        session()->put('CartItems', $cart);

        $this->dispatch('refreshHeader');
    }

    public function showProductDetails($productId)
    {
        $product = NexaProducts::find($productId);

        if ($product) {
            $this->redirectRoute('products.details', ['productId' => $product->Id, 'productName' => Str::slug($product->Name)]);
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
        // Get the latest products
        $Products = NexaProducts::orderByDesc('TimeOf')->paginate($this->perPage);

        // Initialize quantities for each product if not already set
        foreach ($Products as $product) {
            if (!isset($this->quantities[$product->Id])) {
                $this->quantities[$product->Id] = 1;
            }
        }

        $Categories = NexaCategories::whereIn('Id', $Products->pluck('Category')->unique())
            ->pluck('Name', 'Id');

        return view('livewire.products.new-in', [
            'Products' => $Products,
            'Categories' => $Categories,
        ]);
    }
}
