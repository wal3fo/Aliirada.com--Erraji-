<?php

namespace App\Livewire\Layouts;

use Str;
use Livewire\Component;
use App\Models\NexaProducts;

class SearchBar extends Component
{
    public $search = '';
    public $showResults = false;
    public $results = [];

    public function updatedSearch()
    {
        if (strlen($this->search) >= 2) {
            $this->results = NexaProducts::where('Name', 'like', '%' . $this->search . '%')
                ->orWhere('Description', 'like', '%' . $this->search . '%')
                ->take(5)
                ->get();
            $this->showResults = true;
        } else {
            $this->results = [];
            $this->showResults = false;
        }
    }

    public function showProductDetails($productId)
    {
        $product = NexaProducts::find($productId);

        if ($product) {
            $this->redirectRoute('products.details', ['productId' => $product->Id, 'productName' => Str::slug($product->Name)]);
        }
    }

    public function render()
    {
        return view('livewire.layouts.search-bar');
    }
}
