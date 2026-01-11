@extends('website.layout.app')

@section('css')
<style>
    /* ========================================
       ABOUT PAGE - ELEGANT DESIGN
    ======================================== */
    
    /* Hero Banner */
    .about-banner {
        position: relative;
        height: 320px;
        background: linear-gradient(135deg, rgba(0,0,0,0.55) 0%, rgba(0,0,0,0.4) 100%),
                    url('{{ asset("website/assets/images/banner/03.webp") }}');
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
    
    /* About Section */
    .about-section {
        padding: 80px 0;
        background: #fff;
    }
    
    .about-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 60px;
        align-items: center;
    }
    
    .about-image {
        position: relative;
    }
    
    .about-image img {
        width: 100%;
        border-radius: 20px;
        box-shadow: 0 20px 50px rgba(0,0,0,0.15);
    }
    
    .about-image .experience-badge {
        position: absolute;
        bottom: -20px;
        right: -20px;
        background: linear-gradient(135deg, #DD5903 0%, #f97316 100%);
        color: #fff;
        padding: 25px 30px;
        border-radius: 16px;
        text-align: center;
        box-shadow: 0 10px 30px rgba(221, 89, 3, 0.3);
    }
    
    .experience-badge .number {
        font-size: 42px;
        font-weight: 700;
        line-height: 1;
    }
    
    .experience-badge .text {
        font-size: 14px;
        font-weight: 500;
        margin-top: 5px;
    }
    
    .about-content .subtitle {
        font-size: 14px;
        text-transform: uppercase;
        letter-spacing: 3px;
        color: #DD5903;
        font-weight: 600;
        margin-bottom: 12px;
    }
    
    .about-content h2 {
        font-size: 36px;
        font-weight: 700;
        color: #1f2937;
        margin-bottom: 20px;
        line-height: 1.3;
    }
    
    .about-content p {
        font-size: 16px;
        color: #6b7280;
        line-height: 1.8;
        margin-bottom: 20px;
    }
    
    .about-features {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 15px;
        margin: 30px 0;
    }
    
    .feature-item {
        display: flex;
        align-items: center;
        gap: 10px;
        font-size: 15px;
        color: #374151;
        font-weight: 500;
    }
    
    .feature-item i {
        color: #DD5903;
        font-size: 16px;
    }
    
    /* Story Section */
    .story-section {
        padding: 80px 0;
        background: #f9fafb;
    }
    
    .story-content {
        max-width: 800px;
        margin: 0 auto;
        text-align: center;
    }
    
    .story-content .subtitle {
        font-size: 14px;
        text-transform: uppercase;
        letter-spacing: 3px;
        color: #DD5903;
        font-weight: 600;
        margin-bottom: 12px;
    }
    
    .story-content h2 {
        font-size: 36px;
        font-weight: 700;
        color: #1f2937;
        margin-bottom: 25px;
    }
    
    .story-content p {
        font-size: 16px;
        color: #6b7280;
        line-height: 1.9;
        margin-bottom: 20px;
    }
    
    /* Values Section */
    .values-section {
        padding: 80px 0;
        background: #fff;
    }
    
    .section-header {
        text-align: center;
        margin-bottom: 50px;
    }
    
    .section-header .subtitle {
        font-size: 14px;
        text-transform: uppercase;
        letter-spacing: 3px;
        color: #DD5903;
        font-weight: 600;
        margin-bottom: 12px;
    }
    
    .section-header h2 {
        font-size: 36px;
        font-weight: 700;
        color: #1f2937;
    }
    
    .values-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 30px;
    }
    
    .value-card {
        background: #fff;
        padding: 35px 30px;
        border-radius: 20px;
        text-align: center;
        box-shadow: 0 4px 25px rgba(0,0,0,0.05);
        border: 1px solid #f3f4f6;
        transition: all 0.3s ease;
    }
    
    .value-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 15px 40px rgba(0,0,0,0.1);
    }
    
    .value-card .icon {
        width: 70px;
        height: 70px;
        background: linear-gradient(135deg, #fff5f0 0%, #ffebe0 100%);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 20px;
    }
    
    .value-card .icon i {
        font-size: 28px;
        color: #DD5903;
    }
    
    .value-card h3 {
        font-size: 20px;
        font-weight: 600;
        color: #1f2937;
        margin-bottom: 12px;
    }
    
    .value-card p {
        font-size: 14px;
        color: #6b7280;
        line-height: 1.7;
        margin: 0;
    }
    
    /* CTA Section */
    .cta-section {
        padding: 80px 0;
        background: #f9fafb;
        text-align: center;
        border-top: 1px solid #e5e7eb;
    }
    
    .cta-content h2 {
        font-size: 36px;
        font-weight: 700;
        color: #1f2937;
        margin-bottom: 15px;
    }
    
    .cta-content p {
        font-size: 17px;
        color: #6b7280;
        margin-bottom: 30px;
    }
    
    .cta-btn {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        padding: 16px 35px;
        background: linear-gradient(135deg, #DD5903 0%, #f97316 100%);
        color: #fff;
        font-size: 16px;
        font-weight: 600;
        border-radius: 12px;
        text-decoration: none;
        transition: all 0.3s ease;
    }
    
    .cta-btn:hover {
        transform: translateY(-3px);
        box-shadow: 0 10px 30px rgba(221, 89, 3, 0.3);
        color: #fff;
    }
    
    /* Responsive */
    @media (max-width: 992px) {
        .about-grid {
            grid-template-columns: 1fr;
            gap: 40px;
        }
        
        .about-image .experience-badge {
            bottom: -15px;
            right: 20px;
        }
        
        .values-grid {
            grid-template-columns: 1fr;
        }
    }
    
    @media (max-width: 768px) {
        .about-banner {
            height: 260px;
            margin-top: 70px;
        }
        
        .banner-content h1 {
            font-size: 32px;
        }
        
        .about-section,
        .story-section,
        .values-section {
            padding: 50px 0;
        }
        
        .about-content h2,
        .story-content h2,
        .section-header h2 {
            font-size: 28px;
        }
        
        .about-features {
            grid-template-columns: 1fr;
        }
    }
</style>
@endsection

@section('content')

<!-- Hero Banner -->
<div class="about-banner">
    <div class="banner-content">
        <h1>About Us</h1>
        <div class="banner-divider"></div>
        <p>Discover our story, passion, and commitment to excellence</p>
    </div>
</div>

<!-- About Section -->
<section class="about-section">
    <div class="container">
        <div class="about-grid">
            <div class="about-image">
                <img src="{{ asset('website/assets/images/project/menu-1.webp') }}" alt="IJ Restaurant">
                <div class="experience-badge">
                    <div class="number">5+</div>
                    <div class="text">Years of<br>Excellence</div>
                </div>
            </div>
            <div class="about-content">
                <span class="subtitle">Welcome to IJ Restaurant</span>
                <h2>Where Every Meal Becomes a Memorable Experience</h2>
                <p>
                    At IJ Restaurant, we believe that great food brings people together. Located in the heart of Mirpur, Dhaka, we have been serving delicious, authentic cuisine to our beloved customers since our establishment.
                </p>
                <p>
                    Our passionate team of chefs crafts each dish with love and dedication, using only the freshest ingredients sourced from local suppliers. From traditional favorites to innovative creations, every plate tells a story of culinary excellence.
                </p>
                
                <div class="about-features">
                    <div class="feature-item">
                        <i class="fa-solid fa-check-circle"></i> Fresh Ingredients
                    </div>
                    <div class="feature-item">
                        <i class="fa-solid fa-check-circle"></i> Expert Chefs
                    </div>
                    <div class="feature-item">
                        <i class="fa-solid fa-check-circle"></i> Cozy Ambiance
                    </div>
                    <div class="feature-item">
                        <i class="fa-solid fa-check-circle"></i> Friendly Service
                    </div>
                    <div class="feature-item">
                        <i class="fa-solid fa-check-circle"></i> Family Friendly
                    </div>
                    <div class="feature-item">
                        <i class="fa-solid fa-check-circle"></i> Affordable Prices
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Story Section -->
<section class="story-section">
    <div class="container">
        <div class="story-content">
            <span class="subtitle">Our Story</span>
            <h2>A Journey of Passion & Flavor</h2>
            <p>
                IJ Restaurant was born from a simple dream – to create a place where people could enjoy exceptional food in a warm, welcoming environment. What started as a small family venture has grown into one of Mirpur's most beloved dining destinations.
            </p>
            <p>
                Our founder, driven by a deep love for cooking and hospitality, envisioned a restaurant that would feel like home to every guest. Today, that vision lives on in every dish we serve and every smile we share with our customers.
            </p>
            <p>
                We take pride in our commitment to quality, from carefully selecting our ingredients to ensuring every guest leaves satisfied. Our menu celebrates the rich flavors of our cuisine while embracing creativity and innovation.
            </p>
        </div>
    </div>
</section>

<!-- Our Values Section -->
<section class="values-section">
    <div class="container">
        <div class="section-header">
            <span class="subtitle">What We Stand For</span>
            <h2>Our Core Values</h2>
        </div>
        
        <div class="values-grid">
            <div class="value-card">
                <div class="icon">
                    <i class="fa-solid fa-heart"></i>
                </div>
                <h3>Passion</h3>
                <p>We pour our hearts into every dish, ensuring each bite reflects our dedication to culinary excellence.</p>
            </div>
            
            <div class="value-card">
                <div class="icon">
                    <i class="fa-solid fa-leaf"></i>
                </div>
                <h3>Quality</h3>
                <p>Only the finest, freshest ingredients make it to your plate. We never compromise on quality.</p>
            </div>
            
            <div class="value-card">
                <div class="icon">
                    <i class="fa-solid fa-users"></i>
                </div>
                <h3>Hospitality</h3>
                <p>Every guest is family. We strive to make your dining experience warm, welcoming, and memorable.</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section">
    <div class="container">
        <div class="cta-content">
            <h2>Ready to Experience Our Cuisine?</h2>
            <p>Book your table today and let us create an unforgettable dining experience for you.</p>
            <a href="{{ route('reserve') }}" class="cta-btn">
                <i class="fa-solid fa-calendar-check"></i> Reserve a Table
            </a>
        </div>
    </div>
</section>

@endsection
