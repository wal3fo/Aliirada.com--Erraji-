<?php

namespace App\Livewire\Products;

use Livewire\Component;
use Livewire\Attributes\Lazy;

use App\Models\NexaProducts;

#[Lazy]
class WishLists extends Component
{
    public $WishListItems = [];
    public $WishListCount = 0;

    public function mount()
    {
        $this->WishListItems = session()->get('WishListItems', []);
        $this->WishListCount = count($this->WishListItems);
    }

    public function removeFromWishList($productId)
    {
        $wishList = session()->get('WishListItems', []);

        if (isset($wishList[$productId])) {
            unset($wishList[$productId]);
            session()->put('WishListItems', $wishList);
        }

        $this->refreshWishList();
    }

    public function refreshWishList()
    {
        $this->WishListItems = session()->get('WishListItems', []);
        $this->WishListCount = array_sum(array_column($this->WishListItems, 'quantity'));

        $this->dispatch('refreshHeader');
    }

    public function placeholder()
    {
        return view('components.layouts.placeholders');
    }

    public function render()
    {
        return view('livewire.products.wish-lists');
    }
}
