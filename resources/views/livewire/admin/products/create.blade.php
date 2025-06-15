<div>
    <div class="filter-bar justify-content-between bg-dark text-white">
        <span class="filter-bar-title">
            [Management] Create New Product
        </span>
    </div>

    <div class="main-container">
        <form wire:submit="createProduct" class="product-form">
            <div class="row">
                <!-- Basic Information -->
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Basic Information</h5>
                        </div>
                        <div class="card-body">
                            <dov class="row g-4">
                                <div class="col-12 col-md-12">
                                    <label for="name" class="form-label">Product Name</label>
                                    <input type="text" class="form-control" id="name" wire:model="name" required>
                                </div>

                                <div class="col-12 col-md-12">
                                    <label for="description" class="form-label">Description</label>
                                    <textarea class="form-control" id="description" wire:model="description" rows="4"
                                        required></textarea>
                                </div>

                                <div class="col-12 col-md-6">
                                    <label for="category" class="form-label">Category</label>
                                    <select wire:model="category" required>
                                        <option value="">Select a category</option>
                                        @foreach($categories as $cat)
                                            <option value="{{ $cat->Id }}">{{ $cat->Name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-12 col-md-3">
                                    <label for="quantity" class="form-label">Quantity</label>
                                    <input type="number" class="form-control" wire:model="quantity" min="0" value="1"
                                        required>
                                </div>

                                <div class="col-12 col-md-3">
                                    <label for="priceOf" class="form-label">Price (MAD)</label>
                                    <input type="number" class="form-control" wire:model="priceOf" min="0" step="0.01"
                                        value="0" required>
                                </div>

                                <div class="col-12 col-md-12">
                                    <label for="sizes" class="form-label">Sizes</label>
                                    <select wire:model="sizeOf" multiple>
                                        <option disabled>Select a size</option>
                                        <option value="S">S</option>
                                        <option value="M">M</option>
                                        <option value="L">L</option>
                                        <option value="XL">XL</option>
                                        <option value="XXL">XXL</option>
                                        <option value="XXXL">XXXL</option>
                                        <option value="XXXXL">XXXXL</option>
                                    </select>
                                </div>

                                <!-- Form Actions -->
                                <div class="col-12 col-md-12 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-dark" wire:loading.attr="disabled">
                                        <span wire:loading.remove wire:target="createProduct">Create Product</span>
                                        <span wire:loading wire:target="createProduct">
                                            <div class="spinner-border spinner-border-sm" role="status">
                                                <span class="visually-hidden">Loading...</span>
                                            </div>
                                            Creating...
                                        </span>
                                    </button>
                                </div>
                            </dov>
                        </div>
                    </div>
                </div>

                <!-- Media Upload -->
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Media</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="landing" class="form-label">Landing Image</label>
                                    <input type="file" class="form-control" id="landing" wire:model="landing"
                                        accept="image/*" required>
                                    @error('landing') <span class="text-danger">{{ $message }}</span> @enderror

                                    @if($landing)
                                        <div class="mt-2">
                                            <img src="{{ $landing->temporaryUrl() }}" class="img-preview"
                                                alt="Landing preview"
                                                style="max-width: 100%; height: 150px; object-fit: cover;">
                                        </div>
                                    @endif
                                </div>

                                <div class="col-md-12">
                                    <label for="gallery" class="form-label">Gallery Images</label>
                                    <input type="file" class="form-control" id="gallery" wire:model="gallery"
                                        accept="image/*" multiple>

                                    @if($gallery)
                                        <div class="mt-2 d-flex gap-2 flex-wrap">
                                            @foreach($gallery as $image)
                                                <div style="width: 80px; height: 80px; overflow: hidden;">
                                                    <img src="{{ $image->temporaryUrl() }}" alt="Gallery preview"
                                                        style="width: 100%; height: 100%; object-fit: cover;">
                                                </div>
                                            @endforeach
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>