<!DOCTYPE html>
<html lang="zxx">

<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>IJ-Admin</title>

    {{-- CSRF --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap1.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets/vendors/themefy_icon/themify-icons.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets/vendors/niceselect/css/nice-select.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets/vendors/owl_carousel/css/owl.carousel.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets/vendors/gijgo/gijgo.min.css') }}" />


    <link rel="stylesheet" href="{{ asset('assets/vendors/font_awesome/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/tagsinput/tagsinput.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets/vendors/datepicker/date-picker.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/vectormap-home/vectormap-2.0.2.css' ) }}" />

    <link rel="stylesheet" href="{{ asset('assets/vendors/scroll/scrollable.css' ) }}" />

    <link rel="stylesheet" href="{{ asset('assets/vendors/datatable/css/jquery.dataTables.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/datatable/css/responsive.dataTables.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/datatable/css/buttons.dataTables.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets/vendors/text_editor/summernote-bs4.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets/vendors/morris/morris.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/vendors/material_icon/material-icons.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets/css/metisMenu.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/style1.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/colors/default.css') }}" id="colorSkinCSS">

    <link rel="stylesheet" href="{{ asset('assets/js/jquery-ui-1.13.1/jquery-ui.min.css') }}" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    <style>
        /* Auth Buttons Styles (Guest) */
        .auth_buttons {
            display: flex;
            align-items: center;
            gap: 12px;
        }
        
        .auth_btn {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 10px 20px;
            font-size: 14px;
            font-weight: 600;
            border-radius: 8px;
            text-decoration: none;
            transition: all 0.3s ease;
        }
        
        .auth_btn.login_btn {
            background: transparent;
            color: #667eea;
            border: 2px solid #667eea;
        }
        
        .auth_btn.login_btn:hover {
            background: #667eea;
            color: #fff;
            transform: translateY(-2px);
            box-shadow: 0 4px 15px rgba(102, 126, 234, 0.4);
        }
        
        .auth_btn.register_btn {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: #fff;
            border: 2px solid transparent;
        }
        
        .auth_btn.register_btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(102, 126, 234, 0.5);
        }
        
        /* Profile Dropdown Styles (Logged In) */
        .profile_info {
            position: relative;
        }
        
        .profile_icon_wrapper {
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 8px 16px 8px 10px;
            border-radius: 50px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(102, 126, 234, 0.3);
        }
        
        .profile_icon_wrapper:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(102, 126, 234, 0.45);
        }
        
        .profile_icon {
            font-size: 26px;
            color: #fff;
        }
        
        .profile_name_text {
            color: #fff;
            font-size: 14px;
            font-weight: 600;
            max-width: 120px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }
        
        .profile_arrow {
            font-size: 10px;
            color: rgba(255, 255, 255, 0.8);
            transition: transform 0.3s ease;
        }
        
        .profile_icon_wrapper[aria-expanded="true"] .profile_arrow {
            transform: rotate(180deg);
        }
        
        .profile_dropdown {
            min-width: 280px;
            padding: 0;
            border: none;
            border-radius: 12px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.15);
            overflow: hidden;
            margin-top: 10px !important;
        }
        
        .profile_dropdown_header {
            display: flex;
            align-items: center;
            padding: 20px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: #fff;
        }
        
        .profile_dropdown_avatar {
            font-size: 48px;
            margin-right: 15px;
            opacity: 0.9;
        }
        
        .profile_dropdown_info {
            flex: 1;
            overflow: hidden;
        }
        
        .profile_dropdown_name {
            font-size: 16px;
            font-weight: 600;
            margin: 0;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }
        
        .profile_dropdown_email {
            font-size: 13px;
            margin: 4px 0 0 0;
            opacity: 0.85;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }
        
        .profile_dropdown .dropdown-divider {
            margin: 0;
            border-color: #eee;
        }
        
        .profile_dropdown_item {
            display: flex;
            align-items: center;
            padding: 14px 20px;
            font-size: 14px;
            font-weight: 500;
            color: #4a5568;
            transition: all 0.2s ease;
            border: none;
            background: none;
            width: 100%;
            text-align: left;
        }
        
        .profile_dropdown_item i {
            width: 20px;
            margin-right: 12px;
            font-size: 16px;
            color: #667eea;
        }
        
        .profile_dropdown_item:hover {
            background-color: #f7f8fc;
            color: #667eea;
        }
        
        .profile_dropdown_item.logout_btn {
            color: #e53e3e;
            cursor: pointer;
        }
        
        .profile_dropdown_item.logout_btn i {
            color: #e53e3e;
        }
        
        .profile_dropdown_item.logout_btn:hover {
            background-color: #fff5f5;
            color: #c53030;
        }
        
        .search-results-dropdown {
            position: absolute;
            top: calc(100% + 5px);
            left: 0;
            right: 0;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.15);
            z-index: 9999;
            max-height: 400px;
            overflow-y: auto;
            border: 1px solid #e5e7eb;
        }
        
        .search-result-item {
            display: flex;
            align-items: center;
            padding: 12px 15px;
            border-bottom: 1px solid #f0f0f0;
            transition: background 0.2s;
            text-decoration: none;
            color: #1f2937;
        }
        
        .search-result-item:last-child {
            border-bottom: none;
        }
        
        .search-result-item:hover {
            background: #f7f8fc;
        }
        
        .search-result-item .icon {
            width: 38px;
            height: 38px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 12px;
            font-size: 14px;
            flex-shrink: 0;
        }
        
        .search-result-item .icon.menu { background: #dcfce7; color: #16a34a; }
        .search-result-item .icon.order { background: #e0f2fe; color: #0284c7; }
        .search-result-item .icon.reservation { background: #ffedd5; color: #ea580c; }
        
        .search-result-item .info h5 {
            font-size: 14px;
            font-weight: 600;
            margin: 0 0 3px;
            color: #1f2937;
        }
        
        .search-result-item .info p {
            font-size: 12px;
            color: #6b7280;
            margin: 0;
        }
        
        .search-no-results {
            padding: 25px;
            text-align: center;
            color: #6b7280;
        }
        
        .search-no-results i {
            font-size: 24px;
            color: #d1d5db;
            display: block;
            margin-bottom: 10px;
        }
        
        /* Responsive Styles */
        @media (max-width: 991px) {
            .auth_buttons {
                gap: 8px;
            }
            
            .auth_btn {
                padding: 8px 14px;
                font-size: 13px;
            }
            
            .profile_icon_wrapper {
                padding: 6px 12px 6px 8px;
            }
            
            .profile_icon {
                font-size: 22px;
            }
            
            .profile_name_text {
                font-size: 13px;
                max-width: 80px;
            }
            
            .profile_dropdown {
                min-width: 260px;
                position: fixed !important;
                right: 10px !important;
                left: auto !important;
                transform: none !important;
            }
        }
        
        @media (max-width: 576px) {
            .auth_buttons {
                gap: 6px;
            }
            
            .auth_btn {
                padding: 8px 12px;
                font-size: 12px;
            }
            
            .auth_btn i {
                display: none;
            }
            
            .profile_icon_wrapper {
                padding: 6px;
                border-radius: 50%;
                width: 40px;
                height: 40px;
                justify-content: center;
            }
            
            .profile_name_text,
            .profile_arrow {
                display: none;
            }
            
            .profile_icon {
                font-size: 20px;
            }
            
            .profile_dropdown {
                min-width: 240px;
                right: 5px !important;
            }
            
            .profile_dropdown_header {
                padding: 15px;
            }
            
            .profile_dropdown_avatar {
                font-size: 40px;
                margin-right: 12px;
            }
            
            .profile_dropdown_name {
                font-size: 14px;
            }
            
            .profile_dropdown_email {
                font-size: 12px;
            }
            
            .profile_dropdown_item {
                padding: 12px 15px;
                font-size: 13px;
            }
        }
        
        /* Clean Table Styles */
        .table.table-success,
        .table.table-primary,
        .table.table-info {
            --bs-table-bg: transparent !important;
            --bs-table-striped-bg: transparent !important;
            background: transparent !important;
        }
        
        .admin-table {
            background: #fff;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            border: 1px solid #e5e7eb;
        }
        
        .admin-table thead {
            background: #f8fafc;
        }
        
        .admin-table thead th {
            font-weight: 600;
            color: #374151;
            padding: 14px 16px;
            border-bottom: 2px solid #e5e7eb;
            font-size: 13px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        
        .admin-table tbody td {
            padding: 12px 16px;
            vertical-align: middle;
            border-bottom: 1px solid #f3f4f6;
            color: #4b5563;
        }
        
        .admin-table tbody tr:hover {
            background: #f9fafb;
        }
        
        .admin-table tbody tr:last-child td {
            border-bottom: none;
        }
        
        /* Action Icons */
        .action-icons {
            display: flex;
            gap: 8px;
            align-items: center;
        }
        
        .action-icon {
            width: 32px;
            height: 32px;
            border-radius: 8px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 14px;
            transition: all 0.2s ease;
            border: none;
            cursor: pointer;
            text-decoration: none;
        }
        
        .action-icon.edit {
            background: #e0f2fe;
            color: #0284c7;
        }
        
        .action-icon.edit:hover {
            background: #0284c7;
            color: #fff;
        }
        
        .action-icon.delete {
            background: #fee2e2;
            color: #dc2626;
        }
        
        .action-icon.delete:hover {
            background: #dc2626;
            color: #fff;
        }
        
        .action-icon.view {
            background: #dcfce7;
            color: #16a34a;
        }
        
        .action-icon.view:hover {
            background: #16a34a;
            color: #fff;
        }
        
        /* Page Header */
        .page-header-admin {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            padding: 20px;
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        }
        
        .page-header-admin h3 {
            font-size: 20px;
            font-weight: 600;
            color: #1f2937;
            margin: 0;
        }
        
        /* Primary Button - Use this class for all primary actions */
        .btn-primary-custom {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 6px;
            padding: 10px 20px;
            background: #64c5b1;
            color: #fff;
            border-radius: 8px;
            font-weight: 600;
            font-size: 14px;
            text-decoration: none;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
        }
        
        .btn-primary-custom:hover {
            background: #52a899;
            transform: translateY(-2px);
            box-shadow: 0 5px 20px rgba(100, 197, 177, 0.4);
            color: #fff;
        }
        
        .btn-add {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            padding: 10px 20px;
            background: #64c5b1;
            color: #fff;
            border-radius: 8px;
            font-weight: 600;
            font-size: 14px;
            text-decoration: none;
            transition: all 0.3s ease;
            border: none;
        }
        
        .btn-add:hover {
            background: #52a899;
            transform: translateY(-2px);
            box-shadow: 0 5px 20px rgba(100, 197, 177, 0.4);
            color: #fff;
        }
        
        /* Pagination Styles */
        .pagination {
            display: flex;
            gap: 5px;
            flex-wrap: wrap;
            margin: 0;
            padding: 0;
        }
        
        .pagination .page-item .page-link {
            background: #fff;
            border: 1px solid #e5e7eb;
            color: #64c5b1;
            padding: 8px 14px;
            border-radius: 6px;
            font-size: 14px;
            font-weight: 500;
            transition: all 0.2s ease;
        }
        
        .pagination .page-item .page-link:hover {
            background: #64c5b1;
            border-color: #64c5b1;
            color: #fff;
        }
        
        .pagination .page-item.active .page-link {
            background: #64c5b1;
            border-color: #64c5b1;
            color: #fff;
        }
        
        .pagination .page-item.disabled .page-link {
            background: #f3f4f6;
            border-color: #e5e7eb;
            color: #9ca3af;
            cursor: not-allowed;
        }
        
        nav[aria-label="Pagination Navigation"] {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 15px;
        }
        
        nav[aria-label="Pagination Navigation"] > div:first-child p {
            color: #6b7280;
            font-size: 14px;
            margin: 0;
        }
    </style>
    
    @yield('style')
</head>

<body class="crm_body_bg">
    @include('partials.flash')


    <nav class="sidebar vertical-scroll  ps-container ps-theme-default ps-active-y">
        <div class="logo d-flex justify-content-between">
            <!-- <a href="index.html"><img src="{{ asset('assets/img/mylogo.png') }}" alt="" style="height: 60px; width: 120px;"></a> -->
            <div class="sidebar_close_icon d-lg-none">
                <i class="ti-close"></i>
            </div>
        </div>


        <ul id="sidebar_menu">
            <!-- Dashboard Link -->
            <li class="">
                <a href="{{ route('dashboard') }}" aria-expanded="false">
                    <div class="icon_menu">
                        <img src="{{ asset('assets/img/menu-icon/dashboard.svg') }}" alt="">
                    </div>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="mm-active">
                <a class="has-arrow" href="#" aria-expanded="false">
                    <div class="icon_menu">
                        <img src="{{ asset('assets/img/menu-icon/2.svg') }}" alt="">
                    </div>
                    <span>Customer</span>
                </a>
                <ul>
                    <li><a class="active" href="{{route('cuser.index')}}">Manage Customer</a></li>
                    <li><a href="{{route('cuser.create')}}">Create Customer</a></li>

                </ul>
            </li>
            <li class="">
                <a class="has-arrow" href="#" aria-expanded="false">
                    <div class="icon_menu">
                        <img src="{{ asset('assets/img/menu-icon/3.svg') }}" alt="">
                    </div>
                    <span>Menue</span>
                </a>
                <ul>
                    <li><a href="{{route('menu.index')}}">Manage Menu</a></li>
                    <li><a href="{{route('menu.create')}}">Create Menu</a></li>

                </ul>
            </li>
            <li class="">
                <a class="has-arrow" href="#" aria-expanded="false">
                    <div class="icon_menu">
                        <img src="{{ asset('assets/img/menu-icon/9.svg') }}" alt="">
                    </div>
                    <span>Category</span>
                </a>
                <ul>
                    <li><a href="{{route('category.index')}}">Manage Category</a></li>
                    <li><a href="{{route('category.create')}}">Create Category</a></li>

                </ul>
            </li>
            <li class="">
                <a class="has-arrow" href="#" aria-expanded="false">
                    <div class="icon_menu">
                        <img src="{{ asset('assets/img/menu-icon/10.svg') }}" alt="">
                    </div>
                    <span>Sub-Category</span>
                </a>
                <ul>
                    <li><a href="{{route('subcategory.index')}}">Manage Sub-Category</a></li>
                    <li><a href="{{route('subcategory.create')}}">Create Sub-Category</a></li>

                </ul>
            </li>
            
            <li class="">
                <a class="has-arrow" href="#" aria-expanded="false">
                    <div class="icon_menu">
                        <img src="{{ asset('assets/img/menu-icon/11.svg') }}" alt="">
                    </div>
                    <span>Reservations</span>
                </a>
                <ul>
                    <li><a href="{{route('reservation.index')}}">Manage Reservations</a></li>
                    <li><a href="{{route('reservation.create')}}">Create Reservations</a></li>

                </ul>
            </li>
            <!-- <li class="">
                <a class="has-arrow" href="#" aria-expanded="false">
                    <div class="icon_menu">
                        <img src="{{ asset('assets/img/menu-icon/3.svg') }}" alt="">
                    </div>
                    <span>Employees</span>
                </a>
                <ul>
                    <li><a href="colors.html">Manage Waiter</a></li>
                    <li><a href="Alerts.html">Create Waiter</a></li>
                    <li><a href="buttons.html">Manage Cook</a></li>
                    <li><a href="modal.html">Create Cook</a></li>
                   
                </ul>
            </li> -->
            <li class="">
                <a class="has-arrow" href="#" aria-expanded="false">
                    <div class="icon_menu">
                        <img src="{{ asset('assets/img/menu-icon/4.svg') }}" alt="">
                    </div>
                    <span>Orders</span>
                </a>
                <ul>
                    <li><a href="{{route('off_order.index')}}">Manage Order</a></li>
                    <li><a href="{{route('off_order.create')}}">Create Order</a></li>

                </ul>
            </li>
            <li class="">
                <a class="has-arrow" href="#" aria-expanded="false">
                    <div class="icon_menu">
                        <img src="{{ asset('assets/img/menu-icon/4.svg') }}" alt="">
                    </div>
                    <span>Online Orders</span>
                </a>
                <ul>
                    <li><a href="{{route('order.index')}}">Manage Order</a></li>


                </ul>
            </li>
            <li class="">
                <a class="has-arrow" href="#" aria-expanded="false">
                    <div class="icon_menu">
                        <img src="{{ asset('assets/img/menu-icon/5.svg') }}" alt="">
                    </div>
                    <span>Payments</span>
                </a>
                <ul>
                    <li><a href="{{route('payment')}}">Manage Payment</a></li>

                </ul>
            </li>

            <!-- <li class="">
                <a href="invoice.html" aria-expanded="false">
                    <div class="icon_menu">
                        <img src="{{ asset('assets/img/menu-icon/6.svg') }}" alt="">
                    </div>
                    <span>Materials</span>
                </a>
                <ul>
                    <li><a href="Basic_Elements.html">Manage Materials</a></li>
                    <li><a href="Groups.html">Create Materials</a></li>
                    
                </ul>
            </li> -->
            <li class="">
                <a class="has-arrow" href="#" aria-expanded="false">
                    <div class="icon_menu">
                        <img src="{{ asset('assets/img/menu-icon/2.svg') }}" alt="">
                    </div>
                    <span>Supplier</span>
                </a>
                <ul>
                    <li><a href="{{route('supplier.index')}}">Manage Supplier</a></li>
                    <li><a href="{{route('supplier.create')}}">Create Supplier</a></li>

                </ul>
            </li>

            <li class="">
                <a class="has-arrow" href="#" aria-expanded="false">
                    <div class="icon_menu">
                        <img src="{{ asset('assets/img/menu-icon/8.svg') }}" alt="">
                    </div>
                    <span>Materials</span>
                </a>
                <ul>
                    <li><a href="{{route('material.index')}}">Manage Materials</a></li>
                    <li><a href="{{route('material.create')}}">Create Materials</a></li>

                </ul>
            </li>
            <li class="">
                <a class="has-arrow" href="#" aria-expanded="false">
                    <div class="icon_menu">
                        <img src="{{ asset('assets/img/menu-icon/3.svg') }}" alt="">
                    </div>
                    <span>Purches</span>
                </a>
                <ul>
                    <li><a href="{{route('purches.index')}}">Manage Purches</a></li>
                    <li><a href="{{route('purches.create')}}">Create Purches</a></li>
                </ul>
            </li>
            <!-- <li class="">
                <a class="has-arrow" href="#" aria-expanded="false">
                    <div class="icon_menu">
                        <img src="{{ asset('assets/img/menu-icon/9.svg') }}" alt="">
                    </div>
                    <span>Animations</span>
                </a>
                <ul>
                    <li><a href="wow_animation.html">Animate</a></li>
                    <li><a href="Scroll_Reveal.html">Scroll Reveal</a></li>
                    <li><a href="tilt.html">Tilt Animation</a></li>
                </ul>
            </li>
            <li class="">
                <a class="has-arrow" href="#" aria-expanded="false">
                    <div class="icon_menu">
                        <img src="{{ asset('assets/img/menu-icon/10.svg') }}" alt="">
                    </div>
                    <span>Components</span>
                </a>
                <ul>
                    <li><a href="accordion.html">Accordions</a></li>
                    <li><a href="Scrollable.html">Scrollable</a></li>
                    <li><a href="notification.html">Notifications</a></li>
                    <li><a href="carousel.html">Carousel</a></li>
                    <li><a href="Pagination.html">Pagination</a></li>
                </ul>
            </li>
            <li class="">
                <a class="has-arrow" href="#" aria-expanded="false">
                    <div class="icon_menu">
                        <img src="{{ asset('assets/img/menu-icon/11.svg') }}" alt="">
                    </div>
                    <span>Table</span>
                </a>
                <ul>
                    <li><a href="data_table.html">Data Tables</a></li>
                    <li><a href="bootstrap_table.html">Bootstrap</a></li>
                </ul>
            </li>
            <li class="">
                <a class="has-arrow" href="#" aria-expanded="false">
                    <div class="icon_menu">
                        <img src="{{ asset('assets/img/menu-icon/12.svg') }}" alt="">
                    </div>
                    <span>Cards</span>
                </a>
                <ul>
                    <li><a href="basic_card.html">Basic Card</a></li>
                    <li><a href="theme_card.html">Theme Card</a></li>
                    <li><a href="dargable_card.html">Draggable Card</a></li>
                </ul>
            </li>
            <li class="">
                <a class="has-arrow" href="#" aria-expanded="false">
                    <div class="icon_menu">
                        <img src="{{ asset('assets/img/menu-icon/13.svg') }}" alt="">
                    </div>
                    <span>Charts</span>
                </a>
                <ul>
                    <li><a href="chartjs.html">ChartJS</a></li>
                    <li><a href="apex_chart.html">Apex Charts</a></li>
                    <li><a href="chart_sparkline.html">Chart sparkline</a></li>
                    <li><a href="am_chart.html">am-charts</a></li>
                    <li><a href="nvd3_charts.html">nvd3 charts.</a></li>
                </ul>
            </li>
            <li class="">
                <a class="has-arrow" href="#" aria-expanded="false">
                    <div class="icon_menu">
                        <img src="{{ asset('assets/img/menu-icon/14.svg') }}" alt="">
                    </div>
                    <span>Widgets</span>
                </a>
                <ul>
                    <li><a href="chart_box_1.html">Chart Boxes 1</a></li>
                    <li><a href="profilebox.html">Profile Box</a></li>
                </ul>
            </li>
            <li class="">
                <a class="has-arrow" href="#" aria-expanded="false">
                    <div class="icon_menu">
                        <img src="{{ asset('assets/img/menu-icon/15.svg') }}" alt="">
                    </div>
                    <span>Maps</span>
                </a>
                <ul>
                    <li><a href="mapjs.html">Maps JS</a></li>
                    <li><a href="vector_map.html">Vector Maps</a></li>
                </ul>
            </li>
            <li class="">
                <a class="has-arrow" href="#" aria-expanded="false">
                    <div class="icon_menu">
                        <img src="{{ asset('assets/img/menu-icon/16.svg') }}" alt="">
                    </div>
                    <span>Pages</span>
                </a>
                <ul>
                    <li><a href="login.html">Login</a></li>
                    <li><a href="resister.html">Register</a></li>
                    <li><a href="error_400.html">Error 404</a></li>
                    <li><a href="error_500.html">Error 500</a></li>
                    <li><a href="forgot_pass.html">Forgot Password</a></li>
                    <li><a href="gallery.html">Gallery</a></li>
                </ul>
            </li> -->
        </ul>
    </nav>

    <section class="main_content dashboard_part large_header_bg">

        <div class="container-fluid g-0">
            <div class="row">
                <div class="col-lg-12 p-0">
                    <div class="header_iner d-flex justify-content-between align-items-center">
                        <div class="sidebar_icon d-lg-none">
                            <i class="ti-menu"></i>
                        </div>
                        <div class="serach_field-area d-flex align-items-center">
                            <div class="search_inner">
                                <form action="{{ route('admin.search') }}" method="GET" id="adminSearchForm">
                                    <div class="search_field">
                                        <input type="text" name="q" id="adminSearchInput" placeholder="Search here..." autocomplete="off">
                                    </div>
                                    <button type="submit"> <img src="{{ asset('assets/img/icon/icon_search.svg') }}" alt=""> </button>
                                </form>
                                <!-- Search Results Dropdown -->
                                <div id="searchResultsDropdown" class="search-results-dropdown" style="display: none;">
                                    <div id="searchResultsList"></div>
                                </div>
                            </div>
                        </div>
                        <div class="header_right d-flex justify-content-between align-items-center">
                            @auth
                            {{-- Profile Dropdown for Logged In Users --}}
                            <div class="profile_info">
                                <div class="profile_icon_wrapper" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fas fa-user-circle profile_icon"></i>
                                    <span class="profile_name_text">{{ Auth::user()->name }}</span>
                                    <i class="fas fa-chevron-down profile_arrow"></i>
                                </div>
                                <div class="dropdown-menu dropdown-menu-end profile_dropdown">
                                    <div class="profile_dropdown_header">
                                        <i class="fas fa-user-circle profile_dropdown_avatar"></i>
                                        <div class="profile_dropdown_info">
                                            <p class="profile_dropdown_name">{{ Auth::user()->name }}</p>
                                            <p class="profile_dropdown_email">{{ Auth::user()->email }}</p>
                                        </div>
                                    </div>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item profile_dropdown_item" href="{{ route('profile.edit') }}">
                                        <i class="fas fa-user-edit"></i> My Profile
                                    </a>
                                    <a class="dropdown-item profile_dropdown_item" href="#">
                                        <i class="fas fa-cog"></i> Settings
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button type="submit" class="dropdown-item profile_dropdown_item logout_btn">
                                            <i class="fas fa-sign-out-alt"></i> Logout
                                        </button>
                                    </form>
                                </div>
                            </div>
                        @else
                            {{-- Login/Register Buttons for Guests --}}
                            <div class="auth_buttons">
                                <a href="{{ route('login') }}" class="auth_btn login_btn">
                                    <i class="fas fa-sign-in-alt"></i> Login
                                </a>
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="auth_btn register_btn">
                                        <i class="fas fa-user-plus"></i> Register
                                    </a>
                                @endif
                            </div>
                        @endauth
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @yield('page')

        <div class="footer_part">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer_iner text-center">
                            <p>2023 ©Designed by <a href="#"> <i class="ti-heart"></i> </a><a href="#"> Ishrat Jahan</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="CHAT_MESSAGE_POPUPBOX">
        <div class="CHAT_POPUP_HEADER">
            <div class="MSEESAGE_CHATBOX_CLOSE">
                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7.09939 5.98831L11.772 10.661C12.076 10.965 12.076 11.4564 11.772 11.7603C11.468 12.0643 10.9766 12.0643 10.6726 11.7603L5.99994 7.08762L1.32737 11.7603C1.02329 12.0643 0.532002 12.0643 0.228062 11.7603C-0.0760207 11.4564 -0.0760207 10.965 0.228062 10.661L4.90063 5.98831L0.228062 1.3156C-0.0760207 1.01166 -0.0760207 0.520226 0.228062 0.216286C0.379534 0.0646715 0.578697 -0.0114918 0.777717 -0.0114918C0.976738 -0.0114918 1.17576 0.0646715 1.32737 0.216286L5.99994 4.889L10.6726 0.216286C10.8243 0.0646715 11.0233 -0.0114918 11.2223 -0.0114918C11.4213 -0.0114918 11.6203 0.0646715 11.772 0.216286C12.076 0.520226 12.076 1.01166 11.772 1.3156L7.09939 5.98831Z" fill="white" />
                </svg>
            </div>
            <h3>Chat with us</h3>
            <div class="Chat_Listed_member">
                <ul>
                    <li>
                        <a href="#">
                            <div class="member_thumb">
                                <img src="{{ asset('assets/img/staf/1.png') }}" alt="">
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="member_thumb">
                                <img src="{{ asset('assets/img/staf/2.png') }}" alt="">
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="member_thumb">
                                <img src="{{ asset('assets/img/staf/3.png') }}" alt="">
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="member_thumb">
                                <img src="{{ asset('assets/img/staf/4.png') }}" alt="">
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="member_thumb">
                                <img src="{{ asset('assets/img/staf/5.png') }}" alt="">
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="member_thumb">
                                <div class="more_member_count">
                                    <span>90+</span>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="CHAT_POPUP_BODY">
            <p class="mesaged_send_date">
                Sunday, 12 January
            </p>
            <div class="CHATING_SENDER">
                <div class="SMS_thumb">
                    <img src="{{ asset('assets/img/staf/1.png') }}" alt="">
                </div>
                <div class="SEND_SMS_VIEW">
                    <P>Hi! Welcome .
                        How can I help you?</P>
                </div>
            </div>
            <div class="CHATING_SENDER CHATING_RECEIVEr">
                <div class="SEND_SMS_VIEW">
                    <P>Hello</P>
                </div>
                <div class="SMS_thumb">
                    <img src="{{ asset('assets/img/staf/1.png') }}" alt="">
                </div>
            </div>
        </div>
        <div class="CHAT_POPUP_BOTTOM">
            <div class="chat_input_box d-flex align-items-center">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Write your message" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn " type="button">

                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M18.7821 3.21895C14.4908 -1.07281 7.50882 -1.07281 3.2183 3.21792C-1.07304 7.50864 -1.07263 14.4908 3.21872 18.7824C7.50882 23.0729 14.4908 23.0729 18.7817 18.7815C23.0726 14.4908 23.0724 7.50906 18.7821 3.21895ZM17.5813 17.5815C13.9525 21.2103 8.04773 21.2108 4.41871 17.5819C0.78907 13.9525 0.789485 8.04714 4.41871 4.41832C8.04752 0.789719 13.9521 0.789304 17.5817 4.41874C21.2105 8.04755 21.2101 13.9529 17.5813 17.5815ZM6.89503 8.02162C6.89503 7.31138 7.47107 6.73534 8.18131 6.73534C8.89135 6.73534 9.46739 7.31117 9.46739 8.02162C9.46739 8.73228 8.89135 9.30811 8.18131 9.30811C7.47107 9.30811 6.89503 8.73228 6.89503 8.02162ZM12.7274 8.02162C12.7274 7.31138 13.3038 6.73534 14.0141 6.73534C14.7241 6.73534 15.3002 7.31117 15.3002 8.02162C15.3002 8.73228 14.7243 9.30811 14.0141 9.30811C13.3038 9.30811 12.7274 8.73228 12.7274 8.02162ZM15.7683 13.2898C14.9712 15.1332 13.1043 16.3243 11.0126 16.3243C8.8758 16.3243 6.99792 15.1272 6.22834 13.2744C6.09642 12.9573 6.24681 12.593 6.56438 12.4611C6.64238 12.4289 6.72328 12.4136 6.80293 12.4136C7.04687 12.4136 7.27836 12.5577 7.37772 12.7973C7.95376 14.1842 9.38048 15.0799 11.0126 15.0799C12.6077 15.0799 14.0261 14.1836 14.626 12.7959C14.7625 12.4804 15.1288 12.335 15.4441 12.4717C15.7594 12.6084 15.9048 12.9745 15.7683 13.2898Z" fill="#707DB7" />
                            </svg>

                        </button>
                        <button class="btn" type="button">

                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11 0.289062C4.92455 0.289062 0 5.08402 0 10.9996C0 16.9152 4.92455 21.7101 11 21.7101C17.0755 21.7101 22 16.9145 22 10.9996C22 5.08472 17.0755 0.289062 11 0.289062ZM11 20.3713C5.68423 20.3713 1.375 16.1755 1.375 10.9996C1.375 5.82371 5.68423 1.62788 11 1.62788C16.3158 1.62788 20.625 5.82371 20.625 10.9996C20.625 16.1755 16.3158 20.3713 11 20.3713ZM15.125 10.3302H11.6875V6.98314C11.6875 6.61363 11.3795 6.31373 11 6.31373C10.6205 6.31373 10.3125 6.61363 10.3125 6.98314V10.3302H6.875C6.4955 10.3302 6.1875 10.6301 6.1875 10.9996C6.1875 11.3691 6.4955 11.669 6.875 11.669H10.3125V15.016C10.3125 15.3855 10.6205 15.6854 11 15.6854C11.3795 15.6854 11.6875 15.3855 11.6875 15.016V11.669H15.125C15.5045 11.669 15.8125 11.3691 15.8125 10.9996C15.8125 10.6301 15.5045 10.3302 15.125 10.3302Z" fill="#707DB7" />
                            </svg>

                            <input type="file">
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="back-top" style="display: none;">
        <a title="Go to Top" href="#">
            <i class="ti-angle-up"></i>
        </a>
    </div>

    {{-- <script src="{{ asset('assets/js/jquery1-3.4.1.min.js') }}"></script> --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


    <script src="{{ asset('assets/js/popper1.min.js') }}"></script>



    <script src="{{ asset('assets/js/metisMenu.js') }}"></script>

    <script src="{{ asset('assets/vendors/count_up/jquery.waypoints.min.js' ) }}"></script>

    <script src="{{ asset('assets/vendors/chartlist/Chart.min.js') }}"></script>

    <script src="{{ asset('assets/vendors/count_up/jquery.counterup.min.js') }}"></script>

    <script src="{{ asset('assets/vendors/niceselect/js/jquery.nice-select.min.js') }}"></script>

    <script src="{{ asset('assets/vendors/owl_carousel/js/owl.carousel.min.js') }}"></script>

    <script src="{{ asset('assets/vendors/datatable/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/datatable/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/datatable/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/datatable/js/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/datatable/js/jszip.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/datatable/js/pdfmake.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/datatable/js/vfs_fonts.js') }}"></script>
    <script src="{{ asset('assets/vendors/datatable/js/buttons.html5.min.js'  )}}"></script>
    <script src="{{ asset('assets/vendors/datatable/js/buttons.print.min.js') }}"></script>

    <script src="{{ asset('assets/vendors/datepicker/datepicker.js') }}"></script>
    <script src="{{ asset('assets/vendors/datepicker/datepicker.en.js') }}"></script>
    <script src="{{ asset('assets/vendors/datepicker/datepicker.custom.js') }}"></script>
    <script src="{{ asset('assets/js/chart.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/chartjs/roundedBar.min.js') }}"></script>

    <script src="{{ asset('assets/vendors/progressbar/jquery.barfiller.js') }}"></script>

    <script src="{{ asset('assets/vendors/tagsinput/tagsinput.js') }}"></script>

    <script src="{{ asset('assets/vendors/text_editor/summernote-bs4.js') }}"></script>
    <script src="{{ asset('assets/vendors/am_chart/amcharts.js') }}"></script>

    <script src="{{ asset('assets/vendors/scroll/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/scroll/scrollable-custom.js') }}"></script>

    <script src="{{ asset('assets/vendors/vectormap-home/vectormap-2.0.2.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/vectormap-home/vectormap-world-mill-en.js') }}"></script>

    <script src="{{ asset('assets/vendors/apex_chart/apex-chart2.js') }}"></script>
    <script src="{{ asset('assets/vendors/apex_chart/apex_dashboard.js') }}"></script>
    <script src="{{ asset('assets/vendors/echart/echarts.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/chart_am/core.js') }}"></script>
    <script src="{{ asset('assets/vendors/chart_am/charts.js') }}"></script>
    <script src="{{ asset('assets/vendors/chart_am/animated.js') }}"></script>
    <script src="{{ asset('assets/vendors/chart_am/kelly.js') }}"></script>
    <script src="{{ asset('assets/vendors/chart_am/chart-custom.js') }}"></script>

    <script src="{{ asset('assets/js/dashboard_init.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-ui-1.13.1/jquery-ui.min.js') }}"></script>


    <script>
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            
            // Admin Search Functionality
            var searchTimeout;
            var $searchInput = $('#adminSearchInput');
            var $resultsDropdown = $('#searchResultsDropdown');
            var $resultsList = $('#searchResultsList');
            
            $searchInput.on('keyup', function() {
                var query = $(this).val().trim();
                
                clearTimeout(searchTimeout);
                
                if (query.length < 2) {
                    $resultsDropdown.hide();
                    return;
                }
                
                searchTimeout = setTimeout(function() {
                    $.ajax({
                        url: '{{ route("admin.search") }}',
                        method: 'GET',
                        data: { q: query },
                        success: function(response) {
                            if (response.results.length === 0) {
                                $resultsList.html('<div class="search-no-results"><i class="fas fa-search mb-2"></i><br>No results found</div>');
                            } else {
                                var html = '';
                                response.results.forEach(function(item) {
                                    html += '<a href="' + item.url + '" class="search-result-item">';
                                    html += '<div class="icon ' + item.type + '"><i class="fas fa-' + item.icon + '"></i></div>';
                                    html += '<div class="info"><h5>' + item.title + '</h5><p>' + item.subtitle + '</p></div>';
                                    html += '</a>';
                                });
                                $resultsList.html(html);
                            }
                            $resultsDropdown.show();
                        }
                    });
                }, 300);
            });
            
            // Hide dropdown when clicking outside
            $(document).on('click', function(e) {
                if (!$(e.target).closest('.search_inner').length) {
                    $resultsDropdown.hide();
                }
            });
            
            // Focus shows dropdown if has results
            $searchInput.on('focus', function() {
                if ($resultsList.children().length > 0) {
                    $resultsDropdown.show();
                }
            });
        });
    </script>
    @yield('script')
</body>

</html>