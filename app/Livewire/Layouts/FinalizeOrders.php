<?php

namespace App\Livewire\Layouts;

use Livewire\Component;

class FinalizeOrders extends Component
{
    public $CartItems = [];
    public $CartCount = 0;
    public $CartAmount = 0;

    public function mount()
    {
        $this->CartItems = session()->get('CartItems', []);
        $this->CartCount = array_sum(array_column($this->CartItems, 'quantity'));
        $this->CartAmount = number_format(collect($this->CartItems)->sum(function ($item) {
            return $item['product']->PriceOf * $item['quantity'];
        }), 2, '.', ',');
    }

    public function render()
    {
        return view('livewire.layouts.finalize-orders');
    }
}
