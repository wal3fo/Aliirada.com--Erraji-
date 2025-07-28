<?php

namespace App\Livewire\Admin\Products;

use Livewire\Component;
use Livewire\WithFileUploads;

use App\Models\NexaProducts;
use App\Models\NexaPictures;
use App\Models\NexaVariants;
use App\Models\NexaCategories;

use Illuminate\Support\Facades\File;

class Create extends Component
{
    use WithFileUploads;

    public $name;
    public $description;
    public $category;
    public $quantity;
    public $priceOf;
    public $landing;
    public $gallery = [];
    public $categories;
    public $sizeOf = [];

    protected $rules = [
        'name' => 'required|min:3|max:255',
        'description' => 'required|min:10',
        'category' => 'required|exists:nexa_categories,Id',
        'quantity' => 'required|integer|min:0',
        'priceOf' => 'required|numeric|min:0',
        'landing' => 'required|image|max:2048', // 2MB Max
        'gallery.*' => 'image|max:2048', // 2MB Max per image
        'sizeOf' => 'array',
        'sizeOf.*' => 'in:S,M,L,XL,XXL,XXXL,XXXXL',
    ];

    public function mount()
    {
        $this->categories = NexaCategories::all();
    }

    public function createProduct()
    {
        $this->validate();

        $product = NexaProducts::create([
            'Name' => $this->name,
            'Description' => nl2br($this->description),
            'Category' => $this->category,
            'Quantity' => $this->quantity,
            'PriceOf' => $this->priceOf,
            'Landing' => $this->uploadImage($this->landing),
            'TimeOf' => now(),
        ]);

        if (!empty($this->sizeOf)) {
            foreach ($this->sizeOf as $size) {
                NexaVariants::create([
                    'Name' => $size,
                    'Type' => 'Size',
                    'ProductId' => $product->Id,
                ]);
            }
        }

        if (!empty($this->gallery)) {
            foreach ($this->gallery as $image) {
                NexaPictures::create([
                    'Name' => $this->uploadImage($image),
                    'ProductId' => $product->Id,
                    'TimeOf' => now(),
                ]);
            }
        }

        $this->reset();
        $this->redirect(route('admin.lists'));
    }

    private function uploadImage($image)
    {
        $filename = time() . '_' . $image->getClientOriginalName();
        $targetPath = public_path('assets/illustrations/products');
        
        if (!File::exists($targetPath)) {
            File::makeDirectory($targetPath, 0755, true);
        }

        $tempPath = $image->getRealPath();
        
        File::copy($tempPath, $targetPath . '/' . $filename);
        
        return $filename;
    }

    public function render()
    {
        $this->dispatch('initComponents');
        return view('livewire.admin.products.create');
    }
}
