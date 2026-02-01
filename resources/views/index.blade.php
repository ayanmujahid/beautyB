@extends('layouts.main')
@section('content')
    <!-- Slider area -->
    <div class="slider-area">
        <!-- slider start -->
        <div class="slider-inner">
            <div id="mainSlider" class="nivoSlider nevo-slider">
                <img src="{{ asset('assets/images/slider/1.webp') }}" alt="main slider" title="#htmlcaption1" />
                <img src="{{ asset('assets/images/slider/2.webp') }}" alt="main slider" title="#htmlcaption2" />
            </div>
            <div id="htmlcaption1" class="nivo-html-caption slider-caption">
                <div class="slider-progress"></div>
                <div class="container">
                    <div class="slider-content slider-content-1 slider-animated-1 pull-right">
                        <p class="hp1">It has finally started...</p>
                        <h1 class="hone">Huge sale up to</h1>
                        <h2 class="htwo">40% off</h2>
                        <div class="button-1 hover-btn-2">
                            <a href="#">SHOP NOW</a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="htmlcaption2" class="nivo-html-caption slider-caption">
                <div class="slider-progress"></div>
                <div class="container">
                    <div class="slider-content slider-content-2 slider-animated-2 pull-left">
                        <p class="hp1">It has finally started...</p>
                        <h1 class="hone">Huge sale up to</h1>
                        <h2 class="htwo">40% off</h2>
                        <div class="button-1 hover-btn-2">
                            <a href="#">SHOP NOW</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider end -->
    </div>
    <!-- Slider area end -->

    <!-- Policy area -->
    <div class="policy-area">
        <div class="container">
            <div class="policy-area-inner">
                <div class="row">
                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="single-policy">
                            <div class="icon"><i class=" fa fa-truck"></i></div>
                            <div class="txt_cms">
                                <h2>Free Shipping</h2>
                                <p>Free shipping on all order</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="single-policy">
                            <div class="icon"><i class=" fa fa-credit-card"></i></div>
                            <div class="txt_cms">
                                <h2>Money Guarantee</h2>
                                <p>30 days money back</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="single-policy">
                            <div class="icon"><i class=" fa fa-question-circle"></i></div>
                            <div class="txt_cms">
                                <h2>Online Support</h2>
                                <p>online 24/24 on day</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="single-policy">
                            <div class="icon"><i class=" fa fa-sun-o"></i></div>
                            <div class="txt_cms">
                                <h2>Secure Payment</h2>
                                <p>100% secure payment</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Policy area end -->

    <!-- poslistcategories -->
    <div class="poslistcategories">
        <div class="container">
            <div class="pos_title_categories">
                <h2>Hot <span>Categories</span> on Today</h2>
                <p>Praesent volutpat ut nisl in hendrerit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices
                    posuere cubilia Etiam porttitor, lacus in luctus molestie</p>
            </div>

            <div class="row pos_content">
                <div class="block_content owl-carousel">
                    <!-- single item -->
                    <div class="list-categories">
                        <div class="box-inner">
                            <div class="thumb-category">
                                <a href="{{ route('productDetails') }}">
                                    <img src="{{ asset('assets/images/product/round/thumb-1.webp') }}" alt="">
                                </a>
                            </div>
                            <div class="desc-listcategoreis">
                                <h3 class="name_categories"><a href="{{ route('productDetails') }}">Women</a></h3>
                                <p class="description-list">Praesent volutpat ut nisl in hendrerit. Vestibulum ante ipsum
                                    primis in faucibus orci luctus et ultrices posuere cubilia</p>
                                <div class="listcate_shop_now">
                                    <a href="{{ route('cart') }}">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single item end -->
                    <!-- single item -->
                    <div class="list-categories">
                        <div class="box-inner">
                            <div class="thumb-category">
                                <a href="{{ route('productDetails') }}">
                                    <img src="{{ asset('assets/images/product/round/thumb-2.webp') }}" alt="">
                                </a>
                            </div>
                            <div class="desc-listcategoreis">
                                <h3 class="name_categories"><a href="{{ route('productDetails') }}">Men</a></h3>
                                <p class="description-list">Praesent volutpat ut nisl in hendrerit. Vestibulum ante ipsum
                                    primis in faucibus orci luctus et ultrices posuere cubilia</p>
                                <div class="listcate_shop_now">
                                    <a href="{{ route('cart') }}">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single item end -->
                    <!-- single item -->
                    <div class="list-categories">
                        <div class="box-inner">
                            <div class="thumb-category">
                                <a href="{{ route('productDetails') }}">
                                    <img src="{{ asset('assets/images/product/round/thumb-3.webp') }}" alt="">
                                </a>
                            </div>
                            <div class="desc-listcategoreis">
                                <h3 class="name_categories"><a href="{{ route('productDetails') }}">Health & Beauty</a>
                                </h3>
                                <p class="description-list">Praesent volutpat ut nisl in hendrerit. Vestibulum ante ipsum
                                    primis in faucibus orci luctus et ultrices posuere cubilia</p>
                                <div class="listcate_shop_now">
                                    <a href="{{ route('cart') }}">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single item end -->
                    <!-- single item -->
                    <div class="list-categories">
                        <div class="box-inner">
                            <div class="thumb-category">
                                <a href="{{ route('productDetails') }}">
                                    <img src="{{ asset('assets/images/product/round/thumb-1.webp') }}" alt="">
                                </a>
                            </div>
                            <div class="desc-listcategoreis">
                                <h3 class="name_categories"><a href="{{ route('productDetails') }}">Women</a></h3>
                                <p class="description-list">Praesent volutpat ut nisl in hendrerit. Vestibulum ante ipsum
                                    primis in faucibus orci luctus et ultrices posuere cubilia</p>
                                <div class="listcate_shop_now">
                                    <a href="{{ route('cart') }}">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single item end -->
                </div>
            </div>
        </div>
    </div>
    <!-- poslistcategories end -->

    <!-- home banner -->
    <div class="home-banner">
        <div class="container-fluid p-0">
            <div class="row g-0">
                <div class="col-md-6">
                    <div class="banner-box m-0">
                        <a href="{{ route('shop') }}"><img src="{{ asset('assets/images/banner/1_1.webp') }}"
                                alt="harosa"></a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="banner-box m-0">
                        <a href="{{ route('shop') }}"><img src="{{ asset('assets/images/banner/2_1.webp') }}"
                                alt="harosa"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- home banner end -->

    <!-- product tabs container slider -->
    <div class="product-tabs-container-slider product_block_container">
        <div class="container">
            <div id="content">
                <ul id="tabs" class="nav tabs_slider" data-bs-tabs="tabs">
                    <li class="active"><a href="#newarrival" data-bs-toggle="tab">New Arrival</a></li>
                    <li><a href="#bestseller" data-bs-toggle="tab">Bestseller</a></li>
                    <li><a href="#featuredproducts" data-bs-toggle="tab">Featured Products</a></li>
                </ul>
                <div class="pos_content">
                    <div id="my-tab-content" class="tab-content">
                        <div class="tab-pane fade show active" id="newarrival">
                            {{-- Upper Slider --}}
                            <div class="productTabContent0 owl-carousel">
                                @foreach ($upperNewProducts as $product)
                                    <div class="item-product">
                                        <div class="product-miniature js-product-miniature">
                                            <div class="img_block">
                                                <a href="{{ route('productDetails', $product->slug) }}"
                                                    class="thumbnail product-thumbnail">
                                                    <img src="{{ asset('storage/' . $product->files->where('table_name', 'main_image')->first()?->url) }}"
                                                        alt="{{ $product->name }}">
                                                </a>
                                                <ul class="product-flag">
                                                    <li class="new"><span>New</span></li>
                                                </ul>
                                                <div class="quick-view">
                                                    <a href="#" class="quick_view" data-bs-toggle="modal"
                                                        data-bs-target="#product_modal" data-id="{{ $product->id }}"
                                                        data-name="{{ $product->name }}"
                                                        data-price="{{ $product->price }}"
                                                        data-discounted_price="{{ $product->discounted_price }}"
                                                        data-description="{{ $product->description }}"
                                                        data-image="{{ asset('storage/' . $product->mainImage?->url) }}"
                                                        data-gallery='@json($product->gallery->map(fn($img) => asset('storage/' . $img->url)))'>
                                                        <i class="fa fa-search"></i>
                                                    </a>
                                                </div>



                                                <div class="hook-reviews">
                                                    <div class="comments_note">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                </div>
                                                @if ($product->discounted_price < $product->price)
                                                    <div class="product-price-and-shipping_top">
                                                        <span class="discount-percentage discount-product">
                                                            -{{ round((($product->price - $product->discounted_price) / $product->price) * 100) }}%
                                                        </span>
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="product_desc">
                                                <div class="manufacturer">
                                                    <a href="{{ route('shop') }}">Studio Design</a>
                                                </div>
                                                <h1>
                                                    <a href="{{ route('productDetails', $product->slug) }}"
                                                        class="product_name"
                                                        title="{{ $product->name }}">{{ $product->name }}</a>
                                                </h1>
                                                <div class="product-price-and-shipping">
                                                    <span class="regular-price">PKR
                                                        {{ $product->discounted_price }}</span>
                                                    <span class="price price-sale">PKR
                                                        {{ $product->price }}</span>
                                                </div>
                                                <div class="cart">
                                                    <div class="product-add-to-cart">
                                                        <a href="#" class="add-cart"
                                                            data-id="{{ $product->id }}">Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                            {{-- Lower Slider --}}
                            <div class="productTabContent1 owl-carousel">
                                @foreach ($lowerNewProducts as $product)
                                    <div class="item-product">
                                        <div class="product-miniature js-product-miniature">
                                            <div class="img_block">
                                                <a href="{{ route('productDetails', $product->slug) }}"
                                                    class="thumbnail product-thumbnail">
                                                    <img src="{{ asset('storage/' . $product->files->where('table_name', 'main_image')->first()?->url) }}"
                                                        alt="{{ $product->name }}">
                                                </a>
                                                <ul class="product-flag">
                                                    <li class="new"><span>New</span></li>
                                                </ul>
                                                <div class="quick-view">
                                                    <a href="#" class="quick_view" data-bs-toggle="modal"
                                                        data-bs-target="#product_modal" data-id="{{ $product->id }}"
                                                        data-name="{{ $product->name }}"
                                                        data-price="{{ $product->price }}"
                                                        data-discounted_price="{{ $product->discounted_price }}"
                                                        data-description="{{ $product->description }}"
                                                        data-image="{{ asset('storage/' . $product->mainImage?->url) }}"
                                                        data-gallery='@json($product->gallery->map(fn($img) => asset('storage/' . $img->url)))'>
                                                        <i class="fa fa-search"></i>
                                                    </a>
                                                </div>
                                                <div class="hook-reviews">
                                                    <div class="comments_note">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                </div>
                                                @if ($product->discounted_price < $product->price)
                                                    <div class="product-price-and-shipping_top">
                                                        <span class="discount-percentage discount-product">
                                                            -{{ round((($product->price - $product->discounted_price) / $product->price) * 100) }}%
                                                        </span>
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="product_desc">
                                                <div class="manufacturer">
                                                    <a href="{{ route('shop') }}">Studio Design</a>
                                                </div>
                                                <h1>
                                                    <a href="{{ route('productDetails', $product->slug) }}"
                                                        class="product_name"
                                                        title="{{ $product->name }}">{{ $product->name }}</a>
                                                </h1>
                                                <div class="product-price-and-shipping">
                                                    <span class="regular-price">PKR
                                                        {{ $product->discounted_price }}</span>
                                                    <span class="price price-sale">PKR
                                                        {{ $product->price }}</span>
                                                </div>
                                                <div class="cart">
                                                    <div class="product-add-to-cart">
                                                        <a href="#" class="add-cart"
                                                            data-id="{{ $product->id }}">Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                        </div>
                        {{-- <div class="tab-pane fade" id="bestseller">
                                <div class="productTabContent0 owl-carousel">
                                    <!-- single product -->
                                    @foreach ($bestSellerProducts as $product)
                                    <div class="item-product">
                                        <div class="product-miniature js-product-miniature">
                                            <div class="img_block">
                                                <a href="{{route('productDetails')}}" class="thumbnail product-thumbnail">
                                                    <img src="{{asset('assets/images/product/1.webp')}}" alt="harosa product">
                                                </a>
                                                <ul class="product-flag">
                                                    <li class="new"><span>New</span></li>
                                                </ul>
                                                <div class="quick-view">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#product_modal"  data-original-title="Quick View" class="quick_view"><i class="fa fa-search"></i></a>
                                                </div>
                                                <div class="hook-reviews">
                                                    <div class="comments_note">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                </div>
                                                <div class="product-price-and-shipping_top">
                                                    <span class="discount-percentage discount-product">-8%</span>
                                                </div>
                                            </div>
                                            <div class="product_desc">
                                                <div class="manufacturer">
                                                    <a href="{{route('shop')}}">Studio Design</a>
                                                </div>
                                                <h1> <a href="{{route('productDetails')}}" class="product_name" title="Hummingbird printed t-shirt">Hummingbird printed t-shirt</a></h1>
                                                <div class="product-price-and-shipping">
                                                    <span class="regular-price">$23.90</span>
                                                    <span class="price price-sale">$21.99</span>
                                                </div>
                                                <div class="cart">
                                                    <div class="product-add-to-cart">
                                                        <a href="{{route('cart')}}">Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-miniature js-product-miniature">
                                            <div class="img_block">
                                                <a href="{{route('productDetails')}}" class="thumbnail product-thumbnail">
                                                    <img src="{{asset('assets/images/product/4.webp')}}" alt="harosa product">
                                                </a>
                                                <ul class="product-flag">
                                                    <li class="new"><span>New</span></li>
                                                </ul>
                                                <div class="quick-view">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#product_modal"  data-original-title="Quick View" class="quick_view"><i class="fa fa-search"></i></a>
                                                </div>
                                                <div class="hook-reviews">
                                                    <div class="comments_note">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product_desc">
                                                <div class="manufacturer">
                                                    <a href="{{route('shop')}}">Studio Design</a>
                                                </div>
                                                <h1> <a href="{{route('productDetails')}}" class="product_name" title="Hummingbird printed t-shirt">Hummingbird printed t-shirt</a></h1>
                                                <div class="product-price-and-shipping">
                                                    <span class="regular-price">$23.90</span>
                                                    <span class="price price-sale">$21.99</span>
                                                </div>
                                                <div class="cart">
                                                    <div class="product-add-to-cart">
                                                        <a href="{{route('cart')}}">Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    <!-- single product end -->
                                 
                                </div>
                            </div> --}}
                        <div class="tab-pane fade" id="featuredproducts">
                            <div class="productTabContent0 owl-carousel">
                                <!-- single product -->
                                @foreach ($featuredProducts as $product)
                                    <div class="item-product">
                                        <div class="product-miniature js-product-miniature">
                                            <div class="img_block">
                                                <a href="{{ route('productDetails') }}"
                                                    class="thumbnail product-thumbnail">
                                                    <img src="{{ asset('assets/images/product/1.webp') }}"
                                                        alt="harosa product">
                                                </a>
                                                <ul class="product-flag">
                                                    <li class="new"><span>New</span></li>
                                                </ul>
                                                <div class="quick-view">
                                                    <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#product_modal" data-original-title="Quick View"
                                                        class="quick_view"><i class="fa fa-search"></i></a>
                                                </div>
                                                <div class="hook-reviews">
                                                    <div class="comments_note">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                </div>
                                                <div class="product-price-and-shipping_top">
                                                    <span class="discount-percentage discount-product">-8%</span>
                                                </div>
                                            </div>
                                            <div class="product_desc">
                                                <div class="manufacturer">
                                                    <a href="{{ route('shop') }}">Studio Design</a>
                                                </div>
                                                <h1> <a href="{{ route('productDetails') }}" class="product_name"
                                                        title="Hummingbird printed t-shirt">Hummingbird printed t-shirt</a>
                                                </h1>
                                                <div class="product-price-and-shipping">
                                                    <span class="regular-price">$23.90</span>
                                                    <span class="price price-sale">$21.99</span>
                                                </div>
                                                <div class="cart">
                                                    <div class="product-add-to-cart">
                                                        <a href="{{ route('cart') }}">Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-miniature js-product-miniature">
                                            <div class="img_block">
                                                <a href="{{ route('productDetails') }}"
                                                    class="thumbnail product-thumbnail">
                                                    <img src="{{ asset('assets/images/product/4.webp') }}"
                                                        alt="harosa product">
                                                </a>
                                                <ul class="product-flag">
                                                    <li class="new"><span>New</span></li>
                                                </ul>
                                                <div class="quick-view">
                                                    <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#product_modal" data-original-title="Quick View"
                                                        class="quick_view"><i class="fa fa-search"></i></a>
                                                </div>
                                                <div class="hook-reviews">
                                                    <div class="comments_note">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product_desc">
                                                <div class="manufacturer">
                                                    <a href="{{ route('shop') }}">Studio Design</a>
                                                </div>
                                                <h1> <a href="{{ route('productDetails') }}" class="product_name"
                                                        title="Hummingbird printed t-shirt">Hummingbird printed t-shirt</a>
                                                </h1>
                                                <div class="product-price-and-shipping">
                                                    <span class="regular-price">$23.90</span>
                                                    <span class="price price-sale">$21.99</span>
                                                </div>
                                                <div class="cart">
                                                    <div class="product-add-to-cart">
                                                        <a href="{{ route('cart') }}">Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                <!-- single product end -->



                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- product tabs container slider end -->

    <!-- static product -->
    <div class="static_product">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="item-static">
                        <div class="banner-box"><a href="#"> <img
                                    src="{{ asset('assets/images/product/3_1.webp') }}" alt=""
                                    class="img-responsive"></a></div>
                        <div class="content-static">
                            <div class="sale-static">Sale 30% off</div>
                            <h2>NSI Balance Gel Body Builder NUDE</h2>
                            <p>Praesent volutpat ut nisl in hendrerit. Vesti-bulum ante ipsum primis in faucibus</p>
                            <a href="#">Shop Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="item-static">
                        <div class="banner-box"><a href="#"> <img
                                    src="{{ asset('assets/images/product/4_1.webp') }}" alt=""
                                    class="img-responsive"></a></div>
                        <div class="content-static">
                            <div class="sale-static">Sale 50% off</div>
                            <h2>Buy Nude by Bill Blass For Her EDC 100 ml</h2>
                            <p>Praesent volutpat ut nisl in hendrerit. Vesti-bulum ante ipsum primis in faucibus</p>
                            <a href="#">Shop Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="item-static">
                        <div class="banner-box"><a href="#"> <img
                                    src="{{ asset('assets/images/product/5_1.webp') }}" alt=""
                                    class="img-responsive"></a></div>
                        <div class="content-static">
                            <div class="sale-static">Sale 20% off</div>
                            <h2>PBM Cream Foundation Makeup</h2>
                            <p>Praesent volutpat ut nisl in hendrerit. Vesti-bulum ante ipsum primis in faucibus</p>
                            <a href="#">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- static product -->

    <!-- testimonials container -->
    <div class="testimonials_container">
        <div class="container">
            <div class="block-content pos_content">
                <div class="testimonialsSlide owl-carousel">
                    <!-- testimonial iteme -->
                    <div class="item-testimonials">
                        <div class="item">
                            <div class="content_author">
                                <img src="{{ asset('assets/images/testimonials/sample1.webp') }}"
                                    alt="Harosa Testimonial">
                                <div class="content_test">
                                    <div class="des_testimonial">
                                        Praesent volutpat ut nisl in hendrerit. Vestibulum ante ipsum primis in faucibus
                                        orci luctus et ultrices posuere cubilia Etiam porttitor, lacus in luctus molestie
                                    </div>
                                    <p class="des_namepost"><span>John Doe </span></p>
                                    <p class="des_email">support@beautybstore.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- testimonial iteme end -->
                    <!-- testimonial iteme -->
                    <div class="item-testimonials">
                        <div class="item">
                            <div class="content_author">
                                <img src="{{ asset('assets/images/testimonials/sample1.webp') }}"
                                    alt="Harosa Testimonial">
                                <div class="content_test">
                                    <div class="des_testimonial">
                                        Praesent volutpat ut nisl in hendrerit. Vestibulum ante ipsum primis in faucibus
                                        orci luctus et ultrices posuere cubilia Etiam porttitor, lacus in luctus molestie
                                    </div>
                                    <p class="des_namepost"><span>John Doe </span></p>
                                    <p class="des_email">support@beautybstore.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- testimonial iteme end -->
                    <!-- testimonial iteme -->
                    <div class="item-testimonials">
                        <div class="item">
                            <div class="content_author">
                                <img src="{{ asset('assets/images/testimonials/sample1.webp') }}"
                                    alt="Harosa Testimonial">
                                <div class="content_test">
                                    <div class="des_testimonial">
                                        Praesent volutpat ut nisl in hendrerit. Vestibulum ante ipsum primis in faucibus
                                        orci luctus et ultrices posuere cubilia Etiam porttitor, lacus in luctus molestie
                                    </div>
                                    <p class="des_namepost"><span>John Doe </span></p>
                                    <p class="des_email">support@beautybstore.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- testimonial iteme end -->
                </div>
            </div>
        </div>
    </div>
    <!-- testimonials container end -->

    <!-- pos special products  -->
    <div class="pos-special-products">
        <div class="container">
            <div class="special-products">
                <div class="pos_title">
                    <h2>Daily Deals</h2>
                </div>
                <div class="pos_content">
                    <div class="special-item owl-carousel">
                        <!-- special item -->
                        @foreach ($featuredProducts as $product)
                            <div class="product-miniature js-product-miniature">
                                <h1><a href="{{ route('productDetails', $product->slug) }}" class="product_name"
                                        title="{{ $product->name }}">{{ $product->name }}</a></h1>
                                <div class="img_block">
                                    <a href="{{ route('productDetails', $product->slug) }}"
                                        class="thumbnail product-thumbnail">
                                        <img src="{{ asset('storage/' . $product->files->where('table_name', 'main_image')->first()?->url) }}"
                                            alt="{{ $product->name }}">
                                    </a>
                                    <ul class="product-flag">
                                        <li class="new"><span>New</span></li>
                                    </ul>
                                    <div class="quick-view">
                                        <a href="#" class="quick_view" data-bs-toggle="modal"
                                            data-bs-target="#product_modal" data-id="{{ $product->id }}"
                                            data-name="{{ $product->name }}" data-price="{{ $product->price }}"
                                            data-discounted_price="{{ $product->discounted_price }}"
                                            data-description="{{ $product->description }}"
                                            data-image="{{ asset('storage/' . $product->mainImage?->url) }}"
                                            data-gallery='@json($product->gallery->map(fn($img) => asset('storage/' . $img->url)))'>
                                            <i class="fa fa-search"></i>
                                        </a>
                                    </div>
                                    <div class="hook-reviews">
                                        <div class="comments_note">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="product-price-and-shipping_top">
                                        <span class="discount-percentage discount-product">-8%</span>
                                    </div>
                                </div>
                                <div class="product_desc">
                                    <div class="manufacturer">
                                        <a href="{{ route('shop') }}">Studio Design</a>
                                    </div>
                                    <div class="product-desc">
                                        <p><span>Regular fit, round neckline, short sleeves. Made of extra long staple pima
                                                cotton. </span></p>
                                    </div>
                                    <div class="product-price-and-shipping">
                                        <span class="regular-price">PKR{{ $product->discounted_price }}</span>
                                        <span class="price price-sale">PKR{{ $product->price }}</span>
                                    </div>
                                    <div class="cart">
                                        <div class="product-add-to-cart">
                                            <a href="#" data-id="{{ $product->id }}">Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="countdown">
                                    <div class="time_count_down">
                                        <div data-countdown="2022/08/02"></div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <!-- special item end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- pos special products  end -->
@endsection
@section('css')
    <style type="text/css">
        /* Video Section Styling */
    </style>
@endsection
@section('js')
    <script type="text/javascript"></script>
@endsection
