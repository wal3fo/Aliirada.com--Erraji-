<?php

namespace App\Livewire\Products;

use Livewire\Component;
use Livewire\Attributes\Lazy;

#[Lazy]
class Details extends Component
{
    public function render()
    {
        return view('livewire.products.details');
    }
}
