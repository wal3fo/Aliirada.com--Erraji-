<?php

namespace App\Livewire\Products;

use Livewire\Component;
use Livewire\Attributes\Lazy;

#[Lazy]
class Items extends Component
{
    public function placeholder() {
        return view('components.layouts.placeholders');
    }
    
    public function render()
    {
        return view('livewire.products.items');
    }
}
