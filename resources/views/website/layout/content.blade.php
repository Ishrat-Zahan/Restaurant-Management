@extends('website.layout.app')
@section('content')


<!-- banner start -->
<div class="rts-banner-main-area-swiper banner-three">
    <div class="banner-shape-1">
        <img src="{{ asset('website/assets/images/banner/victor-13.webp') }}" alt="shape">
    </div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="banner-one-wrapper pt--100">
                    <h1 class="title-banner">
                        Delicious Foods
                    </h1>
                    <div class="button-area-banner">
                        <a href="{{ route('about') }}" class="rts-btn btn-primary">View More</a>
                        <a href="{{ route('wmenu') }}" class="rts-btn btn-seconday">Food Menu</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="hero-section-area">
                    <img src="{{ asset('website/assets/images/banner/banner-img2.webp') }}" alt="hero-image">
                </div>
            </div>
        </div>
        <div class="rts-reservation-area">
            <form action="{{ route('reservation.store') }}" method="post" class="appoinment-form" id="homeBookingForm">
                @csrf
                <input id="home_cid" type="hidden" value="{{ $userId }}" name="cid">
                <input id="home_website" type="hidden" value="website" name="website">
                <input type="hidden" id="home_status" value="1" name="status">
                
                <div class="single-input">
                    <h3 class="title">Book A Table</h3>
                </div>
                <div class="single-input">
                    <input id="home_person" name="person" type="number" placeholder="Number of Guests" min="1" required>
                </div>
                <div class="single-input">
                    <input id="home_datepicker" placeholder="Select Date" type="text" name="date" class="calendar" required autocomplete="off">
                </div>
                <div class="single-input">
                    <select id="home_meal" class="form-select" name="meal_period" required style="width: 100%; height: 50px; padding: 0 15px; border: none; border-radius: 5px; background: #fff; color: #666; font-size: 14px; appearance: none; -webkit-appearance: none; -moz-appearance: none; background-image: url('data:image/svg+xml;utf8,<svg fill=\'%23666\' height=\'24\' viewBox=\'0 0 24 24\' width=\'24\' xmlns=\'http://www.w3.org/2000/svg\'><path d=\'M7 10l5 5 5-5z\'/></svg>'); background-repeat: no-repeat; background-position: right 10px center; cursor: pointer;">
                        <option value="">Select Meal Period</option>
                        @forelse ($meal as $row)
                            <option value="{{ $row->id }}">{{ $row->name }}</option>
                        @empty
                        @endforelse
                    </select>
                </div>
                <div class="single-input">
                    @auth
                        <button id="homeCreateReservation" type="button" class="rts-btn btn-primary">BOOK TABLE</button>
                    @else
                        <a href="{{ route('login') }}" class="rts-btn btn-primary" style="display: inline-block; text-align: center;">LOGIN TO BOOK</a>
                    @endauth
                </div>
            </form>
        </div>
    </div>
</div>
<!-- banner end -->

<!-- menu area start -->
<div class="rts-menu-area3 rts-section-gap" data-sal="slide-up" data-sal-delay="120" data-sal-duration="800">
    <div class="container">
        <div class="menu-area-inner">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="thumbnail-2">
                        <div class="reveal-item overflow-hidden aos-init">
                            <div class="reveal-animation reveal-end reveal-primary aos aos-init" data-aos="reveal-end"></div>
                            <img src="{{ asset('website/assets/images/about/about3.webp') }}" alt="about">
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-6">
                    <div class="banner-one-wrapper">
                        <div class="title-img" data-sal="zoom-in" data-sal-delay="150" data-sal-duration="800">
                            <img src="{{ asset('website/assets/images/about/title-shape.png') }}" alt="about">
                        </div>
                        <h1 class="title-banner" data-sal="slide-up" data-sal-delay="170" data-sal-duration="800">
                            Welcome To Our <br> Luxury Restaurant
                        </h1>
                        <div class="banner-shape-area" data-sal="slide-up" data-sal-delay="200" data-sal-duration="800">
                            <span class="shape"></span>
                            <span class="shape"></span>
                            <span class="shape"></span>
                        </div>
                        <p class="desc" data-sal="slide-up" data-sal-duration="800">Experience the perfect blend of authentic flavors and modern <br> culinary artistry. Our chefs craft each dish with passion, using <br> the freshest ingredients to delight your taste buds.</p>
                        <div class="button-area-banner" data-sal="slide-up" data-sal-delay="350" data-sal-duration="800">
                            <a href="{{ route('wmenu') }}" class="rts-btn btn-secondary">View Our Menu</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="menu-wrapper-inner">
                        @forelse ($latest as $row)
                        <div class="menu-wrapper" data-sal="zoom-in" data-sal-delay="150" data-sal-duration="800">
                            @forelse ($row->images as $image)
                            <div class="menu-image"><a href="shop-details.html">

                                    <a href="{{ route('single', ['id' => $row->id]) }}" class="image">
                                        <img class="img-fluid" src="{{asset('storage/'.$image->name)}}" alt="Portfolio Img">
                                    </a>
                                    @empty
                                    <div class="alert alert-warning" role="alert">
                                        No Image Available
                                    </div>
                                    @endforelse
                            </div>
                            <div class="content">
                                <h4 class="p-title"><a href="{{ route('single', ['id' => $row->id]) }}">{{$row->name}}</a></h4>
                                <div class="price-tag"><a href="{{ route('single', ['id' => $row->id]) }}">{{$row->price}}</a></div>
                            </div>
                        </div>

                        @empty

                        @endforelse
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- menu area end -->


