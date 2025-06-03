<?php

namespace App\Livewire\Products;

use App\Models\NexaCategories;
use App\Models\NexaProducts;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Lazy;

#[Lazy]
class Items extends Component
{
    use WithPagination;

    public $perPage = 4;

    protected $updatesQueryString = ['page'];

    public function loadMore()
    {
        $this->placeholder();
        $this->perPage += 4;
    }

    public function placeholder()
    {
        return view('components.layouts.placeholders');
    }

    public function render()
    {
        $Products = NexaProducts::paginate($this->perPage);
        
        $Categories = NexaCategories::whereIn('Id', $Products->pluck('Category')->unique())
            ->pluck('Name', 'Id');

        return view('livewire.products.items', [
            'Products' => $Products,
            'Categories' => $Categories,
        ]);
    }
}
