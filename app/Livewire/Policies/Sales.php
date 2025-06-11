<?php

namespace App\Livewire\Policies;

use Livewire\Component;
use Livewire\Attributes\Lazy;

#[Lazy]
class Sales extends Component
{
    public function placeholder()
    {
        return view('components.layouts.placeholders');
    }

    public function render()
    {
        return view('livewire.policies.sales');
    }
}
