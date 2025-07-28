<?php

namespace App\Livewire\Products;

use Str;
use Exception;
use Livewire\Component;
use Livewire\Attributes\Lazy;

use App\Models\NexaProducts;
use Livewire\WithPagination;
use App\Models\NexaCategories;

#[Lazy]
class BestSales extends Component
{
    use WithPagination;

    public $perPage = 8;
    public $selectedSizes = [];

    protected $updatesQueryString = ['page'];

    public function mount()
    {
        sleep(1);
    }

    public function loadMore()
    {
        $this->perPage += 4;
    }

    public function selectSize($productId, $size)
    {
        $this->selectedSizes[$productId] = $size;
    }

    public function addToCart($productId)
    {
        $product = NexaProducts::find($productId);
        $cart = session()->get('CartItems', []);
        $selectedSize = $this->selectedSizes[$productId] ?? null;

        $cart[$productId] = [
            'product' => $product,
            'quantity' => 1,
            'size' => $selectedSize,
        ];

        session()->put('CartItems', $cart);

        $this->dispatch('refreshHeader');
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
        $Products = NexaProducts::where('Locked', 0)
            ->orderByDesc('Popularity')->paginate($this->perPage);
        $Categories = NexaCategories::whereIn('Id', $Products->pluck('Category')->unique())
            ->pluck('Name', 'Id');

        return view('livewire.products.best-sales', [
            'Products' => $Products,
            'Categories' => $Categories,
        ]);
    }
}
