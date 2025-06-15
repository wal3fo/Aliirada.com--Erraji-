<div class="wire-categories">
    <a class="nav-link" wire:click="toggleCategories" wire:click.away="hideCategories">Categories</a>

    <div class="dropdown-menu rounded-top-0 shadow-none overflow-hidden d-{{ $showCategories ? 'block' : 'none' }} position-absolute">
        @foreach($categories as $category)
        <a wire:navigate href="{{ url('categories') }}/{{ $category->Id }}-{{ Str::slug($category->Name) }}" class="dropdown-item cursor-pointer">
            <span class="text-nowrap text-truncate">{{ $category->Name }}</span>
        </a>
        @endforeach
        </a>
    </div>
</div>