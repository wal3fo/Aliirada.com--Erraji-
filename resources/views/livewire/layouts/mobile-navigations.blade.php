<div class="wire-mobile-navigations">
    <button class="btn bg-transparent ps-0 btn-sm" wire:click="toggleMobileNavigations" wire:click.away="closeMobileNavigations" href="#">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-list"
            viewBox="0 0 16 16">
            <path fill-rule="evenodd"
                d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5" />
        </svg>
    </button>

    <div class="dropdown-menu {{ $showMobileNavigations ? 'show' : '' }}">
        <a class="dropdown-item" wire:navigate
            href="{{ route('products.newin') }}">{{ __('messages.header.categories.newin') }}</a>
        <a class="dropdown-item" wire:navigate
            href="{{ route('products.bestsales') }}">{{ __('messages.header.categories.bestsales') }}</a>
        <a class="dropdown-item" href="#"
            wire:click="toggleCategories">{{ __('messages.header.categories.categories') }}</a>

        <div class="dropdown-menu {{ $showCategories ? 'show' : '' }} position-relative">
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
</div>