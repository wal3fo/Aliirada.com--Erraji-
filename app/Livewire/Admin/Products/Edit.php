<?php

namespace App\Livewire\Admin\Products;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\NexaProducts;
use App\Models\NexaCategories;
use App\Models\NexaPictures;
use App\Models\NexaVariants;
use Illuminate\Support\Facades\File;

class Edit extends Component
{
    use WithFileUploads;

    public $productId;
    public $name;
    public $description;
    public $category;
    public $quantity;
    public $priceOf;
    public $locked;
    public $showDeletion;
    public $landing;
    public $gallery = [];
    public $categories;
    public $sizeOf = [];
    public $existingLanding;
    public $existingGallery = [];
    public $existingSizes = [];

    protected $rules = [
        'name' => 'required|min:3|max:255',
        'description' => 'required|min:10',
        'category' => 'required|exists:nexa_categories,Id',
        'quantity' => 'required|integer|min:0',
        'priceOf' => 'required|numeric|min:0',
        'landing' => 'nullable|image|max:2048', // Optional for edit
        'gallery.*' => 'image|max:2048',
        'sizeOf' => 'array',
        'sizeOf.*' => 'in:S,M,L,XL,XXL,XXXL,XXXXL',
    ];

    public function mount($productId, $productName)
    {
        $this->productId = $productId;
        $product = NexaProducts::findOrFail($productId);
        $this->name = $product->Name;
        $this->description = strip_tags($product->Description);
        $this->category = $product->Category;
        $this->quantity = $product->Quantity;
        $this->priceOf = $product->PriceOf;
        $this->locked = $product->Locked;
        $this->existingLanding = $product->Landing;
        $this->categories = NexaCategories::all();
        $this->existingGallery = NexaPictures::where('ProductId', $productId)->get();
        $this->existingSizes = NexaVariants::where('ProductId', $productId)->where('Type', 'Size')->pluck('Name')->toArray();
        $this->sizeOf = $this->existingSizes;
    }

    public function updateProduct()
    {
        $this->validate();
        $product = NexaProducts::findOrFail($this->productId);
        if ($this->landing) {
            $landing = $this->uploadImage($this->landing);
            $product->Landing = $landing;
        }

        $product->Name = $this->name;
        $product->Description = nl2br($this->description);
        $product->Category = $this->category;
        $product->Quantity = $this->quantity;
        $product->PriceOf = $this->priceOf;
        $product->Locked = $this->locked;
        $product->save();

        NexaVariants::where('ProductId', $this->productId)->where('Type', 'Size')->delete();
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

    public function toggleLocked()
    {
        $this->locked = !$this->locked;
        
        $product = NexaProducts::findOrFail($this->productId);
        $product->Locked = $this->locked;
        $product->save();
    }

    public function toggleDeletion()
    {
        $this->showDeletion = !$this->showDeletion;
    }

    public function deleteProduct()
    {
        $product = NexaProducts::findOrFail($this->productId);
        $product->delete();
        $this->redirect(route('admin.lists'));
    }

    public function render()
    {
        $this->dispatch('initComponents');
        return view('livewire.admin.products.edit', [
            'categories' => $this->categories,
            'existingLanding' => $this->existingLanding,
            'existingGallery' => $this->existingGallery,
            'existingSizes' => $this->existingSizes,
            'locked' => $this->locked,
        ]);
    }
}
