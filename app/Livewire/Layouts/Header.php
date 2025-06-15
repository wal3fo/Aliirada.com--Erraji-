<?php

namespace App\Livewire\Layouts;

use Livewire\Component;

class Header extends Component
{
    public $CartItems = [];
    public $CartCount = 0;
    public $WishListItems = [];
    public $WishListCount = 0;

    protected $listeners = ['refreshHeader' => 'refreshCartHeader'];

    public function refreshCartHeader() {
        $this->CartItems = session()->get('CartItems', []);
        $this->CartCount = array_sum(array_column($this->CartItems, 'quantity'));
    }

    public function mount() {
        $this->CartItems = session()->get('CartItems', []);
        $this->CartCount = array_sum(array_column($this->CartItems, 'quantity'));

        $this->WishListItems = session()->get('WishListItems', []);
        $this->WishListCount = count($this->WishListItems);
    }

    public function render()
    {
        return view('livewire.layouts.header');
    }
}
