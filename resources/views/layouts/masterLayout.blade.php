<!DOCTYPE html>
<html lang="en">

@include('layouts.head')

<body>
    <div class="page-wrapper">

        <header class="header header-14">
            <div class="header-top">
                <div class="container">
                    <div class="header-left">
                        <a href="tel:#"><i class="icon-phone"></i>Call: +0123 456 789</a>
                    </div><!-- End .header-left -->

                    <div class="header-right">

                        <ul class="top-menu">
                            <li>
                                <a href="#">Links</a>
                                <ul class="menus">
                                    <li>
                                        <div class="header-dropdown">
                                            <a href="#">USD</a>
                                            <div class="header-menu">
                                                <ul>
                                                    <li><a href="#">Eur</a></li>
                                                    <li><a href="#">Usd</a></li>
                                                </ul>
                                            </div><!-- End .header-menu -->
                                        </div><!-- End .header-dropdown -->
                                    </li>
                                    <li>   
                                        <div class="header-dropdown">
                                            <a href="#">Engligh</a>
                                            <div class="header-menu">
                                                <ul>
                                                    <li><a href="#">English</a></li>
                                                    <li><a href="#">French</a></li>
                                                    <li><a href="#">Spanish</a></li>
                                                </ul>
                                            </div><!-- End .header-menu -->
                                        </div><!-- End .header-dropdown -->
                                    </li>
                                    <li class="login">
                                        <a href="#signin-modal" data-toggle="modal">Sign in / Sign up</a>
                                    </li>
                                </ul>
                            </li>
                        </ul><!-- End .top-menu -->
                    </div><!-- End .header-right -->
                </div><!-- End .container -->
            </div><!-- End .header-top -->

            <div class="header-middle">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-auto col-lg-3 col-xl-3 col-xxl-2">
                            <button class="mobile-menu-toggler">
                                <span class="sr-only">Toggle mobile menu</span>
                                <i class="icon-bars"></i>
                            </button>
                            <a href="index.html" class="logo">
                                <img src="assets/images/demos/demo-14/logo.png" alt="Molla Logo" width="105" height="25">
                            </a>
                        </div><!-- End .col-xl-3 col-xxl-2 -->
                    
                        <div class="col col-lg-9 col-xl-9 col-xxl-10 header-middle-right">
                            <div class="row">
                                <div class="col-lg-8 col-xxl-4-5col d-none d-lg-block">
                                    <div class="header-search header-search-extended header-search-visible header-search-no-radius">
                                        <a href="#" class="search-toggle" role="button"><i class="icon-search"></i></a>
                                        <form action="#" method="get">
                                            <div class="header-search-wrapper search-wrapper-wide">

                                                <div class="select-custom">
                                                    <select id="cat" name="cat">
                                                        <option value="">All Departments</option>
                                                        <option value="1">Fashion</option>
                                                        <option value="2">- Women</option>
                                                        <option value="3">- Men</option>
                                                        <option value="4">- Jewellery</option>
                                                        <option value="5">- Kids Fashion</option>
                                                        <option value="6">Electronics</option>
                                                        <option value="7">- Smart TVs</option>
                                                        <option value="8">- Cameras</option>
                                                        <option value="9">- Games</option>
                                                        <option value="10">Home &amp; Garden</option>
                                                        <option value="11">Motors</option>
                                                        <option value="12">- Cars and Trucks</option>
                                                        <option value="15">- Boats</option>
                                                        <option value="16">- Auto Tools &amp; Supplies</option>
                                                    </select>
                                                </div><!-- End .select-custom -->
                                                <label for="q" class="sr-only">Search</label>
                                                <input type="search" class="form-control" name="q" id="q" placeholder="Search product ..." required>

                                                <button class="btn btn-primary" type="submit"><i class="icon-search"></i></button>
                                            </div><!-- End .header-search-wrapper -->
                                        </form>
                                    </div><!-- End .header-search -->
                                </div><!-- End .col-xxl-4-5col -->

                                <div class="col-lg-4 col-xxl-5col d-flex justify-content-end align-items-center">
                                    <div class="header-dropdown-link">
                                        <div class="dropdown compare-dropdown">
                                            <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static" title="Compare Products" aria-label="Compare Products">
                                                <i class="icon-random"></i>
                                                <span class="compare-txt">Compare</span>
                                            </a>

                                            <div class="dropdown-menu dropdown-menu-right">
                                                <ul class="compare-products">
                                                    <li class="compare-product">
                                                        <a href="#" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a>
                                                        <h4 class="compare-product-title"><a href="product.html">Blue Night Dress</a></h4>
                                                    </li>
                                                    <li class="compare-product">
                                                        <a href="#" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a>
                                                        <h4 class="compare-product-title"><a href="product.html">White Long Skirt</a></h4>
                                                    </li>
                                                </ul>

                                                <div class="compare-actions">
                                                    <a href="#" class="action-link">Clear All</a>
                                                    <a href="#" class="btn btn-outline-primary-2"><span>Compare</span><i class="icon-long-arrow-right"></i></a>
                                                </div>
                                            </div><!-- End .dropdown-menu -->
                                        </div><!-- End .compare-dropdown -->

                                        <a href="wishlist.html" class="wishlist-link">
                                            <i class="icon-heart-o"></i>
                                            <span class="wishlist-count">3</span>
                                            <span class="wishlist-txt">Wishlist</span>
                                        </a>

                                        <div class="dropdown cart-dropdown">
                                            <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                                                <i class="icon-shopping-cart"></i>
                                                <span class="cart-count">2</span>
                                                <span class="cart-txt">Cart</span>
                                            </a>

                                            <div class="dropdown-menu dropdown-menu-right">
                                                <div class="dropdown-cart-products">
                                                    <div class="product">
                                                        <div class="product-cart-details">
                                                            <h4 class="product-title">
                                                                <a href="product.html">Beige knitted elastic runner shoes</a>
                                                            </h4>

                                                            <span class="cart-product-info">
                                                                <span class="cart-product-qty">1</span>
                                                                x $84.00
                                                            </span>
                                                        </div><!-- End .product-cart-details -->

                                                        <figure class="product-image-container">
                                                            <a href="product.html" class="product-image">
                                                                <img src="assets/images/products/cart/product-1.jpg" alt="product">
                                                            </a>
                                                        </figure>
                                                        <a href="#" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a>
                                                    </div><!-- End .product -->

                                                    <div class="product">
                                                        <div class="product-cart-details">
                                                            <h4 class="product-title">
                                                                <a href="product.html">Blue utility pinafore denim dress</a>
                                                            </h4>

                                                            <span class="cart-product-info">
                                                                <span class="cart-product-qty">1</span>
                                                                x $76.00
                                                            </span>
                                                        </div><!-- End .product-cart-details -->

                                                        <figure class="product-image-container">
                                                            <a href="product.html" class="product-image">
                                                                <img src="assets/images/products/cart/product-2.jpg" alt="product">
                                                            </a>
                                                        </figure>
                                                        <a href="#" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a>
                                                    </div><!-- End .product -->
                                                </div><!-- End .cart-product -->

                                                <div class="dropdown-cart-total">
                                                    <span>Total</span>

                                                    <span class="cart-total-price">$160.00</span>
                                                </div><!-- End .dropdown-cart-total -->

                                                <div class="dropdown-cart-action">
                                                    <a href="cart.html" class="btn btn-primary">View Cart</a>
                                                    <a href="checkout.html" class="btn btn-outline-primary-2"><span>Checkout</span><i class="icon-long-arrow-right"></i></a>
                                                </div><!-- End .dropdown-cart-total -->
                                            </div><!-- End .dropdown-menu -->
                                        </div><!-- End .cart-dropdown -->
                                    </div>
                                </div><!-- End .col-xxl-5col -->
                            </div><!-- End .row -->
                        </div><!-- End .col-xl-9 col-xxl-10 -->
                    </div><!-- End .row -->
                </div><!-- End .container-fluid -->
            </div><!-- End .header-middle -->

            <div class="header-bottom sticky-header">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-auto col-lg-3 col-xl-3 col-xxl-2 header-left">
                            <div class="dropdown category-dropdown show is-on" data-visible="true">
                                <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static" title="Browse Categories">
                                    Browse Categories
                                </a>

                                <div class="dropdown-menu show">
                                    <nav class="side-nav">
                                        <ul class="menu-vertical sf-arrows">
                                            <li class="megamenu-container">
                                                <a class="sf-with-ul" href="#"><i class="icon-laptop"></i>Electronics</a>

                                                <div class="megamenu">
                                                    <div class="row no-gutters">
                                                        <div class="col-md-8">
                                                            <div class="menu-col">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="menu-title">Laptops & Computers</div><!-- End .menu-title -->
                                                                        <ul>
                                                                            <li><a href="#">Desktop Computers</a></li>
                                                                            <li><a href="#">Monitors</a></li>
                                                                            <li><a href="#">Laptops</a></li>
                                                                            <li><a href="#">iPad & Tablets</a></li>
                                                                            <li><a href="#">Hard Drives & Storage</a></li>
                                                                            <li><a href="#">Printers & Supplies</a></li>
                                                                            <li><a href="#">Computer Accessories</a></li>
                                                                        </ul>

                                                                        <div class="menu-title">TV & Video</div><!-- End .menu-title -->
                                                                        <ul>
                                                                            <li><a href="#">TVs</a></li>
                                                                            <li><a href="#">Home Audio Speakers</a></li>
                                                                            <li><a href="#">Projectors</a></li>
                                                                            <li><a href="#">Media Streaming Devices</a></li>
                                                                        </ul>
                                                                    </div><!-- End .col-md-6 -->

                                                                    <div class="col-md-6">
                                                                        <div class="menu-title">Cell Phones</div><!-- End .menu-title -->
                                                                        <ul>
                                                                            <li><a href="#">Carrier Phones</a></li>
                                                                            <li><a href="#">Unlocked Phones</a></li>
                                                                            <li><a href="#">Phone & Cellphone Cases</a></li>
                                                                            <li><a href="#">Cellphone Chargers </a></li>
                                                                        </ul>

                                                                        <div class="menu-title">Digital Cameras</div><!-- End .menu-title -->
                                                                        <ul>
                                                                            <li><a href="#">Digital SLR Cameras</a></li>
                                                                            <li><a href="#">Sports & Action Cameras</a></li>
                                                                            <li><a href="#">Camcorders</a></li>
                                                                            <li><a href="#">Camera Lenses</a></li>
                                                                            <li><a href="#">Photo Printer</a></li>
                                                                            <li><a href="#">Digital Memory Cards</a></li>
                                                                            <li><a href="#">Camera Bags, Backpacks & Cases</a></li>
                                                                        </ul>
                                                                    </div><!-- End .col-md-6 -->
                                                                </div><!-- End .row -->
                                                            </div><!-- End .menu-col -->
                                                        </div><!-- End .col-md-8 -->

                                                        <div class="col-md-4">
                                                            <div class="banner banner-overlay">
                                                                <a href="category.html" class="banner banner-menu">
                                                                    <img src="assets/images/demos/demo-13/menu/banner-1.jpg" alt="Banner">
                                                                </a>
                                                            </div><!-- End .banner banner-overlay -->
                                                        </div><!-- End .col-md-4 -->
                                                    </div><!-- End .row -->
                                                </div><!-- End .megamenu -->
                                            </li>
                                            <li class="megamenu-container">
                                                <a class="sf-with-ul" href="#"><i class="icon-couch"></i>Furniture</a>

                                                <div class="megamenu">
                                                    <div class="row no-gutters">
                                                        <div class="col-md-8">
                                                            <div class="menu-col">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="menu-title">Bedroom</div><!-- End .menu-title -->
                                                                        <ul>
                                                                            <li><a href="#">Beds, Frames & Bases</a></li>
                                                                            <li><a href="#">Dressers</a></li>
                                                                            <li><a href="#">Nightstands</a></li>
                                                                            <li><a href="#">Kids' Beds & Headboards</a></li>
                                                                            <li><a href="#">Armoires</a></li>
                                                                        </ul>

                                                                        <div class="menu-title">Living Room</div><!-- End .menu-title -->
                                                                        <ul>
                                                                            <li><a href="#">Coffee Tables</a></li>
                                                                            <li><a href="#">Chairs</a></li>
                                                                            <li><a href="#">Tables</a></li>
                                                                            <li><a href="#">Futons & Sofa Beds</a></li>
                                                                            <li><a href="#">Cabinets & Chests</a></li>
                                                                        </ul>
                                                                    </div><!-- End .col-md-6 -->

                                                                    <div class="col-md-6">
                                                                        <div class="menu-title">Office</div><!-- End .menu-title -->
                                                                        <ul>
                                                                            <li><a href="#">Office Chairs</a></li>
                                                                            <li><a href="#">Desks</a></li>
                                                                            <li><a href="#">Bookcases</a></li>
                                                                            <li><a href="#">File Cabinets</a></li>
                                                                            <li><a href="#">Breakroom Tables</a></li>
                                                                        </ul>

                                                                        <div class="menu-title">Kitchen & Dining</div><!-- End .menu-title -->
                                                                        <ul>
                                                                            <li><a href="#">Dining Sets</a></li>
                                                                            <li><a href="#">Kitchen Storage Cabinets</a></li>
                                                                            <li><a href="#">Bakers Racks</a></li>
                                                                            <li><a href="#">Dining Chairs</a></li>
                                                                            <li><a href="#">Dining Room Tables</a></li>
                                                                            <li><a href="#">Bar Stools</a></li>
                                                                        </ul>
                                                                    </div><!-- End .col-md-6 -->
                                                                </div><!-- End .row -->
                                                            </div><!-- End .menu-col -->
                                                        </div><!-- End .col-md-8 -->

                                                        <div class="col-md-4">
                                                            <div class="banner banner-overlay">
                                                                <a href="category.html" class="banner banner-menu">
                                                                    <img src="assets/images/demos/demo-13/menu/banner-2.jpg" alt="Banner">
                                                                </a>
                                                            </div><!-- End .banner banner-overlay -->
                                                        </div><!-- End .col-md-4 -->
                                                    </div><!-- End .row -->
                                                </div><!-- End .megamenu -->
                                            </li>
                                            <li class="megamenu-container">
                                                <a class="sf-with-ul" href="#"><i class="icon-concierge-bell"></i>Cooking</a>

                                                <div class="megamenu">
                                                    <div class="menu-col">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="menu-title">Cookware</div><!-- End .menu-title -->
                                                                <ul>
                                                                    <li><a href="#">Cookware Sets</a></li>
                                                                    <li><a href="#">Pans, Griddles & Woks</a></li>
                                                                    <li><a href="#">Pots</a></li>
                                                                    <li><a href="#">Skillets & Grill Pans</a></li>
                                                                    <li><a href="#">Kettles</a></li>
                                                                    <li><a href="#">Soup & Stockpots</a></li>
                                                                </ul>
                                                            </div><!-- End .col-md-4 -->

                                                            <div class="col-md-4">
                                                                <div class="menu-title">Dinnerware & Tabletop</div><!-- End .menu-title -->
                                                                <ul>
                                                                    <li><a href="#">Plates</a></li>
                                                                    <li><a href="#">Cups & Mugs</a></li>
                                                                    <li><a href="#">Trays & Platters</a></li>
                                                                    <li><a href="#">Coffee & Tea Serving</a></li>
                                                                    <li><a href="#">Salt & Pepper Shaker</a></li>
                                                                </ul>
                                                            </div><!-- End .col-md-4 -->

                                                            <div class="col-md-4">
                                                                <div class="menu-title">Cooking Appliances</div><!-- End .menu-title -->
                                                                <ul>
                                                                    <li><a href="#">Microwaves</a></li>
                                                                    <li><a href="#">Coffee Makers</a></li>
                                                                    <li><a href="#">Mixers & Attachments</a></li>
                                                                    <li><a href="#">Slow Cookers</a></li>
                                                                    <li><a href="#">Air Fryers</a></li>
                                                                    <li><a href="#">Toasters & Ovens</a></li>
                                                                </ul>
                                                            </div><!-- End .col-md-4 -->
                                                        </div><!-- End .row -->

                                                        <div class="row menu-banners">
                                                            <div class="col-md-4">
                                                                <div class="banner">
                                                                    <a href="#">
                                                                        <img src="assets/images/demos/demo-13/menu/1.jpg" alt="image">
                                                                    </a>
                                                                </div><!-- End .banner -->
                                                            </div><!-- End .col-md-4 -->

                                                            <div class="col-md-4">
                                                                <div class="banner">
                                                                    <a href="#">
                                                                        <img src="assets/images/demos/demo-13/menu/2.jpg" alt="image">
                                                                    </a>
                                                                </div><!-- End .banner -->
                                                            </div><!-- End .col-md-4 -->

                                                            <div class="col-md-4">
                                                                <div class="banner">
                                                                    <a href="#">
                                                                        <img src="assets/images/demos/demo-13/menu/3.jpg" alt="image">
                                                                    </a>
                                                                </div><!-- End .banner -->
                                                            </div><!-- End .col-md-4 -->
                                                        </div><!-- End .row -->
                                                    </div><!-- End .menu-col -->
                                                </div><!-- End .megamenu -->
                                            </li>
                                            <li class="megamenu-container">
                                                <a class="sf-with-ul" href="#"><i class="icon-tshirt"></i>Clothing</a>

                                                <div class="megamenu">
                                                    <div class="row no-gutters">
                                                        <div class="col-md-8">
                                                            <div class="menu-col">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="menu-title">Women</div><!-- End .menu-title -->
                                                                        <ul>
                                                                            <li><a href="#"><strong>New Arrivals</strong></a></li>
                                                                            <li><a href="#"><strong>Best Sellers</strong></a></li>
                                                                            <li><a href="#"><strong>Trending</strong></a></li>
                                                                            <li><a href="#">Clothing</a></li>
                                                                            <li><a href="#">Shoes</a></li>
                                                                            <li><a href="#">Bags</a></li>
                                                                            <li><a href="#">Accessories</a></li>
                                                                            <li><a href="#">Jewlery & Watches</a></li>
                                                                            <li><a href="#"><strong>Sale</strong></a></li>
                                                                        </ul>
                                                                    </div><!-- End .col-md-6 -->

                                                                    <div class="col-md-6">
                                                                        <div class="menu-title">Men</div><!-- End .menu-title -->
                                                                        <ul>
                                                                            <li><a href="#"><strong>New Arrivals</strong></a></li>
                                                                            <li><a href="#"><strong>Best Sellers</strong></a></li>
                                                                            <li><a href="#"><strong>Trending</strong></a></li>
                                                                            <li><a href="#">Clothing</a></li>
                                                                            <li><a href="#">Shoes</a></li>
                                                                            <li><a href="#">Bags</a></li>
                                                                            <li><a href="#">Accessories</a></li>
                                                                            <li><a href="#">Jewlery & Watches</a></li>
                                                                        </ul>
                                                                    </div><!-- End .col-md-6 -->
                                                                </div><!-- End .row -->
                                                            </div><!-- End .menu-col -->
                                                        </div><!-- End .col-md-8 -->

                                                        <div class="col-md-4">
                                                            <div class="banner banner-overlay">
                                                                <a href="category.html" class="banner banner-menu">
                                                                    <img src="assets/images/demos/demo-13/menu/banner-3.jpg" alt="Banner">
                                                                </a>
                                                            </div><!-- End .banner banner-overlay -->
                                                        </div><!-- End .col-md-4 -->
                                                    </div><!-- End .row -->

                                                    <div class="menu-col menu-brands">
                                                        <div class="row">
                                                            <div class="col-lg-2">
                                                                <a href="#" class="brand">
                                                                    <img src="assets/images/brands/1.png" alt="Brand Name">
                                                                </a>
                                                            </div><!-- End .col-lg-2 -->

                                                            <div class="col-lg-2">
                                                                <a href="#" class="brand">
                                                                    <img src="assets/images/brands/2.png" alt="Brand Name">
                                                                </a>
                                                            </div><!-- End .col-lg-2 -->

                                                            <div class="col-lg-2">
                                                                <a href="#" class="brand">
                                                                    <img src="assets/images/brands/3.png" alt="Brand Name">
                                                                </a>
                                                            </div><!-- End .col-lg-2 -->

                                                            <div class="col-lg-2">
                                                                <a href="#" class="brand">
                                                                    <img src="assets/images/brands/4.png" alt="Brand Name">
                                                                </a>
                                                            </div><!-- End .col-lg-2 -->

                                                            <div class="col-lg-2">
                                                                <a href="#" class="brand">
                                                                    <img src="assets/images/brands/5.png" alt="Brand Name">
                                                                </a>
                                                            </div><!-- End .col-lg-2 -->

                                                            <div class="col-lg-2">
                                                                <a href="#" class="brand">
                                                                    <img src="assets/images/brands/6.png" alt="Brand Name">
                                                                </a>
                                                            </div><!-- End .col-lg-2 -->
                                                        </div><!-- End .row -->
                                                    </div><!-- End .menu-brands -->
                                                </div><!-- End .megamenu -->
                                            </li>
                                            <li><a href="#"><i class="icon-blender"></i>Home Appliances</a></li>
                                            <li><a href="#"><i class="icon-heartbeat"></i>Healthy & Beauty</a></li>
                                            <li><a href="#"><i class="icon-shoe-prints"></i>Shoes & Boots</a></li>
                                            <li><a href="#"><i class="icon-map-signs"></i>Travel & Outdoor</a></li>
                                            <li><a href="#"><i class="icon-mobile-alt"></i>Smart Phones</a></li>
                                            <li><a href="#"><i class="icon-tv"></i>TV & Audio</a></li>
                                            <li><a href="#"><i class="icon-shopping-bag"></i>Backpack & Bag</a></li>
                                            <li><a href="#"><i class="icon-music"></i>Musical Instruments</a></li>
                                            <li><a href="#"><i class="icon-gift"></i>Gift Ideas</a></li>
                                        </ul><!-- End .menu-vertical -->
                                    </nav><!-- End .side-nav -->
                                </div><!-- End .dropdown-menu -->
                            </div><!-- End .category-dropdown -->
                        </div><!-- End .col-xl-3 col-xxl-2 -->

                        
                        @include('layouts.header')

                        
                        <div class="col col-lg-3 col-xl-3 col-xxl-2 header-right">
                            <i class="la la-lightbulb-o"></i><p>Clearance Up to 30% Off</span></p>
                        </div>
                    </div><!-- End .row -->
                </div><!-- End .container-fluid -->
            </div><!-- End .header-bottom -->
        </header><!-- End .header -->
        
        <!-- Start Main -->
        @yield('main')
        
        <!-- End .main -->

        @include('layouts.footer')
        <!-- End .footer -->

    </div>
    <!-- End .page-wrapper -->
    <button id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>

    <!-- Mobile Menu -->
    <div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->

    <div class="mobile-menu-container">
        <div class="mobile-menu-wrapper">
            <span class="mobile-menu-close"><i class="icon-close"></i></span>
            
            <form action="#" method="get" class="mobile-search">
                <label for="mobile-search" class="sr-only">Search</label>
                <input type="search" class="form-control" name="mobile-search" id="mobile-search" placeholder="Search in..." required>
                <button class="btn btn-primary" type="submit"><i class="icon-search"></i></button>
            </form>

            <ul class="nav nav-pills-mobile" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="mobile-menu-link" data-toggle="tab" href="#mobile-menu-tab" role="tab" aria-controls="mobile-menu-tab" aria-selected="true">Menu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="mobile-cats-link" data-toggle="tab" href="#mobile-cats-tab" role="tab" aria-controls="mobile-cats-tab" aria-selected="false">Categories</a>
                </li>
            </ul>

            <div class="tab-content">
                <div class="tab-pane fade show active" id="mobile-menu-tab" role="tabpanel" aria-labelledby="mobile-menu-link">
                    <nav class="mobile-nav">
                        <ul class="mobile-menu">
                            <li class="active">
                                <a href="index.html">Home</a>

                                <ul>
                                    <li><a href="index-1.html">01 - furniture store</a></li>
                                    <li><a href="index-2.html">02 - furniture store</a></li>
                                    <li><a href="index-3.html">03 - electronic store</a></li>
                                    <li><a href="index-4.html">04 - electronic store</a></li>
                                    <li><a href="index-5.html">05 - fashion store</a></li>
                                    <li><a href="index-6.html">06 - fashion store</a></li>
                                    <li><a href="index-7.html">07 - fashion store</a></li>
                                    <li><a href="index-8.html">08 - fashion store</a></li>
                                    <li><a href="index-9.html">09 - fashion store</a></li>
                                    <li><a href="index-10.html">10 - shoes store</a></li>
                                    <li><a href="index-11.html">11 - furniture simple store</a></li>
                                    <li><a href="index-12.html">12 - fashion simple store</a></li>
                                    <li><a href="index-13.html">13 - market</a></li>
                                    <li><a href="index-14.html">14 - market fullwidth</a></li>
                                    <li><a href="index-15.html">15 - lookbook 1</a></li>
                                    <li><a href="index-16.html">16 - lookbook 2</a></li>
                                    <li><a href="index-17.html">17 - fashion store</a></li>
                                    <li><a href="index-18.html">18 - fashion store (with sidebar)</a></li>
                                    <li><a href="index-19.html">19 - games store</a></li>
                                    <li><a href="index-20.html">20 - book store</a></li>
                                    <li><a href="index-21.html">21 - sport store</a></li>
                                    <li><a href="index-22.html">22 - tools store</a></li>
                                    <li><a href="index-23.html">23 - fashion left navigation store</a></li>
                                    <li><a href="index-24.html">24 - extreme sport store</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="category.html">Shop</a>
                                <ul>
                                    <li><a href="category-list.html">Shop List</a></li>
                                    <li><a href="category-2cols.html">Shop Grid 2 Columns</a></li>
                                    <li><a href="category.html">Shop Grid 3 Columns</a></li>
                                    <li><a href="category-4cols.html">Shop Grid 4 Columns</a></li>
                                    <li><a href="category-boxed.html"><span>Shop Boxed No Sidebar<span class="tip tip-hot">Hot</span></span></a></li>
                                    <li><a href="category-fullwidth.html">Shop Fullwidth No Sidebar</a></li>
                                    <li><a href="product-category-boxed.html">Product Category Boxed</a></li>
                                    <li><a href="product-category-fullwidth.html"><span>Product Category Fullwidth<span class="tip tip-new">New</span></span></a></li>
                                    <li><a href="cart.html">Cart</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                    <li><a href="wishlist.html">Wishlist</a></li>
                                    <li><a href="#">Lookbook</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="product.html" class="sf-with-ul">Product</a>
                                <ul>
                                    <li><a href="product.html">Default</a></li>
                                    <li><a href="product-centered.html">Centered</a></li>
                                    <li><a href="product-extended.html"><span>Extended Info<span class="tip tip-new">New</span></span></a></li>
                                    <li><a href="product-gallery.html">Gallery</a></li>
                                    <li><a href="product-sticky.html">Sticky Info</a></li>
                                    <li><a href="product-sidebar.html">Boxed With Sidebar</a></li>
                                    <li><a href="product-fullwidth.html">Full Width</a></li>
                                    <li><a href="product-masonry.html">Masonry Sticky Info</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Pages</a>
                                <ul>
                                    <li>
                                        <a href="about.html">About</a>

                                        <ul>
                                            <li><a href="about.html">About 01</a></li>
                                            <li><a href="about-2.html">About 02</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="contact.html">Contact</a>

                                        <ul>
                                            <li><a href="contact.html">Contact 01</a></li>
                                            <li><a href="contact-2.html">Contact 02</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="login.html">Login</a></li>
                                    <li><a href="faq.html">FAQs</a></li>
                                    <li><a href="404.html">Error 404</a></li>
                                    <li><a href="coming-soon.html">Coming Soon</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="blog.html">Blog</a>

                                <ul>
                                    <li><a href="blog.html">Classic</a></li>
                                    <li><a href="blog-listing.html">Listing</a></li>
                                    <li>
                                        <a href="#">Grid</a>
                                        <ul>
                                            <li><a href="blog-grid-2cols.html">Grid 2 columns</a></li>
                                            <li><a href="blog-grid-3cols.html">Grid 3 columns</a></li>
                                            <li><a href="blog-grid-4cols.html">Grid 4 columns</a></li>
                                            <li><a href="blog-grid-sidebar.html">Grid sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Masonry</a>
                                        <ul>
                                            <li><a href="blog-masonry-2cols.html">Masonry 2 columns</a></li>
                                            <li><a href="blog-masonry-3cols.html">Masonry 3 columns</a></li>
                                            <li><a href="blog-masonry-4cols.html">Masonry 4 columns</a></li>
                                            <li><a href="blog-masonry-sidebar.html">Masonry sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Mask</a>
                                        <ul>
                                            <li><a href="blog-mask-grid.html">Blog mask grid</a></li>
                                            <li><a href="blog-mask-masonry.html">Blog mask masonry</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Single Post</a>
                                        <ul>
                                            <li><a href="single.html">Default with sidebar</a></li>
                                            <li><a href="single-fullwidth.html">Fullwidth no sidebar</a></li>
                                            <li><a href="single-fullwidth-sidebar.html">Fullwidth with sidebar</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="elements-list.html">Elements</a>
                                <ul>
                                    <li><a href="elements-products.html">Products</a></li>
                                    <li><a href="elements-typography.html">Typography</a></li>
                                    <li><a href="elements-titles.html">Titles</a></li>
                                    <li><a href="elements-banners.html">Banners</a></li>
                                    <li><a href="elements-product-category.html">Product Category</a></li>
                                    <li><a href="elements-video-banners.html">Video Banners</a></li>
                                    <li><a href="elements-buttons.html">Buttons</a></li>
                                    <li><a href="elements-accordions.html">Accordions</a></li>
                                    <li><a href="elements-tabs.html">Tabs</a></li>
                                    <li><a href="elements-testimonials.html">Testimonials</a></li>
                                    <li><a href="elements-blog-posts.html">Blog Posts</a></li>
                                    <li><a href="elements-portfolio.html">Portfolio</a></li>
                                    <li><a href="elements-cta.html">Call to Action</a></li>
                                    <li><a href="elements-icon-boxes.html">Icon Boxes</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav><!-- End .mobile-nav -->
                </div><!-- .End .tab-pane -->
                <div class="tab-pane fade" id="mobile-cats-tab" role="tabpanel" aria-labelledby="mobile-cats-link">
                    <nav class="mobile-cats-nav">
                        <ul class="mobile-cats-menu">
                            <li><a class="mobile-cats-lead" href="#">Daily offers</a></li>
                            <li><a class="mobile-cats-lead" href="#">Gift Ideas</a></li>
                            <li><a href="#">Beds</a></li>
                            <li><a href="#">Lighting</a></li>
                            <li><a href="#">Sofas & Sleeper sofas</a></li>
                            <li><a href="#">Storage</a></li>
                            <li><a href="#">Armchairs & Chaises</a></li>
                            <li><a href="#">Decoration </a></li>
                            <li><a href="#">Kitchen Cabinets</a></li>
                            <li><a href="#">Coffee & Tables</a></li>
                            <li><a href="#">Outdoor Furniture </a></li>
                        </ul><!-- End .mobile-cats-menu -->
                    </nav><!-- End .mobile-cats-nav -->
                </div><!-- .End .tab-pane -->
            </div><!-- End .tab-content -->

            <div class="social-icons">
                <a href="#" class="social-icon" target="_blank" title="Facebook"><i class="icon-facebook-f"></i></a>
                <a href="#" class="social-icon" target="_blank" title="Twitter"><i class="icon-twitter"></i></a>
                <a href="#" class="social-icon" target="_blank" title="Instagram"><i class="icon-instagram"></i></a>
                <a href="#" class="social-icon" target="_blank" title="Youtube"><i class="icon-youtube"></i></a>
            </div><!-- End .social-icons -->
        </div><!-- End .mobile-menu-wrapper -->
    </div><!-- End .mobile-menu-container -->

    <!-- Sign in / Register Modal -->
    <div class="modal fade" id="signin-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="icon-close"></i></span>
                    </button>

                    <div class="form-box">
                        <div class="form-tab">
                            <ul class="nav nav-pills nav-fill" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="signin-tab" data-toggle="tab" href="#signin" role="tab" aria-controls="signin" aria-selected="true">Sign In</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="register-tab" data-toggle="tab" href="#register" role="tab" aria-controls="register" aria-selected="false">Register</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="tab-content-5">
                                <div class="tab-pane fade show active" id="signin" role="tabpanel" aria-labelledby="signin-tab">
                                    <form action="#">
                                        <div class="form-group">
                                            <label for="singin-email">Username or email address *</label>
                                            <input type="text" class="form-control" id="singin-email" name="singin-email" required>
                                        </div><!-- End .form-group -->

                                        <div class="form-group">
                                            <label for="singin-password">Password *</label>
                                            <input type="password" class="form-control" id="singin-password" name="singin-password" required>
                                        </div><!-- End .form-group -->

                                        <div class="form-footer">
                                            <button type="submit" class="btn btn-outline-primary-2">
                                                <span>LOG IN</span>
                                                <i class="icon-long-arrow-right"></i>
                                            </button>

                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="signin-remember">
                                                <label class="custom-control-label" for="signin-remember">Remember Me</label>
                                            </div><!-- End .custom-checkbox -->

                                            <a href="#" class="forgot-link">Forgot Your Password?</a>
                                        </div><!-- End .form-footer -->
                                    </form>
                                    <div class="form-choice">
                                        <p class="text-center">or sign in with</p>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <a href="#" class="btn btn-login btn-g">
                                                    <i class="icon-google"></i>
                                                    Login With Google
                                                </a>
                                            </div><!-- End .col-6 -->
                                            <div class="col-sm-6">
                                                <a href="#" class="btn btn-login btn-f">
                                                    <i class="icon-facebook-f"></i>
                                                    Login With Facebook
                                                </a>
                                            </div><!-- End .col-6 -->
                                        </div><!-- End .row -->
                                    </div><!-- End .form-choice -->
                                </div><!-- .End .tab-pane -->
                                <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">
                                    <form action="#">
                                        <div class="form-group">
                                            <label for="register-email">Your email address *</label>
                                            <input type="email" class="form-control" id="register-email" name="register-email" required>
                                        </div><!-- End .form-group -->

                                        <div class="form-group">
                                            <label for="register-password">Password *</label>
                                            <input type="password" class="form-control" id="register-password" name="register-password" required>
                                        </div><!-- End .form-group -->

                                        <div class="form-footer">
                                            <button type="submit" class="btn btn-outline-primary-2">
                                                <span>SIGN UP</span>
                                                <i class="icon-long-arrow-right"></i>
                                            </button>

                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="register-policy" required>
                                                <label class="custom-control-label" for="register-policy">I agree to the <a href="#">privacy policy</a> *</label>
                                            </div><!-- End .custom-checkbox -->
                                        </div><!-- End .form-footer -->
                                    </form>
                                    <div class="form-choice">
                                        <p class="text-center">or sign in with</p>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <a href="#" class="btn btn-login btn-g">
                                                    <i class="icon-google"></i>
                                                    Login With Google
                                                </a>
                                            </div><!-- End .col-6 -->
                                            <div class="col-sm-6">
                                                <a href="#" class="btn btn-login  btn-f">
                                                    <i class="icon-facebook-f"></i>
                                                    Login With Facebook
                                                </a>
                                            </div><!-- End .col-6 -->
                                        </div><!-- End .row -->
                                    </div><!-- End .form-choice -->
                                </div><!-- .End .tab-pane -->
                            </div><!-- End .tab-content -->
                        </div><!-- End .form-tab -->
                    </div><!-- End .form-box -->
                </div><!-- End .modal-body -->
            </div><!-- End .modal-content -->
        </div><!-- End .modal-dialog -->
    </div><!-- End .modal -->

    @include('layouts.script')
    
</body>


</html>