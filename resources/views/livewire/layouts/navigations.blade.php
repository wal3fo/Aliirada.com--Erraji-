<div class="wire-categories">
    <div class="main-items">
        <a wire:navigate href="{{ route('products.newin') }}">{{ __('messages.header.categories.newin') }}</a>
        <a wire:navigate href="{{ route('products.bestsales') }}">{{ __('messages.header.categories.bestsales') }}</a>
        <a href="#" wire:click="toggleCategories">{{ __('messages.header.categories.categories') }}</a>
    </div>

    <div class="dropdown-menu p-2 d-{{ $showCategories ? 'block' : 'none' }}">
        <div class="row g-0">
            <div class="col-12">
                <a wire:navigate href="{{ route('products') }}" class="btn btn-dark text-white w-100">
                    <span class="text-uppercase text-nowrap text-truncate">
                        {{ __('messages.products.allproducts') }}
                    </span>
                </a>
            </div>
            @foreach($categories as $category)
                <div class="col-12 col-md-6 col-lg-4">
                    <a wire:navigate href="{{ url('categories') }}/{{ $category->Id }}-{{ Str::slug($category->Name) }}"
                        class="btn btn-outline-dark w-100">
                        <span class="text-nowrap text-truncate">{{ $category->Name }}</span>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</div>