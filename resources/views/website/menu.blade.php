@extends('website.layout.app')

@section('css')
<style>
    /* Category Filter Styles */
    .portfolio-menu {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 10px;
        margin-bottom: 40px;
    }
    
    .gf_btn {
        padding: 12px 28px;
        font-size: 15px;
        font-weight: 600;
        border: 2px solid #DD5903;
        background: transparent;
        color: #DD5903;
        border-radius: 30px;
        cursor: pointer;
        transition: all 0.3s ease;
    }
    
    .gf_btn:hover,
    .gf_btn.active {
        background: #DD5903;
        color: #fff;
        box-shadow: 0 4px 15px rgba(221, 89, 3, 0.4);
    }
    
    /* Menu Item Animation */
    .menu-item-wrapper {
        transition: all 0.4s ease;
    }
    
    .menu-item-wrapper.hide {
        display: none;
    }
    
    .menu-item-wrapper.show {
        animation: fadeIn 0.4s ease;
    }
    
    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>
@endsection

@section('content')

<!-- Top design area start -->
<div class="rts-menu-area menu rts-section-gap mt-5">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-12">
                <div class="banner-one-wrapper">
                    <div class="title-img" data-sal="zoom-in" data-sal-delay="100" data-sal-duration="800">
                        <img src="{{asset('website/assets/images/about/title-shape.png') }}" alt="about">
                    </div>
                    <h1 class="title-banner" data-sal="slide-up" data-sal-delay="120" data-sal-duration="800">
                        Our Food Menu
                    </h1>
                    <p class="desc" data-sal="slide-up" data-sal-duration="800">Discover our delicious selection of dishes prepared <br> with fresh ingredients and passion.</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-xxl-12 text-center">
                <div class="portfolio-menu mb-35" data-sal="slide-up" data-sal-delay="450" data-sal-duration="800">
                    <button class="gf_btn active" data-filter="all">All</button>
                    @foreach ($categories as $category)
                        <button class="gf_btn" data-filter="cat-{{ $category->id }}">{{ $category->name }}</button>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Top design area end -->

<div class="rts-shop-area rts-section-gap">
    <div class="container">
        <div class="shop-area-inner">
            <div class="menu-item">
                <div class="row" id="menuItemsContainer">
                    @forelse ($menu as $row)
                    <div class="col-lg-4 menu-item-wrapper show" data-category="cat-{{ $row->category_id }}">
                        <div class="portfolio-wrapper2 mb-30">
                            @forelse ($row->images as $image)
                            <a href="{{ route('single', ['id' => $row->id]) }}" class="image">
                                <img class="img-fluid" style="height: 200px; width: 100%; object-fit: cover;" src="{{ asset('storage/' . $image->name) }}" alt="{{ $row->name }}">
                            </a>
                            @empty
                            <div class="alert alert-warning" role="alert">
                                No Image Available
                            </div>
                            @endforelse
                            <div class="portfolio-content">
                                <div class="content">
                                    <span class="category-badge" style="display: inline-block; background: #DD5903; color: #fff; padding: 4px 12px; border-radius: 15px; font-size: 11px; font-weight: 600; margin-bottom: 8px;">
                                        {{ $row->category->name ?? 'Uncategorized' }}
                                    </span>
                                    <p class="title"><a href="{{ route('single', ['id' => $row->id]) }}">{{ $row->name }}</a></p>
                                    <p class="price">৳ {{ $row->price }}</p>
                                    <a data-menu-id="{{ $row->id }}" href="javascript:void(0)" class="rts-btn btn-primary add-to-cart-btn">ADD TO CART</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @empty
                    <div class="col-12 text-center">
                        <p>No menu items available.</p>
                    </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('js')
<script>
    $(document).ready(function() {
        // Category Filter Functionality
        $('.gf_btn').on('click', function() {
            // Update active button
            $('.gf_btn').removeClass('active');
            $(this).addClass('active');
            
            var filterValue = $(this).data('filter');
            
            // Filter menu items
            $('.menu-item-wrapper').each(function() {
                var itemCategory = $(this).data('category');
                
                if (filterValue === 'all' || itemCategory === filterValue) {
                    $(this).removeClass('hide').addClass('show');
                } else {
                    $(this).removeClass('show').addClass('hide');
                }
            });
        });
    });
</script>
@endsection