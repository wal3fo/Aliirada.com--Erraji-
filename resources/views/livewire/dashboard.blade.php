<div>
    <div class="main-grid">
        <div class="row">
            @foreach ($categories as $category)
                <div class="col-12 col-md-4">
                    <a href="{{ url('categories') }}/{{ $category->Id }}-{{ Str::slug($category->Name) }}"
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
</div>