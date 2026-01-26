@extends('layouts.main')
@section('content')
    <!-- ================= Shop Banner ================= -->
    <div class="shop-page-wraper">
        <div class="container">
            <div class="row flex-row-reverse">
                <div class="col-lg-9 shop-content">
                    <div class="product-toolbar">
                        <div class="topbar-title">
                            <h1>{{ $categoryName }}</h1>
                        </div>
                        <div class="product-toolbar-inner">
                            <div class="product-view-mode">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a data-bs-toggle="tab" href="#grid"><i class="ion-grid"></i></a>
                                    </li>
                                    <li><a data-bs-toggle="tab" href="#list"><i class="ion-navicon"></i></a></li>
                                </ul>
                            </div>
                            <div class="woocommerce-ordering">
                                <form method="get" class="woocommerce-ordering hidden-xs">
                                    <div class="orderby-wrapper">
                                        <label>Sort By :</label>
                                        <select class="nice-select-menu orderby">
                                            <option dara-display="Select">Default sorting</option>
                                            <option value="popularity" onclick="applySort('featured')">Featured</option>
                                            <option value="rating" onclick="applySort('best-selling')">Best selling</option>
                                            <option value="date" onclick="applySort('alphabetical-asc')">Alphabetically,
                                                A-Z</option>
                                            <option value="price" onclick="applySort('price-asc')">Sort by price: low to
                                                high</option>
                                            <option value="price-desc" onclick="applySort('price-desc')">Sort by price: high
                                                to low</option>
                                        </select>
                                    </div>
                                </form>
                            </div>
                            {{-- <p class="woocommerce-result-count">There are ({{ $totalProducts }}) products</p> --}}
                        </div>
                        <div class="shop-page-product-area tab-content">
                            <div id="grid" class="tab-pane fade show active">
                                <div class="row">
                                    @if (!empty($products) && (is_array($products) ? !empty($products) : !$products->isEmpty()))
                                    @else
                                        <div class="sectionContent text-center">
                                            <div class="about_con">
                                                <h3>No Products found</h3>
                                            </div>
                                        </div>
                                    @endif
                                    @foreach ($products as $product)
                                        <!-- single product -->
                                        <div class="col-sm-6 col-md-6 col-lg-4">
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
                                                </div>
                                                <div class="product_desc">
                                                    <div class="manufacturer">
                                                        <a href="{{ route('shop') }}">{{$categoryName}}</a>
                                                    </div>
                                                    <h1> <a href="{{ route('productDetails', $product->slug) }}" class="product_name"
                                                            title="{{ $product->name }}">{{ $product->name }}</a>
                                                    </h1>
                                                    <div class="product-price-and-shipping">
                                                        <span class="regular-price">PKR{{ $product->price }}</span>
                                                        <span
                                                            class="price price-sale">PKR{{ $product->discounted_price }}</span>
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

                                    <!-- single product end -->
                                </div>
                            </div>

                            <div id="list" class="tab-pane fade">
                                <div class="row">
                                    @if (!empty($products) && (is_array($products) ? !empty($products) : !$products->isEmpty()))
                                    @else
                                        <div class="sectionContent text-center">
                                            <div class="about_con">
                                                <h3>No Products found</h3>
                                            </div>
                                        </div>
                                    @endif
                                    <!-- single product list view -->
                                    @foreach ($products as $product)
                                        <div class="col-md-12">
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
                                                </div>
                                                <div class="product_desc">
                                                    <div class="manufacturer">
                                                        <a href="{{ route('shop') }}">{{$categoryName}}</a>
                                                    </div>
                                                    <h1><a href="{{ route('productDetails', $product->slug) }}" class="product_name"
                                                            title="{{ $product->name }}">{{ $product->name }}</a>
                                                    </h1>
                                                    <div class="product-desc">
                                                        <p><span>{{ $product->long_description }}. </span></p>
                                                    </div>
                                                    <div class="product-price-and-shipping">
                                                        <span class="regular-price">PKR{{ $product->price }}</span>
                                                        <span
                                                            class="price price-sale">${{ $product->discounted_price }}</span>
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
                                        <!-- single product list view end -->
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <nav class="woocommerce-pagination">
                        <ul class="page-numbers">
                            <li><span aria-current="page" class="page-numbers current">1</span></li>
                            <li><a class="page-numbers" href="#">2</a></li>
                            <li><a class="page-numbers" href="#">3</a></li>
                            <li><a class="page-numbers" href="#">4</a></li>
                            <li><a class="next page-numbers" href="#">→</a></li>
                        </ul>
                    </nav> --}}
                </div>
                <div class="col-lg-3 sidebar-shop">
                    <div class="sidebar-product-categori">
                        <div class="shop-categori-title">
                            <h3>{{ $categoryName }}</h3>
                        </div>
                        <div class="product-filter mb-30">
                            <div class="widget-title">
                                <h3>Filter by price</h3>
                            </div>
                            <div class="widget-content">
                                <div id="price-range"></div>
                                <div class="price-values">
                                    <div class="price_text_btn">
                                        <span>Price:</span>
                                        <input type="text" class="price-amount">
                                    </div>
                                    <button class="button" type="submit">Filter</button>
                                </div>
                            </div>
                        </div>
                        <div class="facet">
                            <h3>Product Catagories</h3>
                            <div class="widget-content">
                                <ul class="product-categories">
                                    <li class="cat-item {{ is_null($slug) ? 'current' : '' }}">
                                        <a href="{{ route('shop') }}">All</a>
                                        <span class="count">({{ $totalProducts }})</span>
                                    </li>
                                    @foreach ($categories as $category)
                                        <li class="cat-item {{ $slug === $category->slug ? 'current' : '' }}">
                                            <a href="{{ route('shop', $category->slug) }}">{{ $category->name }}</a>
                                            <span class="count">({{ $category->products_count }})</span>
                                        </li>
                                    @endforeach

                                </ul>
                            </div>
                        </div>
                        {{-- <div class="facet">
                            <h3>Size</h3>
                            <div class="widget-content">
                                <ul class="product-categories">
                                    <li class="cat-item">
                                        <a href="#">S</a>
                                        <span class="count">(3)</span>
                                    </li>
                                    <li class="cat-item">
                                        <a href="#">M</a>
                                        <span class="count">(5)</span>
                                    </li>
                                    <li class="cat-item">
                                        <a href="#">L</a>
                                        <span class="count">(2)</span>
                                    </li>
                                    <li class="cat-item">
                                        <a href="#">XL</a>
                                        <span class="count">(7)</span>
                                    </li>

                                </ul>
                            </div>
                        </div> --}}
                        <div class="advertising">
                            <a href="{{ route('shop') }}"><img
                                    src="{{ asset('assets/images/banner/advertising.webp') }}" alt="harosa images"></a>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
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
        function applySort(sortOption) {
            const currentUrl = new URL(window.location.href);
            currentUrl.searchParams.set('sort', sortOption);
            window.location.href = currentUrl.toString();
        }
    </script>
@endsection
