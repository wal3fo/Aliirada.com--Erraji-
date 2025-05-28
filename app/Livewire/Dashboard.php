<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Lazy;

#[Lazy]
class Dashboard extends Component
{
    public function placeholder() {
        return view('components.layouts.placeholders');
    }

    public function render()
    {
        return view('livewire.dashboard');
    }
}
