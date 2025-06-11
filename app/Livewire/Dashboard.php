<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Lazy;
use App\Models\NexaCategories;

#[Lazy]
class Dashboard extends Component
{
    public $categories = [];

    public function mount()
    {
        $this->categories = NexaCategories::orderBy('Id')->get();
    }

    public function placeholder() {
        return view('components.layouts.placeholders');
    }

    public function render()
    {
        return view('livewire.dashboard');
    }
}
