<?php

namespace App\Livewire\Layouts;

use Livewire\Component;

class Header extends Component
{
    public $CartItems = [];
    public $CartCount = 0;

    public function mount() {
        $this->CartItems = session()->get('CartItems', []);
        $this->CartCount = count($this->CartItems);
    }

    public function render()
    {
        return view('livewire.layouts.header');
    }
}
