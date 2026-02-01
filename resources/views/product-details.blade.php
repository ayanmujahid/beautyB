@extends('layouts.main')
@section('content')
    <!-- ================= Product Details Section ================= -->
    <!-- single product area -->
    <div class="single-product-page-area">
        <div class="container">
            <div class="row gy-5">
                <div class="col-lg-6">
                    <div class="images-container">
                        <div class="js-qv-mask mask pos_content">
                            <div class="thumb-container">
                                <ul class="nav nav-tabs">

                                    {{-- Main Image Thumbnail --}}
                                    @if ($product->mainImage)
                                        <li class="active">
                                            <a href="#img-main" data-bs-toggle="tab">
                                                <img src="{{ asset('storage/' . $product->mainImage->url) }}"
                                                    alt="{{ $product->name }}">
                                            </a>
                                        </li>
                                    @endif

                                    {{-- Gallery Thumbnails --}}
                                    @foreach ($product->gallery as $key => $image)
                                        <li>
                                            <a href="#img-{{ $key }}" data-bs-toggle="tab">
                                                <img src="{{ asset('storage/' . $image->url) }}" alt="{{ $product->name }}">
                                            </a>
                                        </li>
                                    @endforeach

                                </ul>
                            </div>
                        </div>
                        <div class="product-cover">
                            <div class="tab-content">
                                @if ($product->mainImage)
                                    <div class="tab-pane active" id="img-main">
                                        <img src="{{ asset('storage/' . $product->mainImage->url) }}"
                                            alt="{{ $product->name }}">
                                        <div class="layer hidden-sm-down">
                                            <i class="material-icons zoom-in"></i>
                                        </div>
                                    </div>
                                @endif
                                {{-- Gallery Images --}}
                                @foreach ($product->gallery as $key => $image)
                                    <div class="tab-pane" id="img-{{ $key }}">
                                        <img src="{{ asset('storage/' . $image->url) }}" alt="{{ $product->name }}">
                                        <div class="layer hidden-sm-down">
                                            <i class="material-icons zoom-in"></i>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h1 class="h1 namne_details">{{ $product->name }}</h1>
                    {{-- <p class="reference">Reference: demo_1</p> --}}
                    <div id="product_comments_block_extra" class="no-print">
                        <div class="hook-reviews">
                            <div class="comments_note">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                        <ul class="comments_advices">
                            <li>
                                <a href="#idTab5" class="reviews _mPS2id-h">Read reviews (<span>1</span>)</a>
                            </li>
                            <li>
                                <a class="open-comment-form">Write a review</a>
                            </li>
                        </ul>
                    </div>
                    <div class="product-prices">
                        <div class="product-discount">
                            <span class="regular-price">PKR{{ $product->price }}</span>
                        </div>
                        <div class="product-price h5 has-discount">
                            <div class="current-price">
                                <span>PKR{{ $product->discounted_price }}</span>
                                <span class="discount discount-percentage">Save 8%</span>
                            </div>
                        </div>
                    </div>
                    <div class="product-information">
                        <div class="product-desc">
                            <p><span>{{ $product->long_description }}
                                </span></p>
                        </div>
                        <div class="product-actions">
                            <form action="#">
                                <div class="product-variants">


                                </div>
                                <div class="product-discounts"></div>
                                <div class="product-add-to-cart">
                                    <span class="control-label">Quantity</span>
                                    <div class="box-quantity d-flex">
                                        <input class="quantity mr-40" min="1" value="1" type="number">

                                        <a class="add-cart" data-id="{{ $product->id }}" href="#"><i
                                                class="fa fa-shopping-cart"></i>add to cart</a>
                                    </div>
                                </div>
                                <div class="product-additional-info">
                                    <div class="social-sharing">
                                        <span>Share</span>
                                        <ul>
                                            <li class="facebook"><a href="#" title="Share" target="_blank">Share</a>
                                            </li>
                                            <li class="twitter"><a href="#" title="Tweet" target="_blank">Tweet</a>
                                            </li>
                                            <li class="googleplus"><a href="#" title="Google+"
                                                    target="_blank">Google+</a></li>
                                            <li class="pinterest"><a href="#" title="Pinterest"
                                                    target="_blank">Pinterest</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- single product area -->

    <!-- product tabs container slider -->
    
    <!-- product tabs container slider end -->

    <!-- product tabs container slider -->
    <div class="single-product-related-post product-tabs-container-slider product_block_container">
        <div class="container">
            <ul class="nav tabs_slider">
                <li class="active"><a href="#newarrival" data-bs-toggle="tab"> 12 other products in the same category:
                    </a></li>
            </ul>
            <div class="tab-content pos_content">
                <div class="tab-pane active" id="newarrival">
                    <div class="productTabContent0 owl-carousel">
                        <!-- single product -->
                        @foreach ($relatedProduct as $product)
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
                                        <h1> <a href="{{ route('productDetails', $product->slug) }}" class="product_name"
                                                title="Hummingbird printed t-shirt">{{$product->name}}</a></h1>
                                        <div class="product-price-and-shipping">
                                            <span class="regular-price">PKR{{$product->price}}</span>
                                            <span class="price price-sale">PKR{{$product->discounted_price}}</span>
                                        </div>
                                        <div class="cart">
                                            <div class="product-add-to-cart">
                                                <a href="#" data-id="{{ $product->id }}">Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <!-- single product end -->
                        <!-- single product -->

                        <!-- single product end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- product tabs container slider end -->
@endsection
@section('css')
    <style type="text/css">
        /*in page css here*/
    </style>
@endsection
@section('js')
    <script type="text/javascript">
        (() => {
            /*in page js here*/
        })()
    </script>
    <script>
        // ===== Thumbnail Click Event =====
        const thumbs = document.querySelectorAll('.thumb');
        const mainImage = document.getElementById('mainProductImage');

        thumbs.forEach(thumb => {
            thumb.addEventListener('click', function() {
                thumbs.forEach(t => t.style.borderColor = 'transparent');
                this.style.borderColor = '#3cb815';
                mainImage.src = this.src;
            });
        });

        // ===== Quantity Buttons =====
    </script>

    <script>
        $(document).on('click', '.add-cart', function(e) {
            e.preventDefault();

            let productId = $(this).data('id');
            let quantity = $(this).closest('.box-quantity').find('.quantity').val();

            $.post("{{ route('cart.add') }}", {
                _token: $('meta[name="csrf-token"]').attr('content'),
                product_id: productId,
                quantity: quantity
            }, function(res) {
                if (res.success) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Added to Cart!',
                        text: 'Quantity: ' + quantity,
                        showConfirmButton: false,
                        timer: 1500
                    });

                    // update cart count
                    $('#cart-count').text(res.cart_count);
                }
            }).fail(function() {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops!',
                    text: 'Something went wrong. Please try again.'
                });
            });
        });
    </script>
@endsection
