@extends('website.layout.app')

@section('css')
<style>
    /* ========================================
       RESERVATION PAGE - LIGHT ELEGANT DESIGN
    ======================================== */
    
    /* Hero Banner */
    .reservation-banner {
        position: relative;
        height: 320px;
        background: linear-gradient(135deg, rgba(0,0,0,0.5) 0%, rgba(0,0,0,0.3) 100%),
                    url('{{ asset("website/assets/images/banner/banner-img.webp") }}');
        background-size: cover;
        background-position: center;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        margin-top: 80px;
    }
    
    .banner-content {
        z-index: 2;
    }
    
    .banner-subtitle {
        font-size: 14px;
        text-transform: uppercase;
        letter-spacing: 4px;
        color: #fff;
        font-weight: 600;
        margin-bottom: 12px;
        opacity: 0.9;
    }
    
    .banner-content h1 {
        font-size: 52px;
        font-weight: 700;
        color: #fff;
        margin-bottom: 15px;
        text-shadow: 2px 2px 10px rgba(0,0,0,0.2);
    }
    
    .banner-content h1 span {
        color: #ffb380;
    }
    
    .banner-content p {
        font-size: 17px;
        color: rgba(255,255,255,0.9);
        max-width: 450px;
        margin: 0 auto;
        line-height: 1.7;
    }
    
    .banner-decoration {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 15px;
        margin: 20px 0;
    }
    
    .banner-decoration .line {
        width: 50px;
        height: 2px;
        background: linear-gradient(90deg, transparent, #fff);
    }
    
    .banner-decoration .line:last-child {
        background: linear-gradient(90deg, #fff, transparent);
    }
    
    .banner-decoration .icon {
        color: #fff;
        font-size: 20px;
    }
    
    /* Main Section */
    .reservation-section {
        padding: 80px 0 100px;
        background: linear-gradient(180deg, #fff 0%, #fef7f2 100%);
    }
    
    .section-grid {
        display: grid;
        grid-template-columns: 1fr 420px;
        gap: 60px;
        align-items: start;
    }
    
    /* Left Side - Form */
    .reservation-form-wrapper {
        background: #fff;
        border-radius: 24px;
        padding: 45px;
        box-shadow: 0 4px 30px rgba(221, 89, 3, 0.08);
        border: 1px solid rgba(221, 89, 3, 0.08);
    }
    
    .form-title {
        margin-bottom: 35px;
    }
    
    .form-title h2 {
        font-size: 28px;
        font-weight: 700;
        color: #1f2937;
        margin: 0 0 8px;
    }
    
    .form-title p {
        color: #9ca3af;
        font-size: 15px;
        margin: 0;
    }
    
    .form-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 22px;
    }
    
    .form-group {
        margin-bottom: 0;
    }
    
    .form-group.full-width {
        grid-column: span 2;
    }
    
    .form-label {
        display: flex;
        align-items: center;
        gap: 8px;
        font-size: 14px;
        font-weight: 600;
        color: #374151;
        margin-bottom: 10px;
    }
    
    .form-label i {
        color: #DD5903;
        font-size: 14px;
    }
    
    .form-label .required {
        color: #ef4444;
        margin-left: 2px;
    }
    
    .form-input,
    .form-select {
        width: 100%;
        padding: 15px 18px;
        border: 1.5px solid #e5e7eb !important;
        border-radius: 12px;
        font-size: 15px;
        color: #1f2937;
        background: #fff !important;
        transition: all 0.3s ease;
    }
    
    .form-input:focus,
    .form-select:focus {
        outline: none;
        border-color: #DD5903 !important;
        background: #fff !important;
        box-shadow: 0 0 0 4px rgba(221, 89, 3, 0.1);
    }
    
    .form-input::placeholder {
        color: #9ca3af;
    }
    
    /* Custom Select Styling */
    .form-select {
        appearance: none;
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3e%3cpath stroke='%23DD5903' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='M6 8l4 4 4-4'/%3e%3c/svg%3e");
        background-position: right 16px center;
        background-repeat: no-repeat;
        background-size: 18px;
        padding-right: 50px;
        cursor: pointer;
        background-color: #fafafa;
    }
    
    /* Submit Button */
    .submit-btn {
        width: 100%;
        padding: 18px 32px;
        background: linear-gradient(135deg, #DD5903 0%, #f97316 100%);
        color: #fff;
        font-size: 16px;
        font-weight: 600;
        border: none;
        border-radius: 14px;
        cursor: pointer;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        margin-top: 15px;
        text-decoration: none;
    }
    
    .submit-btn:hover {
        transform: translateY(-3px);
        box-shadow: 0 15px 35px rgba(221, 89, 3, 0.25);
        color: #fff;
    }
    
    .submit-btn i {
        font-size: 18px;
    }
    
    /* Right Side - Info */
    .info-sidebar {
        position: sticky;
        top: 120px;
    }
    
    .info-card-main {
        background: #fff;
        border-radius: 24px;
        padding: 35px;
        color: #1f2937;
        margin-bottom: 25px;
        box-shadow: 0 4px 25px rgba(0,0,0,0.06);
        border: 1px solid #f3f4f6;
    }
    
    .info-card-main h3 {
        font-size: 22px;
        font-weight: 700;
        margin: 0 0 20px;
        display: flex;
        align-items: center;
        gap: 12px;
        color: #1f2937;
    }
    
    .info-card-main h3 i {
        font-size: 24px;
        color: #DD5903;
    }
    
    .info-item {
        display: flex;
        align-items: flex-start;
        gap: 15px;
        padding: 18px 0;
        border-bottom: 1px solid #f3f4f6;
    }
    
    .info-item:last-child {
        border-bottom: none;
        padding-bottom: 0;
    }
    
    .info-item .icon-box {
        width: 45px;
        height: 45px;
        background: linear-gradient(135deg, #fff5f0 0%, #ffebe0 100%);
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }
    
    .info-item .icon-box i {
        font-size: 18px;
        color: #DD5903;
    }
    
    .info-item .text h4 {
        font-size: 15px;
        font-weight: 600;
        margin: 0 0 4px;
        color: #1f2937;
    }
    
    .info-item .text p {
        font-size: 14px;
        margin: 0;
        color: #6b7280;
        line-height: 1.5;
    }
    
    /* Features List */
    .features-card {
        background: #fff;
        border-radius: 20px;
        padding: 30px;
        box-shadow: 0 4px 20px rgba(0,0,0,0.04);
        border: 1px solid #f3f4f6;
    }
    
    .features-card h4 {
        font-size: 16px;
        font-weight: 600;
        color: #1f2937;
        margin: 0 0 20px;
        display: flex;
        align-items: center;
        gap: 10px;
    }
    
    .features-card h4 i {
        color: #DD5903;
    }
    
    .feature-item {
        display: flex;
        align-items: center;
        gap: 12px;
        padding: 12px 0;
        color: #6b7280;
        font-size: 14px;
    }
    
    .feature-item i {
        color: #10b981;
        font-size: 14px;
    }
    
    /* Responsive */
    @media (max-width: 992px) {
        .section-grid {
            grid-template-columns: 1fr;
            gap: 40px;
        }
        
        .info-sidebar {
            position: static;
        }
    }
    
    @media (max-width: 768px) {
        .reservation-banner {
            height: 260px;
            margin-top: 70px;
        }
        
        .banner-content h1 {
            font-size: 36px;
        }
        
        .reservation-section {
            padding: 50px 0 70px;
        }
        
        .reservation-form-wrapper {
            padding: 30px 25px;
        }
        
        .form-grid {
            grid-template-columns: 1fr;
        }
        
        .form-group.full-width {
            grid-column: span 1;
        }
    }
</style>
@endsection

@section('content')

<!-- Hero Banner -->
<div class="reservation-banner">
    <div class="banner-content">
        <span class="banner-subtitle">Book Your Experience</span>
        <h1>Table <span>Reservation</span></h1>
        <div class="banner-decoration">
            <span class="line"></span>
            <i class="fa-solid fa-utensils icon"></i>
            <span class="line"></span>
        </div>
        <p>Secure your spot for an unforgettable culinary journey at our restaurant</p>
    </div>
</div>

<!-- Reservation Section -->
<section class="reservation-section">
    <div class="container">
        <div class="section-grid">
            <!-- Left - Form -->
            <div class="reservation-form-wrapper">
                <div class="form-title">
                    <h2>Make a Reservation</h2>
                    <p>Please fill in the details below</p>
                </div>
                
                <form action="{{ route('reservation.store') }}" method="post">
                    @csrf
                    <input type="hidden" id="cid" name="cid" value="{{ $userId }}">
                    <input type="hidden" id="website" name="website" value="website">
                    <input type="hidden" id="status" name="status" value="1">
                    
                    <div class="form-grid">
                        <div class="form-group">
                            <label class="form-label">
                                <i class="fa-solid fa-user"></i> Your Name <span class="required">*</span>
                            </label>
                            <input type="text" id="name" name="name" class="form-input" value="{{ $userName ?? '' }}" placeholder="Enter your full name" required>
                        </div>
                        
                        <div class="form-group">
                            <label class="form-label">
                                <i class="fa-solid fa-envelope"></i> Email Address <span class="required">*</span>
                            </label>
                            <input type="email" id="email" name="email" class="form-input" value="{{ $userEmail ?? '' }}" placeholder="your@email.com" required>
                        </div>
                        
                        <div class="form-group">
                            <label class="form-label">
                                <i class="fa-solid fa-phone"></i> Phone Number <span class="required">*</span>
                            </label>
                            <input type="tel" id="phone" name="phone" class="form-input" placeholder="Your phone number" required>
                        </div>
                        
                        <div class="form-group">
                            <label class="form-label">
                                <i class="fa-solid fa-users"></i> Number of Guests <span class="required">*</span>
                            </label>
                            <input type="number" id="person" name="person" class="form-input" placeholder="How many guests?" min="1" max="50" required>
                        </div>
                        
                        <div class="form-group">
                            <label class="form-label">
                                <i class="fa-solid fa-calendar"></i> Select Date <span class="required">*</span>
                            </label>
                            <input type="date" id="date" name="date" class="form-input" required>
                        </div>
                        
                        <div class="form-group">
                            <label class="form-label">
                                <i class="fa-solid fa-clock"></i> Meal Period <span class="required">*</span>
                            </label>
                            <select id="meal" name="meal_period" class="form-select" required>
                                <option value="">Choose a time slot</option>
                                @forelse ($meal as $row)
                                    <option value="{{ $row->id }}">{{ $row->name }}</option>
                                @empty
                                @endforelse
                            </select>
                        </div>
                        
                        <div class="form-group full-width">
                            @auth
                                <button type="button" id="createReservation" class="submit-btn">
                                    <i class="fa-solid fa-calendar-check"></i> Confirm Reservation
                                </button>
                            @else
                                <a href="{{ route('login') }}" class="submit-btn">
                                    <i class="fa-solid fa-right-to-bracket"></i> Login to Book a Table
                                </a>
                            @endauth
                        </div>
                    </div>
                </form>
            </div>
            
            <!-- Right - Info Sidebar -->
            <div class="info-sidebar">
                <div class="info-card-main">
                    <h3><i class="fa-solid fa-circle-info"></i> Restaurant Info</h3>
                    
                    <div class="info-item">
                        <div class="icon-box">
                            <i class="fa-solid fa-clock"></i>
                        </div>
                        <div class="text">
                            <h4>Opening Hours</h4>
                            <p>Mon - Fri: 10:00 AM - 10:00 PM<br>Sat - Sun: 11:00 AM - 11:00 PM</p>
                        </div>
                    </div>
                    
                    <div class="info-item">
                        <div class="icon-box">
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <div class="text">
                            <h4>Call Us</h4>
                            <p>07-99217813<br>For quick reservations</p>
                        </div>
                    </div>
                    
                    <div class="info-item">
                        <div class="icon-box">
                            <i class="fa-solid fa-location-dot"></i>
                        </div>
                        <div class="text">
                            <h4>Our Location</h4>
                            <p>House 10, Road 03<br>Mirpur, Dhaka</p>
                        </div>
                    </div>
                </div>
                
                <div class="features-card">
                    <h4><i class="fa-solid fa-star"></i> Why Dine With Us</h4>
                    <div class="feature-item">
                        <i class="fa-solid fa-check-circle"></i>
                        Fresh & Quality Ingredients
                    </div>
                    <div class="feature-item">
                        <i class="fa-solid fa-check-circle"></i>
                        Cozy & Elegant Ambiance
                    </div>
                    <div class="feature-item">
                        <i class="fa-solid fa-check-circle"></i>
                        Expert Culinary Team
                    </div>
                    <div class="feature-item">
                        <i class="fa-solid fa-check-circle"></i>
                        Exceptional Service
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
        // Set minimum date to today
        var today = new Date().toISOString().split('T')[0];
        $('#date').attr('min', today);
        
        $("#createReservation").click(function() {
            // Get all form values
            var name = $("#name").val().trim();
            var email = $("#email").val().trim();
            var phone = $("#phone").val().trim();
            var person = $("#person").val();
            var date = $("#date").val();
            var meal = $("#meal").val();
            
            // Validate all required fields
            if (!name) {
                Swal.fire({
                    icon: 'warning',
                    title: 'Name Required',
                    text: 'Please enter your name',
                    confirmButtonColor: '#DD5903'
                });
                $("#name").focus();
                return;
            }
            
            if (!email) {
                Swal.fire({
                    icon: 'warning',
                    title: 'Email Required',
                    text: 'Please enter your email address',
                    confirmButtonColor: '#DD5903'
                });
                $("#email").focus();
                return;
            }
            
            // Validate email format
            var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email)) {
                Swal.fire({
                    icon: 'warning',
                    title: 'Invalid Email',
                    text: 'Please enter a valid email address',
                    confirmButtonColor: '#DD5903'
                });
                $("#email").focus();
                return;
            }
            
            if (!phone) {
                Swal.fire({
                    icon: 'warning',
                    title: 'Phone Required',
                    text: 'Please enter your phone number',
                    confirmButtonColor: '#DD5903'
                });
                $("#phone").focus();
                return;
            }
            
            if (!person || person < 1) {
                Swal.fire({
                    icon: 'warning',
                    title: 'Guests Required',
                    text: 'Please enter the number of guests',
                    confirmButtonColor: '#DD5903'
                });
                $("#person").focus();
                return;
            }
            
            if (!date) {
                Swal.fire({
                    icon: 'warning',
                    title: 'Date Required',
                    text: 'Please select a reservation date',
                    confirmButtonColor: '#DD5903'
                });
                $("#date").focus();
                return;
            }
            
            if (!meal) {
                Swal.fire({
                    icon: 'warning',
                    title: 'Meal Period Required',
                    text: 'Please select a meal period',
                    confirmButtonColor: '#DD5903'
                });
                $("#meal").focus();
                return;
            }
            
            // Show loading
            Swal.fire({
                title: 'Processing...',
                text: 'Please wait while we confirm your reservation',
                allowOutsideClick: false,
                showConfirmButton: false,
                willOpen: () => {
                    Swal.showLoading();
                }
            });
            
            $.ajax({
                method: "POST",
                url: "{{ route('reservation.store') }}",
                data: {
                    _token: "{{ csrf_token() }}",
                    cid: $("#cid").val(),
                    name: name,
                    email: email,
                    phone: phone,
                    meal_period: meal,
                    date: date,
                    person: person,
                    status: $("#status").val(),
                    website: "website"
                },
            })
            .done(function(data) {
                Swal.fire({
                    icon: 'success',
                    title: 'Reservation Confirmed!',
                    html: '<p style="margin-bottom:0;">Your table has been reserved for <strong>' + person + ' guest(s)</strong> on <strong>' + date + '</strong>.<br>We look forward to seeing you!</p>',
                    confirmButtonColor: '#DD5903',
                    confirmButtonText: 'Great!'
                });
                
                // Reset only editable fields
                $("#phone").val('');
                $("#person").val('');
                $("#date").val('');
                $("#meal").val('');
            })
            .fail(function(xhr) {
                var errorMsg = 'Something went wrong. Please try again.';
                if (xhr.responseJSON && xhr.responseJSON.message) {
                    errorMsg = xhr.responseJSON.message;
                }
                Swal.fire({
                    icon: 'error',
                    title: 'Oops!',
                    text: errorMsg,
                    confirmButtonColor: '#DD5903'
                });
            });
        });
    });
</script>
@endsection
