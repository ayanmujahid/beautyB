<body>
    <div class="wrapper home-one">

        <!-- HEADER AREA START -->
        <header class="header-area">

            <!-- Header top area start -->
            <div class="header-top-area d-none d-lg-block">
                <div class="container">
                    <div class="header-top-wrapper">
                        <div class="top-bar-left">
                            <div class="contact-link">
                                <div class="info_box phone">
                                    Call us : <span>(012) 800 456 789</span>
                                </div>
                                <div class="info_box email">
                                    email : <a href="mailto:demo@example.com">demo@example.com</a>
                                </div>
                            </div>
                            <div class="social_follow">
                                <ul>
                                    <li class="facebook"><a href="#"></a></li>
                                    <li class="twitter"><a href="#"></a></li>
                                    <li class="youtube"><a href="#"></a></li>
                                    <li class="googleplus"><a href="#"></a></li>
                                    <li class="instagram"><a href="#"></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="topbar-nav">
                            <!-- my account -->
                            <div class="dropdown menu-my-account-container">
                                <button data-bs-toggle="dropdown">
                                    <i class="first-icon fa fa-user-circle"></i> My Account <i
                                        class="ion-ios-arrow-down"></i>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="{{ route('login') }}">My Account</a></li>
                                    <li><a href="{{ route('checkout') }}">Checkout</a></li>
                                    <li><a href="{{ route('login') }}">Sign in</a></li>
                                </ul>
                            </div>
                            <!-- currency-menu -->
                            <div class="dropdown currency">
                                <button data-bs-toggle="dropdown">$ USD<i class="ion-ios-arrow-down"></i></button>
                                <ul class="dropdown-menu">
                                    <li><a href="#">$ USD</a></li>
                                    <li><a href="#">€ EUR</a></li>
                                </ul>
                            </div>
                            <!-- language-menu -->
                            <div class="dropdown language">
                                <button data-bs-toggle="dropdown">
                                    <img src="{{ asset('assets/images/icons/en.webp') }}"
                                        alt="language-selector">English
                                    <i class="ion-ios-arrow-down"></i>
                                </button>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="#">
                                            <img src="{{ asset('assets/images/icons/en.webp') }}" alt="French">
                                            <span>English</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="{{ asset('assets/images/icons/fr.webp') }}" alt="French">
                                            <span>French</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Top bar area end -->

            <!-- Header bottom area start -->
            <div class="header-bottom-area">
                <div class="container">
                    <div class="header-bottom-wrapper">

                        <div class="header-logo">
                            <a href="{{ route('index') }}"><img src="{{ asset('assets/images/logo/logo.png') }}"
                                    alt="harosa"></a>
                        </div>

                        <!-- main-menu -->
                        <div class="main-menu d-none d-lg-block">
                            <nav>
                                <ul>
                                    <li><a href="{{ route('index') }}">Home</a></li>
                                    <!-- SHOP (Main Parent) -->
                                    <li class="current">
                                        <a href="{{ route('shop') }}">
                                            Shop <i class="fa fa-angle-down"></i>
                                        </a>

                                        <!-- Parent Categories -->
                                        <ul class="submenu">
                                            <li>
                                                <a href="#">Men <i class="fa fa-angle-right"></i></a>

                                                <!-- Child Categories -->
                                                <ul class="submenu">
                                                    <li><a href="#">Shirts</a></li>
                                                    <li><a href="#">Pants</a></li>
                                                    <li><a href="#">Shoes</a></li>
                                                </ul>
                                            </li>

                                            <li>
                                                <a href="#">Women <i class="fa fa-angle-right"></i></a>
                                                <ul class="submenu">
                                                    <li><a href="#">Dresses</a></li>
                                                    <li><a href="#">Tops</a></li>
                                                    <li><a href="#">Heels</a></li>
                                                </ul>
                                            </li>

                                            <li>
                                                <a href="#">Kids</a>
                                            </li>
                                        </ul>
                                    </li>
                                    {{-- <li><a href="blog.html">Blog</a></li> --}}
                                    <li><a href="{{ route('aboutUs') }}">About Us</a></li>
                                    <li><a href="{{ route('contactUs') }}">Contact</a></li>
                                    {{-- <li><a href="#">Features <i class="fa fa-angle-down"></i></a>
                                        <ul class="megamenu-3-column">
                                            <li><a href="#">Pages</a>
                                                <ul>
                                                    <li><a href="about-us.html">About Us</a></li>
                                                    <li><a href="contact-us.html">Contact Us</a></li>
                                                    <li><a href="service.html">Services</a></li>
                                                    <li><a href="portfolio.html">Portfolio</a></li>
                                                    <li><a href="faq.html">Frequently Questins</a></li>
                                                    <li><a href="404.html">Error 404</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Blog</a>
                                                <ul>
                                                    <li><a href="blog-no-sidebar.html">None Sidebar</a></li>
                                                    <li><a href="blog.html">Sidebar right</a></li>
                                                    <li><a href="single-blog.html">Image Format</a></li>
                                                    <li><a href="single-blog-gallery.html">Gallery Format</a></li>
                                                    <li><a href="single-blog-audio.html">Audio Format</a></li>
                                                    <li><a href="single-blog-video.html">Video Format</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Shop</a>
                                                <ul>
                                                    <li><a href="{{route('shop')}}">Shop</a></li>
                                                    <li><a href="shop-list.html">Shop List View</a></li>
                                                    <li><a href="shop-right.html">Shop Right</a></li>
                                                    <li><a href="{{route('productDetails')}}">Shop Single</a></li>
                                                    <li><a href="{{route('cart')}}">Shoping Cart</a></li>
                                                    <li><a href="{{route('checkout')}}">Checkout</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li> --}}
                                </ul>
                            </nav>
                        </div>

                        <div class="header-bottom-action">

                            <!-- Search -->
                            <div class="dropdown">
                                <button class="search-icon" data-bs-toggle="dropdown">
                                    <i class="fa fa-search"></i>
                                </button>
                                <div class="search_top dropdown-menu">
                                    <form method="get" action="#">
                                        <input class="text_input" name="s" value="" placeholder="Search"
                                            type="text">
                                        <button type="submit"><i class="fa fa-search"></i></button>
                                    </form>
                                </div>
                            </div>

                            <!-- Cart -->
                            <div class="dropdown">
                                <button class="cart-icon" data-bs-toggle="dropdown">
                                    <i class="fa fa-shopping-basket"></i>
                                    <span class="item_txt"> Cart</span>
                                    <span class="item_count">(2)</span>
                                    <span class="item_total">- $57.99</span>
                                </button>
                                <div class="header-cart dropdown-menu">
                                    <ul>
                                        <li>
                                            <div class="img_content">
                                                <img class="product-image img-responsive"
                                                    src="{{ asset('assets/images/product/cat/cat1.webp') }}"
                                                    alt="" title="">
                                                <span class="product-quantity">1x</span>
                                            </div>
                                            <div class="right_block">
                                                <span class="product-name">Hummingbird printed t-shirt</span>
                                                <span class="product-price">$21.99</span>
                                                <a href="#" class="remove-from-cart"> <i
                                                        class="fa fa-remove pull-xs-left"></i></a>
                                                <div class="attributes_content">
                                                    <span><strong>Size</strong>: S</span><br>
                                                    <span><strong>Color</strong>: White</span><br>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="img_content">
                                                <img class="product-image img-responsive"
                                                    src="{{ asset('assets/images/product/cat/cat2.webp') }}"
                                                    alt="" title="">
                                                <span class="product-quantity">1x</span>
                                            </div>
                                            <div class="right_block">
                                                <span class="product-name">The adventure begins Framed poster</span>
                                                <span class="product-price">$29.00</span>
                                                <a href="#" class="remove-from-cart"><i
                                                        class="fa fa-remove pull-xs-left"></i></a>
                                                <div class="attributes_content">
                                                    <span><strong>Dimension</strong>: 40x60cm</span><br>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="price_content">
                                        <div class="cart-subtotals">
                                            <div class="products price_inline">
                                                <span class="label">Subtotal</span>
                                                <span class="value">$50.99</span>
                                            </div>
                                            <div class=" price_inline">
                                                <span class="label"></span>
                                                <span class="value"></span>
                                            </div>
                                            <div class="shipping price_inline">
                                                <span class="label">Shipping</span>
                                                <span class="value">$7.00</span>
                                            </div>
                                            <div class="tax price_inline">
                                                <span class="label">Taxes</span>
                                                <span class="value">$0.00</span>
                                            </div>
                                        </div>
                                        <div class="cart-total price_inline">
                                            <span class="label">Total</span>
                                            <span class="value">$57.99</span>
                                        </div>
                                    </div>
                                    <div class="checkout">
                                        <a href="{{ route('checkout') }}" class="btn btn-primary">checkout</a>
                                    </div>
                                </div>
                            </div>

                            <div class="header-action-toggle d-lg-none">
                                <button class="toggle" data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenu">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- Header bottom area end -->

        </header>
        <!-- HRADER AREA END -->

        <!-- offcanvas Start -->
        <div class="offcanvas offcanvas-start" id="offcanvasMenu">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title">Offcanvas</h5>
                <button class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
            </div>
            <div class="offcanvas-body">

                <div class="contact-link">
                    <div class="info_box phone">
                        Call us : <span>(012) 800 456 789</span>
                    </div>
                    <div class="info_box email">
                        email : <a href="mailto:demo@example.com">demo@example.com</a>
                    </div>
                </div>

                <div class="offcanvas-accordion accordion" id="accordionExample">
                    <div class="accordion-item">
                        <button class="accordion-button collapsed" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne"><i class="first-icon fa fa-user-circle"></i> My
                            Account</button>
                        <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <ul class="offcanvas-meta">
                                <li><a href="{{ route('login') }}">My Account</a></li>
                                <li><a href="{{ route('checkout') }}">Checkout</a></li>
                                <li><a href="{{ route('login') }}">Sign in</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <button class="accordion-button collapsed" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo">$ USD</button>
                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <ul class="offcanvas-meta">
                                <li><a href="#">$ USD</a></li>
                                <li><a href="#">€ EUR</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <button class="accordion-button collapsed" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree"><img src="{{ asset('assets/images/icons/en.webp') }}"
                                alt="language-selector">English</button>
                        <div id="collapseThree" class="accordion-collapse collapse"
                            data-bs-parent="#accordionExample">
                            <ul class="offcanvas-meta">
                                <li>
                                    <a href="#">
                                        <img src="{{ asset('assets/images/icons/en.webp') }}" alt="French">
                                        <span>English</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="{{ asset('assets/images/icons/fr.webp') }}" alt="French">
                                        <span>French</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <nav class="canvas-menu">
                    <ul>
                        <li><a href="{{ route('index') }}">Home</a></li>

                        <li class="current">
                            <a href="{{ route('shop') }}">
                                Shop <i class="fa fa-angle-down"></i>
                            </a>

                            <!-- Parent Categories -->
                            <ul class="submenu">
                                <li>
                                    <a href="#">Men <i class="fa fa-angle-right"></i></a>

                                    <!-- Child Categories -->
                                    <ul class="submenu">
                                        <li><a href="#">Shirts</a></li>
                                        <li><a href="#">Pants</a></li>
                                        <li><a href="#">Shoes</a></li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="#">Women <i class="fa fa-angle-right"></i></a>
                                    <ul class="submenu">
                                        <li><a href="#">Dresses</a></li>
                                        <li><a href="#">Tops</a></li>
                                        <li><a href="#">Heels</a></li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="#">Kids</a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="{{ route('aboutUs') }}">About Us</a></li>
                        <li><a href="{{ route('contactUs') }}">Contact</a></li>

                    </ul>
                </nav>

                <div class="social_follow">
                    <ul>
                        <li class="facebook"><a href="#"></a></li>
                        <li class="twitter"><a href="#"></a></li>
                        <li class="youtube"><a href="#"></a></li>
                        <li class="googleplus"><a href="#"></a></li>
                        <li class="instagram"><a href="#"></a></li>
                    </ul>
                </div>

            </div>
        </div>
        <!-- offcanvas END -->
