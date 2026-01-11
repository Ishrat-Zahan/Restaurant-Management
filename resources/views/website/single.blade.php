@extends('website.layout.app')

@section('css')
<style>
    /* Single Product Page Styles */
    .single-product-section {
        padding: 80px 0;
        background: linear-gradient(135deg, #fefefe 0%, #f8f4f0 100%);
    }
    
    .product-image-wrapper {
        position: relative;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 20px 60px rgba(0, 0, 0, 0.1);
    }
    
    .product-main-image {
        width: 100%;
        height: 450px;
        object-fit: cover;
        transition: transform 0.5s ease;
    }
    
    .product-image-wrapper:hover .product-main-image {
        transform: scale(1.05);
    }
    
    .product-thumbnails {
        display: flex;
        gap: 10px;
        margin-top: 15px;
    }
    
    .product-thumb {
        width: 80px;
        height: 80px;
        object-fit: cover;
        border-radius: 10px;
        cursor: pointer;
        border: 3px solid transparent;
        transition: all 0.3s ease;
    }
    
    .product-thumb:hover,
    .product-thumb.active {
        border-color: #DD5903;
        transform: translateY(-3px);
    }
    
    .product-details-wrapper {
        padding: 20px 0 20px 40px;
    }
    
    .product-category-badge {
        display: inline-block;
        background: linear-gradient(135deg, #DD5903 0%, #ff7b2e 100%);
        color: #fff;
        padding: 6px 18px;
        border-radius: 20px;
        font-size: 12px;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 1px;
        margin-bottom: 15px;
    }
    
    .product-subcategory-badge {
        display: inline-block;
        background: #2d2d2d;
        color: #fff;
        padding: 6px 18px;
        border-radius: 20px;
        font-size: 12px;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 1px;
        margin-bottom: 15px;
        margin-left: 8px;
    }
    
    .product-title {
        font-size: 36px;
        font-weight: 700;
        color: #1a1a1a;
        margin-bottom: 15px;
        line-height: 1.2;
    }
    
    .product-price {
        font-size: 32px;
        font-weight: 700;
        color: #DD5903;
        margin-bottom: 25px;
    }
    
    .product-price .currency {
        font-size: 20px;
        font-weight: 600;
    }
    
    .product-description {
        font-size: 16px;
        line-height: 1.8;
        color: #555;
        margin-bottom: 30px;
        padding-bottom: 25px;
        border-bottom: 1px solid #eee;
    }
    
    .product-meta-info {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
        margin-bottom: 30px;
    }
    
    .meta-item {
        display: flex;
        align-items: center;
        gap: 10px;
        padding: 12px 20px;
        background: #fff;
        border-radius: 10px;
        box-shadow: 0 3px 15px rgba(0, 0, 0, 0.05);
    }
    
    .meta-item i {
        color: #DD5903;
        font-size: 18px;
    }
    
    .meta-item span {
        font-size: 14px;
        color: #666;
    }
    
    .meta-item strong {
        color: #1a1a1a;
    }
    
    .quantity-wrapper {
        display: flex;
        align-items: center;
        gap: 20px;
        margin-bottom: 30px;
    }
    
    .quantity-selector {
        display: flex;
        align-items: center;
        background: #fff;
        border-radius: 10px;
        box-shadow: 0 3px 15px rgba(0, 0, 0, 0.08);
        overflow: hidden;
    }
    
    .qty-btn {
        width: 50px;
        height: 50px;
        border: none;
        background: #f5f5f5;
        font-size: 20px;
        cursor: pointer;
        transition: all 0.3s ease;
        color: #333;
    }
    
    .qty-btn:hover {
        background: #DD5903;
        color: #fff;
    }
    
    .qty-input {
        width: 60px;
        height: 50px;
        border: none;
        text-align: center;
        font-size: 18px;
        font-weight: 600;
        color: #1a1a1a;
    }
    
    .add-cart-btn {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        padding: 15px 40px;
        background: linear-gradient(135deg, #DD5903 0%, #ff7b2e 100%);
        color: #fff;
        font-size: 16px;
        font-weight: 600;
        border: none;
        border-radius: 10px;
        cursor: pointer;
        transition: all 0.3s ease;
        text-decoration: none;
    }
    
    .add-cart-btn:hover {
        transform: translateY(-3px);
        box-shadow: 0 10px 30px rgba(221, 89, 3, 0.4);
        color: #fff;
    }
    
    .back-to-menu {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        color: #DD5903;
        font-weight: 600;
        text-decoration: none;
        margin-bottom: 30px;
        transition: all 0.3s ease;
    }
    
    .back-to-menu:hover {
        color: #b84a00;
        transform: translateX(-5px);
    }
    
    .no-image-placeholder {
        width: 100%;
        height: 450px;
        background: linear-gradient(135deg, #f0f0f0 0%, #e0e0e0 100%);
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 20px;
        color: #999;
        font-size: 18px;
    }
    
    .no-image-placeholder i {
        font-size: 60px;
        margin-bottom: 15px;
        display: block;
    }
    
    /* Responsive */
    @media (max-width: 991px) {
        .product-details-wrapper {
            padding: 30px 0 0 0;
        }
        
        .product-title {
            font-size: 28px;
        }
        
        .product-price {
            font-size: 26px;
        }
    }
    
    @media (max-width: 576px) {
        .single-product-section {
            padding: 50px 0;
        }
        
        .product-main-image {
            height: 300px;
        }
        
        .quantity-wrapper {
            flex-direction: column;
            align-items: flex-start;
        }
        
        .add-cart-btn {
            width: 100%;
            justify-content: center;
        }
    }
</style>
@endsection

@section('content')

<section class="single-product-section">
    <div class="container">
        {{-- Back to Menu Link --}}
        <a href="{{ route('wmenu') }}" class="back-to-menu">
            <i class="fa-solid fa-arrow-left"></i> Back to Menu
        </a>
        
        <div class="row align-items-center">
            {{-- Product Image --}}
            <div class="col-lg-6" data-sal="slide-right" data-sal-delay="150" data-sal-duration="800">
                <div class="product-image-wrapper">
                    @if($single->images->count() > 0)
                        <img id="mainProductImage" src="{{ asset('storage/' . $single->images->first()->name) }}" alt="{{ $single->name }}" class="product-main-image">
                    @else
                        <div class="no-image-placeholder">
                            <div class="text-center">
                                <i class="fa-solid fa-image"></i>
                                <span>No Image Available</span>
                            </div>
                        </div>
                    @endif
                </div>
                
                {{-- Thumbnails if multiple images --}}
                @if($single->images->count() > 1)
                <div class="product-thumbnails">
                    @foreach($single->images as $index => $image)
                        <img src="{{ asset('storage/' . $image->name) }}" 
                             alt="{{ $single->name }}" 
                             class="product-thumb {{ $index == 0 ? 'active' : '' }}"
                             onclick="changeMainImage(this, '{{ asset('storage/' . $image->name) }}')">
                    @endforeach
                </div>
                @endif
            </div>
            
            {{-- Product Details --}}
            <div class="col-lg-6" data-sal="slide-left" data-sal-delay="250" data-sal-duration="800">
                <div class="product-details-wrapper">
                    {{-- Category & Subcategory Badges --}}
                    <div class="product-badges">
                        @if($single->category)
                            <span class="product-category-badge">{{ $single->category->name }}</span>
                        @endif
                        @if($single->subcategory)
                            <span class="product-subcategory-badge">{{ $single->subcategory->name }}</span>
                        @endif
                    </div>
                    
                    {{-- Product Title --}}
                    <h1 class="product-title">{{ $single->name }}</h1>
                    
                    {{-- Price --}}
                    <div class="product-price">
                        <span class="currency">৳</span> {{ number_format($single->price, 2) }}
                    </div>
                    
                    {{-- Description --}}
                    @if($single->details)
                        <p class="product-description">{{ $single->details }}</p>
                    @endif
                    
                    {{-- Meta Info --}}
                    <div class="product-meta-info">
                        @if($single->category)
                        <div class="meta-item">
                            <i class="fa-solid fa-utensils"></i>
                            <span><strong>Category:</strong> {{ $single->category->name }}</span>
                        </div>
                        @endif
                        @if($single->subcategory)
                        <div class="meta-item">
                            <i class="fa-solid fa-list"></i>
                            <span><strong>Type:</strong> {{ $single->subcategory->name }}</span>
                        </div>
                        @endif
                    </div>
                    
                    {{-- Quantity & Add to Cart --}}
                    <div class="quantity-wrapper">
                        <div class="quantity-selector">
                            <button type="button" class="qty-btn" onclick="decreaseQty()">−</button>
                            <input type="number" id="productQty" class="qty-input" value="1" min="1" max="10">
                            <button type="button" class="qty-btn" onclick="increaseQty()">+</button>
                        </div>
                        <a href="javascript:void(0)" data-menu-id="{{ $single->id }}" class="add-cart-btn add-to-cart-btn">
                            <i class="fa-solid fa-cart-plus"></i> Add to Cart
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@section('js')
<script>
    // Change main image on thumbnail click
    function changeMainImage(thumb, src) {
        document.getElementById('mainProductImage').src = src;
        document.querySelectorAll('.product-thumb').forEach(t => t.classList.remove('active'));
        thumb.classList.add('active');
    }
    
    // Quantity controls
    function increaseQty() {
        var input = document.getElementById('productQty');
        var currentVal = parseInt(input.value);
        if (currentVal < 10) {
            input.value = currentVal + 1;
        }
    }
    
    function decreaseQty() {
        var input = document.getElementById('productQty');
        var currentVal = parseInt(input.value);
        if (currentVal > 1) {
            input.value = currentVal - 1;
        }
    }
    
    // Add to Cart functionality for single page
    $(document).ready(function() {
        var cart = new Cart();
        
        $(".add-cart-btn").click(function() {
            var menuId = $(this).data("menu-id");
            var quantity = parseInt($("#productQty").val()) || 1;
            
            $.getJSON("{{ url('cartapi') }}/" + menuId, function(data) {
                let images = [];
                
                data.images.forEach(function(image) {
                    images.push(image.name);
                });
                
                let menu = {
                    'id': data.id,
                    'name': data.name,
                    'price': data.price,
                    'quantity': quantity,
                    'image': images
                };
                
                // Check if item already in cart
                let alreadyInCart = cart.itemExists(data.id);
                
                // Add item with quantity (will update if exists)
                cart.addItemWithQty(menu, quantity);
                
                // Update cart count in navbar
                $("#cartTotal").html(cart.totalItems());
                
                // Show success notification
                let message = alreadyInCart 
                    ? 'Added ' + quantity + ' more to your cart (Total: ' + cart.getItemQty(data.id) + ')'
                    : quantity + 'x ' + data.name + ' added to your cart';
                
                Swal.fire({
                    icon: 'success',
                    title: alreadyInCart ? 'Cart Updated!' : 'Added to Cart!',
                    text: message,
                    showConfirmButton: false,
                    timer: 2500,
                    toast: true,
                    position: 'top-end',
                    background: '#fff',
                    iconColor: '#DD5903',
                    customClass: {
                        popup: 'colored-toast'
                    }
                });
            }).fail(function() {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops!',
                    text: 'Something went wrong. Please try again.',
                    confirmButtonColor: '#DD5903'
                });
            });
        });
    });
</script>
@endsection