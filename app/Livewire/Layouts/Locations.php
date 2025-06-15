<?php

namespace App\Livewire\Layouts;

use Livewire\Component;
use App\Models\NexaShippings;
use Livewire\Attributes\Lazy;

#[Lazy]
class Locations extends Component
{
    protected $listeners = ['togglePopup' => 'togglePopup'];

    public $showPopup = false;
    public $search = '';
    public $locations = [];
    public $filteredLocations = [];

    public function mount()
    {
        $this->loadLocations();
    }

    public function loadLocations()
    {
        $this->locations = NexaShippings::select('City')->distinct()->get();
        $this->filterLocations();
    }

    public function updatedSearch()
    {
        $this->filterLocations();
    }

    protected function filterLocations()
    {
        if (strlen($this->search) >= 2) {
            $this->filteredLocations = NexaShippings::where('City', 'like', '%' . $this->search . '%')
                ->select('City')
                ->distinct()
                ->get();
        } else {
            $this->filteredLocations = NexaShippings::select('City')->distinct()->get();
        }
    }

    public function togglePopup()
    {
        $this->showPopup = !$this->showPopup;
        if ($this->showPopup) {
            $this->search = '';
            $this->loadLocations();
        }
    }

    public function selectLocation($city)
    {
        $this->dispatch('locationSelected', city: $city);
        $this->showPopup = false;
    }

    public function placeholder()
    {
        return view('components.layouts.placeholders');
    }

    public function render()
    {
        return view('livewire.layouts.locations');
    }
}
