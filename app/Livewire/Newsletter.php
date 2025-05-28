<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Lazy;

#[Lazy]
class Newsletter extends Component
{
    public function render()
    {
        return view('livewire.newsletter');
    }
}
