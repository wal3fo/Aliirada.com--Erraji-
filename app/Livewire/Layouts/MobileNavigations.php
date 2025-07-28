<?php

namespace App\Livewire\Layouts;

use Livewire\Component;
use App\Models\NexaCategories;

class MobileNavigations extends Component
{
    public $categories = [];
    public $showCategories = false;
    public $showMobileNavigations = false;

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

    public function toggleMobileNavigations()
    {
        $this->showMobileNavigations = !$this->showMobileNavigations;
    }

    public function closeMobileNavigations()
    {
        $this->showMobileNavigations = false;
    }

    public function render()
    {
        return view('livewire.layouts.mobile-navigations');
    }
}
