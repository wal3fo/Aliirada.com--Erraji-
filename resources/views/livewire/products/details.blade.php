<section class="product-section">
    <div class="product-container">
        <!-- Product Images with Thumbnails -->
        <div class="product-images">
            <div class="product-main-image">
                <img src="{{ $selectedVariant?->main_image ?? $product->Landing }}" 
                     alt="{{ $product->Name }}" 
                     id="main-product-image">
            </div>
            <div class="product-thumbnails">
                @if($selectedVariant && $selectedVariant->images)
                    @foreach($selectedVariant->images as $image)
                        <div class="thumbnail {{ $loop->first ? 'active' : '' }}" 
                             data-image="{{ $image['full'] }}"
                             data-variant="{{ $selectedVariant->color }}">
                            <img src="{{ $image['thumbnail'] }}" 
                                 alt="{{ $product->Name }} - {{ $loop->iteration }}">
                        </div>
                    @endforeach
                @else
                    <div class="thumbnail active">
                        <img src="{{ $product->Landing }}" 
                             alt="{{ $product->Name }}">
                    </div>
                @endif
            </div>
        </div>

        <div class="product-details">
            <div class="product-header">
                <h1 class="product-title">{{ $product->Name }}</h1>
                <div class="product-price">
                    <span class="current-price">USD {{ number_format($selectedVariant?->price ?? $product->price ?? 0, 2) }}</span>
                    @if($selectedVariant && $selectedVariant->original_price > $selectedVariant->price)
                        <span class="original-price">USD {{ number_format($selectedVariant->original_price, 2) }}</span>
                        <span class="discount-badge">-{{ round((($selectedVariant->original_price - $selectedVariant->price) / $selectedVariant->original_price) * 100) }}%</span>
                    @endif
                </div>
                <div class="product-rating">
                    <div class="stars">
                        @for($i = 1; $i <= 5; $i++)
                            <span class="star {{ $i <= ($product->rating ?? 0) ? 'filled' : '' }}">★</span>
                        @endfor
                    </div>
                    <a href="#reviews" class="review-count">({{ $product->review_count ?? 0 }} reviews)</a>
                </div>
            </div>

            <div class="product-options">
                @if($product->variants && $product->variants->count() > 0)
                    <div class="option-group color-options">
                        <label>Color: <span class="selected-color">{{ $selectedVariant?->color_name ?? 'Select Color' }}</span></label>
                        <div class="color-grid">
                            @foreach($product->variants as $variant)
                                <button class="color-option {{ ($selectedVariant?->id ?? '') === $variant->id ? 'active' : '' }}"
                                        data-color="{{ $variant->color }}"
                                        data-color-name="{{ $variant->color_name }}"
                                        data-variant-id="{{ $variant->id }}"
                                        style="background-color: {{ $variant->color_hex }}; {{ $variant->color === 'white' ? 'border: 1px solid #ddd;' : '' }}"
                                        wire:click="selectVariant('{{ $variant->id }}')">
                                    <span class="color-tooltip">{{ $variant->color_name }}</span>
                                </button>
                            @endforeach
                        </div>
                    </div>

                    <div class="option-group size-options">
                        <label>Size: <span class="selected-size">{{ $selectedSize ?? 'Select Size' }}</span></label>
                        <div class="size-grid">
                            @foreach($availableSizes as $size)
                                <button class="size-option {{ ($selectedSize ?? '') === $size['code'] ? 'active' : '' }}"
                                        data-size="{{ $size['code'] }}"
                                        data-size-name="{{ $size['name'] }}"
                                        wire:click="selectSize('{{ $size['code'] }}')"
                                        {{ !$size['in_stock'] ? 'disabled' : '' }}>
                                    {{ $size['name'] }}
                                    @if(!$size['in_stock'])
                                        <span class="out-of-stock-label">Out of stock</span>
                                    @endif
                                </button>
                            @endforeach
                        </div>
                        <a href="#" class="size-guide-link" wire:click.prevent="openSizeGuide">Size guide</a>
                    </div>

                    <div class="quantity-selector">
                        <label>Quantity:</label>
                        <div class="quantity-control">
                            <button class="quantity-btn minus" wire:click="decrementQuantity">-</button>
                            <input type="number" value="{{ $quantity }}" min="1" max="10" class="quantity-input" readonly>
                            <button class="quantity-btn plus" wire:click="incrementQuantity">+</button>
                        </div>
                    </div>

                    <button class="add-to-bag" wire:click="addToCart">Add to bag</button>
                    <button class="wishlist-btn" wire:click="addToWishlist">
                        <span class="heart-icon">♥</span> Add to wishlist
                    </button>
                @else
                    <div class="no-variants-message">
                        <p>This product is currently unavailable.</p>
                    </div>
                @endif
            </div>

            <div class="product-benefits">
                <div class="benefit-item">
                    <span class="benefit-icon">✓</span> Free shipping to United States in 3-5 days*
                </div>
                <div class="benefit-item">
                    <span class="benefit-icon">✓</span> Free returns within 30 days
                </div>
                <div class="benefit-item">
                    <span class="benefit-icon">✓</span> Sustainable material
                </div>
                <div class="benefit-item">
                    <span class="benefit-icon">✓</span> Secure payment options
                </div>
            </div>

            <div class="product-description">
                <h3>Description</h3>
                <p>{{ $product->description }}</p>
                @if($product->features)
                    <ul class="product-features">
                        @foreach($product->features as $feature)
                            <li>{{ $feature }}</li>
                        @endforeach
                    </ul>
                @endif
            </div>

            <div class="product-details-tabs">
                <div class="tab active" data-tab="details">Details & Care</div>
                <div class="tab" data-tab="shipping">Shipping & Returns</div>
                <div class="tab" data-tab="reviews">Reviews</div>
            </div>

            <div class="tab-content active" id="details-content">
                <h4>Materials & Care</h4>
                <p><strong>Composition:</strong> {{ $product->composition ?? 'N/A' }}</p>
                <p><strong>Care instructions:</strong> {{ $product->care_instructions ?? 'N/A' }}</p>
                <p><strong>Origin:</strong> {{ $product->origin ?? 'N/A' }}</p>
                @if($product->sustainability)
                    <p><strong>Sustainability:</strong> {{ $product->sustainability }}</p>
                @endif
            </div>

            <div class="tab-content" id="shipping-content">
                <h4>Shipping Information</h4>
                <p>{{ $product->shipping_info ?? 'Standard shipping information not available.' }}</p>
                <h4>Returns Policy</h4>
                <p>{{ $product->returns_policy ?? 'Standard returns policy not available.' }}</p>
            </div>

            <div class="tab-content" id="reviews-content">
                <h4>Customer Reviews</h4>
                @if($product->reviews && $product->reviews->count() > 0)
                    @foreach($product->reviews->take(2) as $review)
                        <div class="review">
                            <div class="review-header">
                                <div class="reviewer">{{ $review->reviewer_name }}</div>
                                <div class="review-rating">
                                    @for($i = 1; $i <= 5; $i++)
                                        <span class="star {{ $i <= $review->rating ? 'filled' : '' }}">★</span>
                                    @endfor
                                </div>
                                <div class="review-date">{{ $review->created_at->format('F d, Y') }}</div>
                            </div>
                            <div class="review-title">{{ $review->title }}</div>
                            <div class="review-body">
                                <p>{{ $review->content }}</p>
                            </div>
                        </div>
                    @endforeach
                    @if($product->reviews->count() > 2)
                        <button class="view-all-reviews">View all {{ $product->reviews->count() }} reviews</button>
                    @endif
                @else
                    <p>No reviews yet.</p>
                @endif
            </div>
        </div>
    </div>
</section>

@push('scripts')
<script>
    document.addEventListener('livewire:initialized', function () {
        // Handle thumbnail clicks
        document.querySelectorAll('.thumbnail').forEach(thumbnail => {
            thumbnail.addEventListener('click', function() {
                const mainImage = document.getElementById('main-product-image');
                const newSrc = this.dataset.image;
                if (mainImage && newSrc) {
                    mainImage.src = newSrc;
                    // Update active state
                    document.querySelectorAll('.thumbnail').forEach(t => t.classList.remove('active'));
                    this.classList.add('active');
                }
            });
        });

        // Handle tab switching
        document.querySelectorAll('.tab').forEach(tab => {
            tab.addEventListener('click', function() {
                const tabId = this.dataset.tab;
                // Update active tab
                document.querySelectorAll('.tab').forEach(t => t.classList.remove('active'));
                this.classList.add('active');
                // Update active content
                document.querySelectorAll('.tab-content').forEach(content => {
                    content.classList.remove('active');
                    if (content.id === `${tabId}-content`) {
                        content.classList.add('active');
                    }
                });
            });
        });
    });
</script>
@endpush