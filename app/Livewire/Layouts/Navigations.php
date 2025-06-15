<?php

namespace App\Livewire\Layouts;

use Livewire\Component;
use App\Models\NexaCategories;

class Navigations extends Component
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
        return view('livewire.layouts.navigations');
    }
}
