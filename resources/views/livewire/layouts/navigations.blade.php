<div class="wire-categories">
    <div class="main-items">
        <a wire:navigate href="{{ route('products.newin') }}">New In</a>
        <a wire:navigate href="{{ route('products.bestsellers') }}">Best Sellers</a>
        <a href="#" wire:click="toggleCategories">Categories</a>
        <a wire:navigate href="#">Magazine</a>
    </div>

    <div class="dropdown-menu p-2 d-{{ $showCategories ? 'block' : 'none' }}">
        <div class="row gy-0">
            <div class="col-12">
                <a wire:navigate href="{{ route('products') }}"
                    class="dropdown-item btn btn-dark text-center border rounded cursor-pointer">
                    <span class="text-nowrap text-truncate">All Products</span>
                </a>
            </div>
            @foreach($categories as $category)
                <div class="col-12 col-md-6 col-lg-4">
                    <a wire:navigate href="{{ url('categories') }}/{{ $category->Id }}-{{ Str::slug($category->Name) }}"
                        class="dropdown-item btn btn-dark text-center border rounded cursor-pointer">
                        <span class="text-nowrap text-truncate">{{ $category->Name }}</span>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</div>