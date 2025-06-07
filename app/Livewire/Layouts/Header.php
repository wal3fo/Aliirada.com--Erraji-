<?php

namespace App\Livewire\Layouts;

use Livewire\Component;

class Header extends Component
{
    public $CartItems = [];
    public $CartCount = 0;

    protected $listeners = ['refreshHeader' => 'refreshHeader'];

    public function refreshHeader() {
        $this->CartItems = session()->get('CartItems', []);
        $this->CartCount = count($this->CartItems);
    }

    public function mount() {
        $this->CartItems = session()->get('CartItems', []);
        $this->CartCount = array_sum(array_column($this->CartItems, 'quantity'));
    }

    public function render()
    {
        return view('livewire.layouts.header');
    }
}
