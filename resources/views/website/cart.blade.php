@extends('website.layout.app')

@section('css')
<style>
    /* ========================================
       CART & CHECKOUT PAGE - CLEAN DESIGN
    ======================================== */
    
    .cart-page {
        padding: 160px 0 80px;
        background: #f9fafb;
        min-height: 100vh;
    }
    
    /* Back Link */
    .back-link {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        color: #DD5903;
        font-weight: 600;
        text-decoration: none;
        margin-bottom: 30px;
        transition: all 0.3s ease;
    }
    
    .back-link:hover {
        color: #b84a00;
        transform: translateX(-5px);
    }
    
    /* Page Title */
    .page-title {
        margin-bottom: 40px;
    }
    
    .page-title h1 {
        font-size: 32px;
        font-weight: 700;
        color: #1f2937;
        margin: 0;
    }
    
    .page-title p {
        color: #6b7280;
        margin: 8px 0 0;
    }
    
    /* Cards */
    .card-section {
        background: #fff;
        border-radius: 16px;
        box-shadow: 0 1px 3px rgba(0,0,0,0.05), 0 1px 2px rgba(0,0,0,0.1);
        margin-bottom: 24px;
        overflow: hidden;
    }
    
    .card-header {
        padding: 20px 24px;
        border-bottom: 1px solid #f3f4f6;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }
    
    .card-header h2 {
        font-size: 18px;
        font-weight: 600;
        color: #1f2937;
        margin: 0;
        display: flex;
        align-items: center;
        gap: 10px;
    }
    
    .card-header h2 i {
        color: #DD5903;
        font-size: 20px;
    }
    
    .item-badge {
        background: #fef3e7;
        color: #DD5903;
        padding: 6px 14px;
        border-radius: 20px;
        font-size: 13px;
        font-weight: 600;
    }
    
    .card-body {
        padding: 24px;
    }
    
    /* Cart Items */
    .cart-items-list {
        list-style: none;
        padding: 0;
        margin: 0;
    }
    
    .cart-item {
        display: grid;
        grid-template-columns: 80px 1fr auto auto auto;
        gap: 20px;
        align-items: center;
        padding: 20px 0;
        border-bottom: 1px solid #f3f4f6;
    }
    
    .cart-item:last-child {
        border-bottom: none;
        padding-bottom: 0;
    }
    
    .cart-item:first-child {
        padding-top: 0;
    }
    
    .item-image {
        width: 80px;
        height: 80px;
        border-radius: 12px;
        overflow: hidden;
        background: #f3f4f6;
    }
    
    .item-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    
    .item-info h4 {
        font-size: 16px;
        font-weight: 600;
        color: #1f2937;
        margin: 0 0 4px;
    }
    
    .item-info .unit-price {
        font-size: 14px;
        color: #6b7280;
    }
    
    .quantity-control {
        display: flex;
        align-items: center;
        background: #f9fafb;
        border-radius: 8px;
        border: 1px solid #e5e7eb;
    }
    
    .qty-btn {
        width: 36px;
        height: 36px;
        border: none;
        background: transparent;
        font-size: 16px;
        cursor: pointer;
        color: #374151;
        transition: all 0.2s;
    }
    
    .qty-btn:hover {
        background: #DD5903;
        color: #fff;
    }
    
    .qty-btn:first-child {
        border-radius: 8px 0 0 8px;
    }
    
    .qty-btn:last-child {
        border-radius: 0 8px 8px 0;
    }
    
    .qty-value {
        width: 40px;
        text-align: center;
        font-weight: 600;
        font-size: 14px;
        color: #1f2937;
        border: none;
        background: transparent;
    }
    
    .item-total {
        font-size: 16px;
        font-weight: 700;
        color: #1f2937;
        min-width: 90px;
        text-align: right;
    }
    
    .remove-btn {
        width: 36px;
        height: 36px;
        border: none;
        background: #fef2f2;
        color: #ef4444;
        border-radius: 8px;
        cursor: pointer;
        transition: all 0.2s;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    
    .remove-btn:hover {
        background: #ef4444;
        color: #fff;
    }
    
    /* Empty Cart */
    .empty-state {
        text-align: center;
        padding: 60px 20px;
    }
    
    .empty-state .icon {
        width: 100px;
        height: 100px;
        background: #fef3e7;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 24px;
    }
    
    .empty-state .icon i {
        font-size: 40px;
        color: #DD5903;
    }
    
    .empty-state h3 {
        font-size: 20px;
        font-weight: 600;
        color: #1f2937;
        margin: 0 0 8px;
    }
    
    .empty-state p {
        color: #6b7280;
        margin: 0 0 24px;
    }
    
    .browse-btn {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 12px 24px;
        background: #DD5903;
        color: #fff;
        border-radius: 8px;
        text-decoration: none;
        font-weight: 600;
        transition: all 0.2s;
    }
    
    .browse-btn:hover {
        background: #c44f00;
        color: #fff;
        transform: translateY(-2px);
    }
    
    /* Form Styles */
    .form-row {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 20px;
        margin-bottom: 0;
    }
    
    .form-group {
        margin-bottom: 20px;
    }
    
    .form-group.full-width {
        grid-column: span 2;
    }
    
    .form-label {
        display: block;
        font-size: 14px;
        font-weight: 600;
        color: #1f2937;
        margin-bottom: 10px;
    }
    
    .form-label .required {
        color: #ef4444;
    }
    
    .form-control {
        width: 100%;
        padding: 16px 20px;
        border: 1.5px solid #cbd5e1 !important;
        border-radius: 12px;
        font-size: 15px;
        color: #1f2937;
        transition: all 0.3s ease;
        background: #fff !important;
        font-weight: 500;
    }
    
    .form-control:focus {
        outline: none;
        border-color: #DD5903 !important;
        box-shadow: 0 0 0 3px rgba(221, 89, 3, 0.12);
    }
    
    /* Override for input wrapper */
    .input-wrapper .form-control {
        border: 1.5px solid #cbd5e1 !important;
        background: #fff !important;
    }
    
    .form-control::placeholder {
        color: #9ca3af;
        font-weight: 400;
    }
    
    textarea.form-control {
        resize: none;
        min-height: 120px;
    }
    
    /* Input with icon */
    .input-wrapper {
        position: relative;
    }
    
    .input-wrapper .form-control {
        padding-left: 50px;
    }
    
    .input-wrapper .input-icon {
        position: absolute;
        left: 18px;
        top: 50%;
        transform: translateY(-50%);
        color: #9ca3af;
        font-size: 16px;
        transition: color 0.3s ease;
    }
    
    .input-wrapper:focus-within .input-icon {
        color: #DD5903;
    }
    
    /* Order Summary */
    .summary-card {
        background: #fff;
        border-radius: 16px;
        box-shadow: 0 1px 3px rgba(0,0,0,0.05), 0 1px 2px rgba(0,0,0,0.1);
        position: sticky;
        top: 100px;
        overflow: hidden;
    }
    
    .summary-header {
        background: linear-gradient(135deg, #DD5903 0%, #f97316 100%);
        color: #fff !important;
        padding: 20px 24px;
    }
    
    .summary-header h2 {
        font-size: 18px;
        font-weight: 600;
        margin: 0;
        display: flex;
        align-items: center;
        gap: 10px;
        color: #fff !important;
    }
    
    .summary-header h2 i {
        color: #fff !important;
    }
    
    .summary-body {
        padding: 24px;
    }
    
    .summary-line {
        display: flex;
        justify-content: space-between;
        padding: 12px 0;
        font-size: 15px;
        color: #4b5563;
        border-bottom: 1px solid #f3f4f6;
    }
    
    .summary-line:last-of-type {
        border-bottom: none;
    }
    
    .summary-line.total {
        font-size: 18px;
        font-weight: 700;
        color: #1f2937;
        padding-top: 16px;
        margin-top: 8px;
        border-top: 2px solid #e5e7eb;
        border-bottom: none;
    }
    
    .summary-line .amount {
        font-weight: 600;
        color: #1f2937;
    }
    
    .summary-line.total .amount {
        color: #DD5903;
    }
    
    .checkout-btn {
        width: 100%;
        padding: 14px;
        background: #DD5903;
        color: #fff;
        border: none;
        border-radius: 10px;
        font-size: 16px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.2s;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        margin-top: 20px;
    }
    
    .checkout-btn:hover {
        background: #c44f00;
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(221, 89, 3, 0.3);
    }
    
    .checkout-btn:disabled {
        opacity: 0.6;
        cursor: not-allowed;
        transform: none;
    }
    
    .secure-badge {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 6px;
        margin-top: 16px;
        font-size: 13px;
        color: #6b7280;
    }
    
    .secure-badge i {
        color: #10b981;
    }
    
    /* Login Notice */
    .login-notice {
        background: #fef3e7;
        border-radius: 10px;
        padding: 16px;
        text-align: center;
        margin-top: 20px;
    }
    
    .login-notice p {
        color: #92400e;
        margin: 0 0 12px;
        font-size: 14px;
    }
    
    .login-notice a {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        color: #DD5903;
        font-weight: 600;
        text-decoration: none;
    }
    
    .login-notice a:hover {
        text-decoration: underline;
    }
    
    /* Responsive */
    @media (max-width: 991px) {
        .summary-card {
            position: static;
            margin-top: 24px;
        }
    }
    
    @media (max-width: 768px) {
        .cart-page {
            padding: 100px 0 60px;
        }
        
        .cart-item {
            grid-template-columns: 70px 1fr;
            gap: 12px;
        }
        
        .item-info {
            grid-column: span 1;
        }
        
        .quantity-control,
        .item-total,
        .remove-btn {
            grid-column: span 1;
        }
        
        .item-total {
            text-align: left;
        }
        
        .form-row {
            grid-template-columns: 1fr;
        }
        
        .form-group.full-width {
            grid-column: span 1;
        }
    }
</style>
@endsection

@section('content')

<section class="cart-page">
    <div class="container">
        {{-- Back Link --}}
        <a href="{{ route('wmenu') }}" class="back-link">
            <i class="fa-solid fa-arrow-left"></i> Continue Shopping
        </a>

                                            <div class="row">
            {{-- Main Content --}}
            <div class="col-lg-8">
                {{-- Page Title --}}
                <div class="page-title">
                    <h1>Shopping Cart</h1>
                    <p>Review your items before checkout</p>
                                                    </div>
                
                {{-- Cart Items --}}
                <div class="card-section">
                    <div class="card-header">
                        <h2><i class="fa-solid fa-basket-shopping"></i> Your Items</h2>
                        <span class="item-badge" id="cartItemCount">0 items</span>
                                                </div>
                    <div class="card-body">
                        <div id="cartItemsContainer"></div>
                        
                        <div id="emptyState" class="empty-state" style="display: none;">
                            <div class="icon">
                                <i class="fa-solid fa-bag-shopping"></i>
                                                        </div>
                            <h3>Your cart is empty</h3>
                            <p>Discover our delicious menu and add items to your cart</p>
                            <a href="{{ route('wmenu') }}" class="browse-btn">
                                <i class="fa-solid fa-utensils"></i> Browse Menu
                            </a>
                                                    </div>
                                                </div>
                                            </div>

                {{-- Delivery Details --}}
                <div class="card-section" id="deliverySection">
                    <div class="card-header">
                        <h2><i class="fa-solid fa-truck"></i> Delivery Details</h2>
                    </div>
                    <div class="card-body">
                        <input type="hidden" id="userId" value="{{ $userId }}">
                        
                        <div class="form-row">
                            <div class="form-group">
                                <label class="form-label"><i class="fa-solid fa-user" style="color: #DD5903; margin-right: 6px;"></i>Full Name <span class="required">*</span></label>
                                <div class="input-wrapper">
                                    <i class="fa-solid fa-user input-icon"></i>
                                    <input type="text" class="form-control" id="customerName" value="{{ $userName ?? '' }}" placeholder="Enter your full name">
                                </div>
                            </div>
                                                    <div class="form-group">
                                <label class="form-label"><i class="fa-solid fa-envelope" style="color: #DD5903; margin-right: 6px;"></i>Email <span class="required">*</span></label>
                                <div class="input-wrapper">
                                    <i class="fa-solid fa-envelope input-icon"></i>
                                    <input type="email" class="form-control" id="customerEmail" value="{{ $userEmail ?? '' }}" placeholder="Enter your email address">
                                                    </div>
                                                </div>
                                            </div>

                                                    <div class="form-group">
                            <label class="form-label"><i class="fa-solid fa-phone" style="color: #DD5903; margin-right: 6px;"></i>Phone Number <span class="required">*</span></label>
                            <div class="input-wrapper">
                                <i class="fa-solid fa-phone input-icon"></i>
                                <input type="tel" class="form-control" id="customerPhone" placeholder="Enter your phone number">
                                                </div>
                                            </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label class="form-label"><i class="fa-solid fa-file-invoice" style="color: #DD5903; margin-right: 6px;"></i>Billing Address <span class="required">*</span></label>
                                <div class="input-wrapper">
                                    <i class="fa-solid fa-location-dot input-icon"></i>
                                    <input type="text" class="form-control" id="bAddress" placeholder="Enter billing address">
                                </div>
                                        </div>
                            <div class="form-group">
                                <label class="form-label"><i class="fa-solid fa-truck" style="color: #DD5903; margin-right: 6px;"></i>Delivery Address <span class="required">*</span></label>
                                <div class="input-wrapper">
                                    <i class="fa-solid fa-location-dot input-icon"></i>
                                    <input type="text" class="form-control" id="sAddress" placeholder="Enter delivery address">
                                </div>
                            </div>
                                            </div>

                        <div class="form-group">
                            <label class="form-label"><i class="fa-solid fa-message" style="color: #DD5903; margin-right: 6px;"></i>Special Instructions</label>
                            <textarea class="form-control" id="comment" placeholder="Any special requests or notes about your order..."></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                   
            {{-- Order Summary --}}
            <div class="col-lg-4">
                <div class="summary-card">
                    <div class="summary-header">
                        <h2><i class="fa-solid fa-receipt"></i> Order Summary</h2>
                    </div>
                    <div class="summary-body">
                        <div id="summaryItems"></div>
                        
                        <div class="summary-line">
                            <span>Subtotal</span>
                            <span class="amount">৳ <span class="subtotal-value">0.00</span></span>
                        </div>
                        <div class="summary-line">
                            <span>Delivery Fee</span>
                            <span class="amount" style="color: #10b981;">Free</span>
                        </div>
                        <div class="summary-line total">
                            <span>Total</span>
                            <span class="amount">৳ <span class="grandtotal">0.00</span></span>
                                </div>
                        
                        @auth
                            <button type="button" id="placeOrderBtn" class="checkout-btn">
                                <i class="fa-solid fa-check"></i> Place Order
                            </button>
                        @else
                            <div class="login-notice">
                                <p>Please login to place your order</p>
                                <a href="{{ route('login') }}">
                                    <i class="fa-solid fa-right-to-bracket"></i> Login Now
                                </a>
                            </div>
                        @endauth
                        
                        <div class="secure-badge">
                            <i class="fa-solid fa-shield-check"></i>
                            <span>Secure Checkout</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@section('js')
<script>
$(document).ready(function() {
    const cart = new Cart();
    
    // Format price
    function formatPrice(price) {
        return parseFloat(price).toFixed(2);
    }
    
    // Render cart
    function renderCart() {
        const items = cart.getItems();
        const container = $('#cartItemsContainer');
        const summaryContainer = $('#summaryItems');
        
        if (items.length === 0) {
            container.html('');
            summaryContainer.html('');
            $('#emptyState').show();
            $('#deliverySection').hide();
            $('#cartItemCount').text('0 items');
            $('.subtotal-value, .grandtotal').text('0.00');
            return;
        }
        
        $('#emptyState').hide();
        $('#deliverySection').show();
        
        // Update item count
        const totalQty = cart.totalItems();
        $('#cartItemCount').text(totalQty + (totalQty === 1 ? ' item' : ' items'));
        
        // Render cart items
        let html = '<ul class="cart-items-list">';
        let summaryHtml = '';
        
        items.forEach(item => {
            const itemTotal = item.price * item.quantity;
            const imageUrl = item.image && item.image.length > 0 
                ? '{{ asset("storage") }}/' + item.image[0]
                : '{{ asset("website/assets/images/placeholder.jpg") }}';
            
            html += `
                <li class="cart-item">
                    <div class="item-image">
                        <img src="${imageUrl}" alt="${item.name}">
                    </div>
                    <div class="item-info">
                        <h4>${item.name}</h4>
                        <span class="unit-price">৳ ${formatPrice(item.price)} each</span>
                    </div>
                    <div class="quantity-control">
                        <button type="button" class="qty-btn" onclick="changeQty(${item.id}, -1)">−</button>
                        <input type="text" class="qty-value" value="${item.quantity}" readonly>
                        <button type="button" class="qty-btn" onclick="changeQty(${item.id}, 1)">+</button>
                    </div>
                    <div class="item-total">৳ ${formatPrice(itemTotal)}</div>
                    <button type="button" class="remove-btn" onclick="deleteItem(${item.id})">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </li>
            `;
            
            summaryHtml += `
                <div class="summary-line">
                    <span>${item.name} × ${item.quantity}</span>
                    <span>৳ ${formatPrice(itemTotal)}</span>
                </div>
            `;
        });
        
        html += '</ul>';
        container.html(html);
        summaryContainer.html(summaryHtml);
        
        // Update totals
        const total = formatPrice(cart.getTotal());
        $('.subtotal-value, .grandtotal').text(total);
        $('#cartTotal').text(cart.totalItems());
    }
    
    // Change quantity
    window.changeQty = function(id, delta) {
        const items = cart.getItems();
        const idx = items.findIndex(i => i.id === id);
        
        if (idx > -1) {
            items[idx].quantity += delta;
            
            if (items[idx].quantity < 1) {
                items.splice(idx, 1);
            }
            
            cart.items = items;
            cart.updateStorage();
            renderCart();
        }
    };
    
    // Delete item
    window.deleteItem = function(id) {
        Swal.fire({
            title: 'Remove item?',
            text: 'This item will be removed from your cart',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#ef4444',
            cancelButtonColor: '#6b7280',
            confirmButtonText: 'Remove',
            cancelButtonText: 'Cancel'
        }).then((result) => {
            if (result.isConfirmed) {
                cart.removeItem(id);
                renderCart();
                
                Swal.fire({
                    toast: true,
                    position: 'top-end',
                    icon: 'success',
                    title: 'Item removed',
                    showConfirmButton: false,
                    timer: 1500
                });
            }
        });
    };
    
    // Initial render
    renderCart();
    
    // Place order
    $('#placeOrderBtn').on('click', function() {
        const btn = $(this);
        const items = cart.getItems();
        
        if (items.length === 0) {
            Swal.fire({
                icon: 'info',
                title: 'Cart is empty',
                text: 'Add some items to your cart first',
                confirmButtonColor: '#DD5903'
            });
            return;
        }
        
        // Validate
        const bAddress = $('#bAddress').val().trim();
        const sAddress = $('#sAddress').val().trim();
        const phone = $('#customerPhone').val().trim();
        
        if (!bAddress || !sAddress || !phone) {
            Swal.fire({
                icon: 'warning',
                title: 'Required fields missing',
                text: 'Please fill in all delivery details',
                confirmButtonColor: '#DD5903'
            });
            return;
        }
        
        // Prepare data
        const orderItems = items.map(e => ({
            menu_id: e.id,
            name: e.name,
            price: e.price,
            qty: e.quantity
        }));
        
        btn.prop('disabled', true).html('<i class="fa-solid fa-spinner fa-spin"></i> Processing...');
        
        $.ajax({
            url: "{{ route('order.store') }}",
            type: 'POST',
            data: {
                orders: orderItems,
                grandtotal: cart.getTotal(),
                comment: $('#comment').val(),
                bAddress: bAddress,
                sAddress: sAddress,
                user_id: $('#userId').val(),
                status: 'pending'
            },
            success: function(res) {
                if (res.status === 'success') {
                    cart.emptyCart();
                    
                    Swal.fire({
                        icon: 'success',
                        title: 'Order Placed!',
                        text: 'Thank you for your order. We will contact you shortly.',
                        confirmButtonColor: '#DD5903'
                    }).then(() => {
                        window.location.href = '{{ route("home") }}';
                    });
                }
            },
            error: function() {
                Swal.fire({
                    icon: 'error',
                    title: 'Something went wrong',
                    text: 'Please try again later',
                    confirmButtonColor: '#DD5903'
                });
                btn.prop('disabled', false).html('<i class="fa-solid fa-check"></i> Place Order');
            }
        });
    });
});
</script>
@endsection