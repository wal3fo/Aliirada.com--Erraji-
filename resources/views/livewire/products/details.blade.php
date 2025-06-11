<section class="main-container">
    <div class="product-container">
        <!-- Product Images with Thumbnails -->
        <div class="product-images">
            <div class="product-thumbnails">
                <div class="thumbnail active">
                    <img src="{{ $product->Landing }}" alt="{{ $product->Name }}">
                </div>
                <div class="thumbnail">
                    <img src="{{ $product->Landing }}" alt="{{ $product->Name }}">
                </div>
                <div class="thumbnail">
                    <img src="{{ $product->Landing }}" alt="{{ $product->Name }}">
                </div>
                <div class="thumbnail">
                    <img src="{{ $product->Landing }}" alt="{{ $product->Name }}">
                </div>
                @if($product->gallery)
                    @foreach($product->gallery as $image)
                        <div class="thumbnail">
                            <img src="{{ $image }}" alt="{{ $product->Name }}">
                        </div>
                    @endforeach
                @endif
            </div>
            <div class="product-main-image">
                <img src="{{ $product->Landing }}" alt="{{ $product->Name }}" id="main-product-image">
                @if($product->discount_percentage)
                    <div class="product-badge">-{{ $product->discount_percentage }}%</div>
                @endif
            </div>
        </div>

        <div class="product-details">
            <div class="product-header">
                <div class="product-breadcrumb">
                    <span>Home</span> / <span>Products</span> / <span>{{ $product->Name }}</span>
                </div>
                <h1 class="product-title">{{ $product->Name }}</h1>
                <div class="product-price">
                    @if($product->original_price > $product->PriceOf)
                        <span class="original-price">{{ number_format($product->original_price, 2, '.', ',') }} MAD</span>
                    @endif
                    <span class="current-price">
                        {{ number_format($product->PriceOf, 2, '.', ',') }} <span class="currency">MAD</span>
                    </span>
                </div>
            </div>

            <div class="product-options">
                <div class="option-group">
                    <label class="option-label">Size</label>
                    <div class="size-grid">
                        <div class="size-option" data-size="S">
                            <span>S</span>
                            <small>Small</small>
                        </div>
                        <div class="size-option" data-size="M">
                            <span>M</span>
                            <small>Medium</small>
                        </div>
                        <div class="size-option" data-size="L">
                            <span>L</span>
                            <small>Large</small>
                        </div>
                    </div>
                </div>

                <div class="option-group">
                    <label class="option-label">Style</label>
                    <div class="style-grid">
                        <div class="style-option" data-style="casual">
                            <span>Casual</span>
                        </div>
                        <div class="style-option" data-style="formal">
                            <span>Formal</span>
                        </div>
                        <div class="style-option" data-style="sport">
                            <span>Sport</span>
                        </div>
                    </div>
                </div>

                <div class="option-group">
                    <label class="option-label">Color</label>
                    <div class="color-grid">
                        <div class="color-option" data-color="red">
                            <span>Red</span>
                        </div>
                        <div class="color-option" data-color="blue">
                            <span>Blue</span>
                        </div>
                        <div class="color-option" data-color="green">
                            <span>Green</span>
                        </div>
                    </div>
                </div>

                <div class="option-group">
                    <label class="option-label">Quantity</label>
                    <div class="input-group-qua">
                        <button class="btn-minus" wire:click="decrementQuantity({{ $product->Id }})">-</button>
                        <span class="form-control">{{ $quantities[$product->Id] ?? 1 }}</span>
                        <button class="btn-plus" wire:click="incrementQuantity({{ $product->Id }})">+</button>
                    </div>
                </div>

                <div class="product-actions">
                    <button class="add-to-bag">
                        <i class="fas fa-shopping-bag"></i>
                        Add to Bag
                    </button>
                    <button class="wishlist-btn">
                        <i class="fas fa-heart heart-icon"></i>
                        Add to Wishlist
                    </button>
                </div>
            </div>

            <div class="product-benefits">
                <div class="benefit-item">
                    <i class="fas fa-truck benefit-icon"></i>
                    <div class="benefit-text">
                        <strong>Free Shipping</strong>
                        <span>Free shipping to United States in 3-5 days*</span>
                    </div>
                </div>
                <div class="benefit-item d-none">
                    <i class="fas fa-undo benefit-icon"></i>
                    <div class="benefit-text">
                        <strong>Easy Returns</strong>
                        <span>Free returns within 30 days</span>
                    </div>
                </div>
                <div class="benefit-item">
                    <i class="fas fa-leaf benefit-icon"></i>
                    <div class="benefit-text">
                        <strong>Sustainable</strong>
                        <span>Made with sustainable materials</span>
                    </div>
                </div>
                <div class="benefit-item">
                    <i class="fas fa-lock benefit-icon"></i>
                    <div class="benefit-text">
                        <strong>Secure Payment</strong>
                        <span>100% secure payment options</span>
                    </div>
                </div>
            </div>

            <div class="product-description d-none">
                <h3 class="section-title">Description</h3>
                <div class="description-content">
                    <p>{{ $product->description }}</p>
                    @if($product->features)
                        <div class="features-list">
                            @foreach($product->features as $feature)
                                <div class="feature-item">
                                    <i class="fas fa-check"></i>
                                    <span>{{ $feature }}</span>
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>

            <div class="product-details-tabs d-none">
                <div class="tabs-header">
                    <div class="tab active" data-tab="details">
                        <i class="fas fa-info-circle"></i>
                        <span>Details & Care</span>
                    </div>
                    <div class="tab" data-tab="shipping">
                        <i class="fas fa-shipping-fast"></i>
                        <span>Shipping & Returns</span>
                    </div>
                    <div class="tab" data-tab="reviews">
                        <i class="fas fa-star"></i>
                        <span>Reviews</span>
                    </div>
                </div>

                <div class="tab-content active" id="details-content">
                    <div class="details-grid">
                        <div class="detail-item">
                            <h4>Materials & Care</h4>
                            <div class="detail-content">
                                <div class="detail-row">
                                    <span class="detail-label">Composition:</span>
                                    <span class="detail-value">{{ $product->composition ?? 'N/A' }}</span>
                                </div>
                                <div class="detail-row">
                                    <span class="detail-label">Care instructions:</span>
                                    <span class="detail-value">{{ $product->care_instructions ?? 'N/A' }}</span>
                                </div>
                                <div class="detail-row">
                                    <span class="detail-label">Origin:</span>
                                    <span class="detail-value">{{ $product->origin ?? 'N/A' }}</span>
                                </div>
                                @if($product->sustainability)
                                    <div class="detail-row">
                                        <span class="detail-label">Sustainability:</span>
                                        <span class="detail-value">{{ $product->sustainability }}</span>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-content" id="shipping-content">
                    <div class="shipping-info">
                        <h4>Shipping Information</h4>
                        <p>{{ $product->shipping_info ?? 'Standard shipping information not available.' }}</p>
                        <div class="shipping-methods">
                            <div class="shipping-method">
                                <i class="fas fa-truck"></i>
                                <div class="method-info">
                                    <strong>Standard Shipping</strong>
                                    <span>3-5 business days</span>
                                </div>
                            </div>
                            <div class="shipping-method">
                                <i class="fas fa-shipping-fast"></i>
                                <div class="method-info">
                                    <strong>Express Shipping</strong>
                                    <span>1-2 business days</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="returns-info">
                        <h4>Returns Policy</h4>
                        <p>{{ $product->returns_policy ?? 'Standard returns policy not available.' }}</p>
                    </div>
                </div>

                <div class="tab-content" id="reviews-content">
                    <div class="reviews-summary">
                        <div class="average-rating">
                            <div class="rating-number">{{ number_format($product->rating ?? 0, 1) }}</div>
                            <div class="stars">
                                @for($i = 1; $i <= 5; $i++)
                                    <i class="fas fa-star {{ $i <= ($product->rating ?? 0) ? 'active' : '' }}"></i>
                                @endfor
                            </div>
                            <div class="total-reviews">{{ $product->reviews_count ?? 0 }} reviews</div>
                        </div>
                    </div>

                    @if($product->reviews && $product->reviews->count() > 0)
                        <div class="reviews-list">
                            @foreach($product->reviews->take(2) as $review)
                                <div class="review">
                                    <div class="review-header">
                                        <div class="reviewer-info">
                                            <div class="reviewer-avatar">
                                                {{ substr($review->reviewer_name, 0, 1) }}
                                            </div>
                                            <div class="reviewer-details">
                                                <div class="reviewer">{{ $review->reviewer_name }}</div>
                                                <div class="review-date">{{ $review->created_at->format('F d, Y') }}</div>
                                            </div>
                                        </div>
                                        <div class="review-rating">
                                            @for($i = 1; $i <= 5; $i++)
                                                <i class="fas fa-star {{ $i <= $review->rating ? 'active' : '' }}"></i>
                                            @endfor
                                        </div>
                                    </div>
                                    <div class="review-content">
                                        <h5 class="review-title">{{ $review->title }}</h5>
                                        <p class="review-body">{{ $review->content }}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        @if($product->reviews->count() > 2)
                            <button class="view-all-reviews">
                                View all {{ $product->reviews->count() }} reviews
                                <i class="fas fa-chevron-right"></i>
                            </button>
                        @endif
                    @else
                        <div class="no-reviews">
                            <i class="fas fa-comment-slash"></i>
                            <p>No reviews yet. Be the first to review this product!</p>
                            <button class="write-review-btn">Write a Review</button>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>