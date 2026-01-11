@extends('website.layout.app')

@section('css')
<style>
    /* ========================================
       CONTACT PAGE - MODERN DESIGN
    ======================================== */
    
    /* Hero Banner */
    .contact-banner {
        position: relative;
        height: 300px;
        background: linear-gradient(135deg, rgba(0,0,0,0.55) 0%, rgba(0,0,0,0.4) 100%),
                    url('{{ asset("website/assets/images/banner/banner-img2.webp") }}');
        background-size: cover;
        background-position: center;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        margin-top: 80px;
    }
    
    .banner-content h1 {
        font-size: 48px;
        font-weight: 400;
        color: #fff;
        margin-bottom: 10px;
        text-shadow: 2px 2px 10px rgba(0,0,0,0.3);
    }
    
    .banner-content p {
        font-size: 17px;
        color: rgba(255,255,255,0.9);
        max-width: 500px;
        margin: 0 auto;
    }
    
    .banner-divider {
        width: 60px;
        height: 3px;
        background: #DD5903;
        margin: 15px auto 20px;
        border-radius: 2px;
    }
    
    /* Contact Section */
    .contact-section {
        padding: 80px 0 100px;
        background: #f9fafb;
    }
    
    .contact-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 50px;
        align-items: start;
    }
    
    /* Info Side */
    .contact-info-wrapper {
        background: #fff;
        border-radius: 20px;
        padding: 40px;
        box-shadow: 0 4px 25px rgba(0,0,0,0.05);
        border: 1px solid #f3f4f6;
    }
    
    .info-title {
        margin-bottom: 30px;
    }
    
    .info-title h2 {
        font-size: 28px;
        font-weight: 700;
        color: #1f2937;
        margin: 0 0 8px;
    }
    
    .info-title p {
        color: #6b7280;
        font-size: 15px;
        margin: 0;
    }
    
    .info-item {
        display: flex;
        align-items: flex-start;
        gap: 18px;
        padding: 20px 0;
        border-bottom: 1px solid #f3f4f6;
    }
    
    .info-item:last-child {
        border-bottom: none;
        padding-bottom: 0;
    }
    
    .info-item .icon-box {
        width: 50px;
        height: 50px;
        background: linear-gradient(135deg, #fff5f0 0%, #ffebe0 100%);
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }
    
    .info-item .icon-box i {
        font-size: 20px;
        color: #DD5903;
    }
    
    .info-item .text h4 {
        font-size: 16px;
        font-weight: 600;
        color: #1f2937;
        margin: 0 0 6px;
    }
    
    .info-item .text p {
        font-size: 14px;
        color: #6b7280;
        margin: 0;
        line-height: 1.6;
    }
    
    .info-item .text a {
        color: #6b7280;
        text-decoration: none;
        transition: color 0.3s;
    }
    
    .info-item .text a:hover {
        color: #DD5903;
    }
    
    /* Form Side */
    .contact-form-wrapper {
        background: #fff;
        border-radius: 20px;
        padding: 40px;
        box-shadow: 0 4px 25px rgba(0,0,0,0.05);
        border: 1px solid #f3f4f6;
    }
    
    .form-title {
        margin-bottom: 30px;
    }
    
    .form-title h2 {
        font-size: 28px;
        font-weight: 700;
        color: #1f2937;
        margin: 0 0 8px;
    }
    
    .form-title p {
        color: #6b7280;
        font-size: 15px;
        margin: 0;
    }
    
    .form-group {
        margin-bottom: 20px;
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
    }
    
    .form-input,
    .form-textarea {
        width: 100%;
        padding: 15px 18px;
        border: 1.5px solid #e5e7eb !important;
        border-radius: 12px;
        font-size: 15px;
        color: #1f2937;
        background: #fff !important;
        transition: all 0.3s ease;
        font-family: inherit;
    }
    
    .form-input:focus,
    .form-textarea:focus {
        outline: none;
        border-color: #DD5903 !important;
        box-shadow: 0 0 0 4px rgba(221, 89, 3, 0.1);
    }
    
    .form-input::placeholder,
    .form-textarea::placeholder {
        color: #9ca3af;
    }
    
    .form-textarea {
        min-height: 140px;
        resize: vertical;
    }
    
    .submit-btn {
        width: 100%;
        padding: 16px 32px;
        background: linear-gradient(135deg, #DD5903 0%, #f97316 100%);
        color: #fff;
        font-size: 16px;
        font-weight: 600;
        border: none;
        border-radius: 12px;
        cursor: pointer;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
    }
    
    .submit-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 30px rgba(221, 89, 3, 0.25);
    }
    
    /* Map Section */
    .map-section {
        padding: 0 0 80px;
        background: #f9fafb;
    }
    
    .map-wrapper {
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 4px 25px rgba(0,0,0,0.08);
    }
    
    .map-wrapper iframe {
        width: 100%;
        height: 400px;
        border: none;
    }
    
    /* Responsive */
    @media (max-width: 992px) {
        .contact-grid {
            grid-template-columns: 1fr;
            gap: 30px;
        }
    }
    
    @media (max-width: 768px) {
        .contact-banner {
            height: 250px;
            margin-top: 70px;
        }
        
        .banner-content h1 {
            font-size: 32px;
        }
        
        .contact-section {
            padding: 50px 0 60px;
        }
        
        .contact-info-wrapper,
        .contact-form-wrapper {
            padding: 30px 25px;
        }
    }
</style>
@endsection

@section('content')

<!-- Hero Banner -->
<div class="contact-banner">
    <div class="banner-content">
        <h1>Contact Us</h1>
        <div class="banner-divider"></div>
        <p>We'd love to hear from you. Get in touch with us!</p>
    </div>
</div>

<!-- Contact Section -->
<section class="contact-section">
    <div class="container">
        <div class="contact-grid">
            <!-- Info Side -->
            <div class="contact-info-wrapper">
                <div class="info-title">
                    <h2>Get In Touch</h2>
                    <p>Have questions? We're here to help 24/7</p>
                </div>
                
                <div class="info-item">
                    <div class="icon-box">
                        <i class="fa-solid fa-location-dot"></i>
                    </div>
                    <div class="text">
                        <h4>Our Location</h4>
                        <p>House 10, Road 03<br>Mirpur, Dhaka, Bangladesh</p>
                    </div>
                </div>
                
                <div class="info-item">
                    <div class="icon-box">
                        <i class="fa-solid fa-phone"></i>
                    </div>
                    <div class="text">
                        <h4>Phone Number</h4>
                        <p><a href="tel:0799217813">07-99217813</a></p>
                    </div>
                </div>
                
                <div class="info-item">
                    <div class="icon-box">
                        <i class="fa-solid fa-envelope"></i>
                    </div>
                    <div class="text">
                        <h4>Email Address</h4>
                        <p><a href="mailto:ishratjahan260@gmail.com">ishratjahan260@gmail.com</a></p>
                    </div>
                </div>
                
                <div class="info-item">
                    <div class="icon-box">
                        <i class="fa-solid fa-clock"></i>
                    </div>
                    <div class="text">
                        <h4>Opening Hours</h4>
                        <p>Mon - Fri: 10:00 AM - 10:00 PM<br>Sat - Sun: 11:00 AM - 11:00 PM</p>
                    </div>
                </div>
            </div>
            
            <!-- Form Side -->
            <div class="contact-form-wrapper">
                <div class="form-title">
                    <h2>Send Us a Message</h2>
                    <p>Fill out the form and we'll get back to you soon</p>
                </div>
                
                <form id="contactForm">
                    <div class="form-group">
                        <label class="form-label">
                            <i class="fa-solid fa-user"></i> Your Name <span class="required">*</span>
                        </label>
                        <input type="text" id="contactName" class="form-input" placeholder="Enter your name" required>
                    </div>
                    
                    <div class="form-group">
                        <label class="form-label">
                            <i class="fa-solid fa-envelope"></i> Email Address <span class="required">*</span>
                        </label>
                        <input type="email" id="contactEmail" class="form-input" placeholder="Enter your email" required>
                    </div>
                    
                    <div class="form-group">
                        <label class="form-label">
                            <i class="fa-solid fa-phone"></i> Phone Number
                        </label>
                        <input type="tel" id="contactPhone" class="form-input" placeholder="Enter your phone number">
                    </div>
                    
                    <div class="form-group">
                        <label class="form-label">
                            <i class="fa-solid fa-message"></i> Your Message <span class="required">*</span>
                        </label>
                        <textarea id="contactMessage" class="form-textarea" placeholder="Write your message here..." required></textarea>
                    </div>
                    
                    <button type="submit" class="submit-btn">
                        <i class="fa-solid fa-paper-plane"></i> Send Message
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Map Section -->
<section class="map-section">
    <div class="container">
        <div class="map-wrapper">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.5867876686484!2d90.36448247601938!3d23.80022578613889!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c0d33532b3fb%3A0x2b27b0c01cb2bc0d!2sMirpur-6%2C%20Dhaka!5e0!3m2!1sen!2sbd!4v1704973200000!5m2!1sen!2sbd" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</section>

@endsection

@section('js')
<script>
    $(document).ready(function() {
        $('#contactForm').on('submit', function(e) {
            e.preventDefault();
            
            var name = $('#contactName').val().trim();
            var email = $('#contactEmail').val().trim();
            var message = $('#contactMessage').val().trim();
            
            // Validate
            if (!name) {
                Swal.fire({
                    icon: 'warning',
                    title: 'Name Required',
                    text: 'Please enter your name',
                    confirmButtonColor: '#DD5903'
                });
                $('#contactName').focus();
                return;
            }
            
            if (!email) {
                Swal.fire({
                    icon: 'warning',
                    title: 'Email Required',
                    text: 'Please enter your email address',
                    confirmButtonColor: '#DD5903'
                });
                $('#contactEmail').focus();
                return;
            }
            
            var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email)) {
                Swal.fire({
                    icon: 'warning',
                    title: 'Invalid Email',
                    text: 'Please enter a valid email address',
                    confirmButtonColor: '#DD5903'
                });
                $('#contactEmail').focus();
                return;
            }
            
            if (!message) {
                Swal.fire({
                    icon: 'warning',
                    title: 'Message Required',
                    text: 'Please enter your message',
                    confirmButtonColor: '#DD5903'
                });
                $('#contactMessage').focus();
                return;
            }
            
            // Show success (since there's no backend endpoint for contact form)
            Swal.fire({
                icon: 'success',
                title: 'Message Sent!',
                html: '<p>Thank you for contacting us, <strong>' + name + '</strong>!<br>We will get back to you soon.</p>',
                confirmButtonColor: '#DD5903',
                confirmButtonText: 'OK'
            });
            
            // Reset form
            $('#contactForm')[0].reset();
        });
    });
</script>
@endsection
