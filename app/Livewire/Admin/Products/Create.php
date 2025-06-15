<?php

namespace App\Livewire\Admin\Products;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\NexaProducts;
use App\Models\NexaCategories;
use App\Models\NexaPictures;
use App\Models\NexaVariants;
use Illuminate\Support\Facades\Storage;
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

        // Create the product
        $product = NexaProducts::create([
            'Name' => $this->name,
            'Description' => nl2br($this->description),
            'Category' => $this->category,
            'Quantity' => $this->quantity,
            'PriceOf' => $this->priceOf,
            'Landing' => $this->uploadImage($this->landing),
            'TimeOf' => now(),
        ]);

        // Save sizes
        if (!empty($this->sizeOf)) {
            foreach ($this->sizeOf as $size) {
                NexaVariants::create([
                    'Name' => $size,
                    'Type' => 'Size',
                    'ProductId' => $product->Id,
                ]);
            }
        }

        // Upload gallery images if any
        if (!empty($this->gallery)) {
            foreach ($this->gallery as $image) {
                NexaPictures::create([
                    'Name' => $this->uploadImage($image),
                    'ProductId' => $product->Id,
                    'TimeOf' => now(),
                ]);
            }
        }

        // Reset form
        $this->reset();
        $this->redirect(route('admin.products.lists'));
        
        // Emit success event
        $this->dispatch('productCreated');
        $this->dispatch('closeModal');
    }

    private function uploadImage($image)
    {
        $filename = time() . '_' . $image->getClientOriginalName();
        $targetPath = public_path('assets/illustrations/products');
        
        // Ensure the directory exists
        if (!File::exists($targetPath)) {
            File::makeDirectory($targetPath, 0755, true);
        }

        // Get the temporary file path
        $tempPath = $image->getRealPath();
        
        // Copy the file instead of moving it
        File::copy($tempPath, $targetPath . '/' . $filename);
        
        // Return just the filename
        return $filename;
    }

    public function render()
    {
        $this->dispatch('initComponents');
        return view('livewire.admin.products.create');
    }
}