<!-- menu area start -->
<div class="rts-menu-area3 area-2 rts-section-gap" data-sal="slide-up" data-sal-delay="120" data-sal-duration="800">
    <div class="container">
        <div class="menu-area-inner">
            <div class="row text-center">
                <div class="col-lg-12">
                    <div class="banner-one-wrapper">
                        <div class="banner-shape-area" data-sal="slide-up" data-sal-delay="200" data-sal-duration="800">
                            <span class="shape"></span>
                            <span class="shape"></span>
                            <span class="shape"></span>
                        </div>
                        <h1 class="title-banner" data-sal="slide-up" data-sal-delay="120" data-sal-duration="800">
                            Our Set Menus
                        </h1>
                        <p class="desc" data-sal="slide-up" data-sal-delay="200" data-sal-duration="800">A restaurant is a business that prepares and serves food and <br> drinks to customers meals are generally served</p>
                    </div>
                </div>
            </div>
            <div class="row">
                @forelse ($latest as $row)
                <div class="col-lg-3 col-md-6">
                    <div class="portfolio-wrapper2 mb-30" data-sal="slide-up" data-sal-delay="1000" data-sal-duration="800">
                        @forelse ($row->images as $image)
                        <a href="{{ route('single', ['id' => $row->id]) }}" class="image">
                            <img class="img-fluid" src="{{ asset('storage/'.$image->name) }}" alt="Portfolio Img" style="height: 250px; width: auto;">
                        </a>
                        @empty
                        <div class="alert alert-warning" role="alert">
                            No Image Available
                        </div>
                        @endforelse
                        <div class="portfolio-content">
                            <div class="content">
                                <p class="title"><a href="{{ route('single', ['id' => $row->id]) }}">{{$row->name}}</a></p>
                                <span class="price">{{$row->price}}</span>
                            </div>
                        </div>
                    </div>
                </div>
                @empty

                @endforelse
            </div>

            <div class="button-area-banner" data-sal="slide-up" data-sal-delay="300" data-sal-duration="800">
                <a href="{{ route('wmenu') }}" class="rts-btn btn-secondary">More Dishes <i class="fa-light fa-arrow-right-long"></i></a>
            </div>
        </div>
    </div>
</div>
<!-- menu area end -->


<!-- Cta area start -->
<div class="rts-cta-area">
    <div class="container">
        <div class="cta-inner">
            <h2 class="title">
                <span class="first-title">Book Your Table Today.</span>
                <span class="second-title"> Book Now!</span>
            </h2>
            <a href="{{ route('reserve') }}" class="rts-btn btn-primary"><i class="fa-solid fa-table"></i>BOOK A TABLE</a>
        </div>
    </div>
</div>
<!-- Cta area end -->

@endsection

@section('js')
<script>
    $(document).ready(function() {
        // Initialize jQuery UI Datepicker for home booking form
        $("#home_datepicker").datepicker({
            dateFormat: 'yy-mm-dd',
            minDate: 0, // Disable past dates
            showAnim: 'fadeIn'
        });
        
        // Home page booking form submission
        $("#homeCreateReservation").click(function() {
            // Validate form
            var person = $("#home_person").val();
            var date = $("#home_datepicker").val();
            var meal = $("#home_meal").val();
            var cid = $("#home_cid").val();
            
            if (!person || !date || !meal || meal === "") {
                Swal.fire({
                    icon: 'warning',
                    title: 'Missing Information',
                    text: 'Please fill in all required fields',
                    confirmButtonColor: '#DD5903'
                });
                return;
            }
            
            if (!cid) {
                Swal.fire({
                    icon: 'info',
                    title: 'Login Required',
                    text: 'Please login to make a reservation',
                    confirmButtonColor: '#DD5903'
                }).then(() => {
                    window.location.href = "{{ route('login') }}";
                });
                return;
            }
            
            $.ajax({
                method: "POST",
                url: "{{ route('reservation.store') }}",
                data: {
                    cid: cid,
                    meal_period: meal,
                    date: date,
                    person: person,
                    status: $("#home_status").val(),
                    website: "website"
                },
            })
            .done(function(data) {
                Swal.fire({
                    icon: 'success',
                    title: 'Reservation Successful!',
                    text: 'Your table has been booked successfully',
                    confirmButtonColor: '#DD5903'
                }).then(() => {
                    // Reset form
                    $("#home_person").val('');
                    $("#home_datepicker").val('');
                    $("#home_meal").val('');
                });
            })
            .fail(function(xhr, status, error) {
                Swal.fire({
                    icon: 'error',
                    title: 'Booking Failed',
                    text: 'Something went wrong. Please try again.',
                    confirmButtonColor: '#DD5903'
                });
            });
        });
    });
</script>
@endsection