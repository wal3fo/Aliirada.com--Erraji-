<?php

namespace App\Livewire\Layouts;

use Livewire\Component;
use App\Models\NexaProducts;

class Header extends Component
{
    public $CartItems = [];
    public $CartCount = 0;
    public $WishListItems = [];
    public $WishListCount = 0;

    protected $listeners = ['refreshHeader' => 'refreshCartHeader'];

    public function refreshCartHeader()
    {
        $this->CartItems = collect(session()->get('CartItems', []))->filter(function ($item) {
            return NexaProducts::find($item['product']->Id) !== null;
        })->toArray();


        $this->CartCount = collect($this->CartItems)->sum(function ($item) {
            return $item['quantity'];
        });
    }

    public function mount()
    {
        $this->CartItems = collect(session()->get('CartItems', []))->filter(function ($item) {
            return NexaProducts::find($item['product']->Id) !== null;
        })->toArray();


        $this->CartCount = collect($this->CartItems)->sum(function ($item) {
            return $item['quantity'];
        });

        $this->WishListItems = session()->get('WishListItems', []);
        $this->WishListCount = count($this->WishListItems);
    }

    public function render()
    {
        return view('livewire.layouts.header');
    }
}
