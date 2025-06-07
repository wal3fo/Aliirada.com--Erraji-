<?php

namespace App\Livewire\Layouts;

use App\Models\NexaCategories;
use Livewire\Component;

class Categories extends Component
{
    public $categories = [];
    public $showCategories = false;

    public function mount()
    {
        $this->categories = NexaCategories::orderBy('Id')->get();
    }

    public function hideCategories()
    {
        if ($this->showCategories) {
            $this->showCategories = false;
        }
    }

    public function toggleCategories()
    {
        $this->showCategories = !$this->showCategories;
    }

    public function render()
    {
        return view('livewire.layouts.categories');
    }
}
