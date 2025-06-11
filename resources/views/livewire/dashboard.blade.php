<div class="main-grid">
    <div class="row align-items-center justify-content-between">
        @foreach ($categories as $category)
            <div class="col-12 col-md-4 col-lg-4">
                <a href="{{ url('categories') }}/{{ $category->Id }}-{{ Str::slug($category->Name) }}"
                    class="brand-card text-dark">
                    <span class="brand-title">{{ $category->Name }}</span>
                    <div class="brandlanding">
                        <img src="{{ asset('assets/illustrations/categories') }}/{{ $category->Landing }}" width="100%">
                    </div>
                </a>
            </div>
        @endforeach
    </div>
</div>