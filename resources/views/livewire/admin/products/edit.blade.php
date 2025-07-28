<div>
    <div class="filter-bar justify-content-between bg-dark text-white">
        <span class="filter-bar-title">
            [Management] Create New Product
        </span>
    </div>

    <div class="main-container">
        <form wire:submit="updateProduct" class="product-form">
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
                                        <span wire:loading.remove wire:target="updateProduct">Update Product</span>
                                        <span wire:loading wire:target="updateProduct">
                                            <div class="spinner-border spinner-border-sm" role="status">
                                                <span class="visually-hidden">Loading...</span>
                                            </div>
                                            Updating...
                                        </span>
                                    </button>

                                    <button type="button" class="btn btn-{{ $locked ? 'success' : 'warning' }} ms-2"
                                        wire:loading.attr="disabled" wire:click="toggleLocked">
                                        <span wire:loading.remove
                                            wire:target="toggleLocked">{{ $locked ? 'Enable' : 'Disable' }}</span>
                                        <span wire:loading wire:target="toggleLocked">
                                            <div class="spinner-border spinner-border-sm" role="status">
                                                <span class="visually-hidden">Loading...</span>
                                            </div>
                                            Toggling...
                                        </span>
                                    </button>

                                    <button type="button" class="btn btn-danger ms-2" wire:loading.attr="disabled"
                                        wire:click="toggleDeletion">
                                        <span wire:loading.remove wire:target="toggleDeletion">Delete</span>
                                        <span wire:loading wire:target="toggleDeletion">
                                            <div class="spinner-border spinner-border-sm" role="status">
                                                <span class="visually-hidden">Loading...</span>
                                            </div>
                                            Toggling deletion...
                                        </span>
                                    </button>
                                </div>

                                @if($showDeletion)
                                    <div class="col-12 col-md-12">
                                        <div
                                            class="alert alert-warning d-flex align-items-center justify-content-between m-0">
                                            <div>
                                                <strong>Warning!</strong> This product will be deleted.<br>
                                                Are you sure you want to delete this product?
                                            </div>
                                            <button type="button" class="btn btn-success ms-auto"
                                                wire:loading.attr="disabled" wire:click="deleteProduct">
                                                <span wire:loading.remove wire:target="deleteProduct">Yes. Delete!</span>
                                                <span wire:loading wire:target="deleteProduct">
                                                    <div class="spinner-border spinner-border-sm" role="status">
                                                        <span class="visually-hidden">Loading...</span>
                                                    </div>
                                                    Deleting...
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                @endif
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
                                    <div class="row align-items-center justify-content-center g-4">
                                        @if(isset($existingLanding) && $existingLanding)
                                            <div class="col-12 col-md-4">
                                                <div class="w-100">
                                                    <img src="{{ asset('assets/illustrations/products/' . $existingLanding) }}"
                                                        class="img-fluid rounded border border-2"
                                                        alt="Current Landing Image"
                                                        style="max-height: 160px; object-fit: cover;">
                                                </div>
                                            </div>
                                        @endif

                                        @if($landing)
                                            <div class="col-12 col-md-4">
                                                <div class="text-center w-100">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80"
                                                        fill="#FFD3D3" class="bi bi-arrow-right-square-fill"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M0 14a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2zm4.5-6.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5a.5.5 0 0 1 0-1" />
                                                    </svg>
                                                </div>
                                            </div>

                                            <div class="col-12 col-md-4">
                                                <div class="w-100">
                                                    <img src="{{ $landing->temporaryUrl() }}"
                                                        class="img-fluid rounded border border-2"
                                                        alt="Current Landing Image"
                                                        style="max-height: 160px; object-fit: cover;">
                                                </div>
                                            </div>
                                        @endif

                                        <div class="col-12 col-md-12">
                                            <input type="file" class="form-control" id="landing" wire:model="landing"
                                                accept="image/*">
                                            @error('landing') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <label for="gallery" class="form-label">Gallery Images</label>

                                    <div class="row align-items-center justify-content-center g-4">
                                        @if(isset($existingGallery) && count($existingGallery))
                                            <div class="col-12 col-md-12">
                                                <div class="row g-2">
                                                    @foreach($existingGallery as $img)
                                                        <div class="col-4 col-md-3 col-lg-3">
                                                            <div class="w-100 h-100">
                                                                <img src="{{ asset('assets/illustrations/products/' . $img->Name) }}"
                                                                    alt="Gallery Image" class="img-fluid rounded border"
                                                                    style="object-fit: cover;">
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        @endif

                                        @if($gallery)
                                            <hr>
                                            <div class="col-12 col-md-12">
                                                <div class="row align-items-center justify-content-center g-4">
                                                    @foreach($gallery as $image)
                                                        <div class="col-4 col-md-3 col-lg-3"
                                                            style="width: 80px; height: 80px; overflow: hidden;">
                                                            <img src="{{ $image->temporaryUrl() }}" alt="Gallery preview"
                                                                style="width: 100%; height: 100%; object-fit: cover;">
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        @endif

                                        <div class="col-12 col-md-12">
                                            <input type="file" class="form-control" id="gallery" wire:model="gallery"
                                                accept="image/*" multiple>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>