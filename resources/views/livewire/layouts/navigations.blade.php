<div class="wire-categories">
    <div class="main-items">
        <a wire:navigate href="{{ route('products.newin') }}">{{ __('messages.header.categories.newin') }}</a>
        <a wire:navigate href="{{ route('products.bestsales') }}">{{ __('messages.header.categories.bestsales') }}</a>
        <a href="#" wire:click="toggleCategories">{{ __('messages.header.categories.categories') }}</a>
    </div>

    <div class="dropdown-menu {{ $showCategories ? 'show' : '' }}">
        @foreach($categories as $category)
            <a wire:navigate href="{{ url('categories') }}/{{ $category->Id }}-{{ Str::slug($category->Name) }}"
                class="dropdown-item">
                {{ $category->Name }}
            </a>
        @endforeach
        <div class="dropdown-divider my-0"></div>
        <a wire:navigate href="{{ route('products') }}" class="dropdown-item text-center">
            {{ __('messages.products.allproducts') }}
        </a>
    </div>
</div>