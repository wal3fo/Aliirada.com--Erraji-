<div>
    <div class="main-container d-none">
        <div class="row">
            @foreach ($categories as $category)
                <div class="col-12 col-md-6 col-lg-6">
                    <a wire:navigate href="{{ url('categories') }}/{{ $category->Id }}-{{ Str::slug($category->Name) }}"
                        class="brand-card text-dark">
                        <div class="brandlanding">
                            <img src="{{ asset('assets/illustrations/categories') }}/{{ $category->Landing }}" width="100%">
                        </div>
                        <div class="brand-title">
                            <span>{{ $category->Name }}</span>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>

    <div class="main-container">
        <div class="category-grid">
            @foreach ($categories as $category)
                <a wire:navigate href="{{ url('categories') }}/{{ $category->Id }}-{{ Str::slug($category->Name) }}"
                    class="category-card">
                    <div class="category-image-wrapper">
                        <img src="{{ asset('assets/illustrations/categories') }}/{{ $category->Landing }}"
                            alt="{{ $category->Name }}" class="category-image">
                        <div class="category-overlay"></div>
                    </div>
                    <div class="category-content">
                        <h3 class="category-title">{{ $category->Name }}</h3>
                        <div class="category-cta">{{ __('messages.dashboard.explorecollection') }}</div>
                    </div>
                    <div class="category-holographic"></div>
                </a>
            @endforeach
        </div>
    </div>
</div>