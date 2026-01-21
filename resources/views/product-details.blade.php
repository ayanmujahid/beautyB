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
                                        <li class="active"><a href="#red" data-bs-toggle="tab">
                                            <img src="{{asset('assets/images/product/thumbnails/1.webp')}}" alt="">
                                        </a></li>
                                        <li><a href="#orange" data-bs-toggle="tab">
                                            <img src="{{asset('assets/images/product/thumbnails/2.webp')}}" alt="">
                                        </a></li>
                                        <li><a href="#yellow" data-bs-toggle="tab">
                                            <img src="{{asset('assets/images/product/thumbnails/3.webp')}}" alt="">
                                        </a></li>
                                        <li><a href="#green" data-bs-toggle="tab">
                                            <img src="{{asset('assets/images/product/thumbnails/4.webp')}}" alt="">
                                        </a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-cover">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="red">
                                        <img src="{{asset('assets/images/product/single/1.webp')}}" alt="harosa single product">
                                        <div class="layer hidden-sm-down">
                                            <i class="material-icons zoom-in"></i>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="orange">
                                        <img src="{{asset('assets/images/product/single/2.webp')}}" alt="harosa single product">
                                        <div class="layer hidden-sm-down">
                                            <i class="material-icons zoom-in"></i>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="yellow">
                                        <img src="{{asset('assets/images/product/single/3.webp')}}" alt="harosa single product">
                                        <div class="layer hidden-sm-down">
                                            <i class="material-icons zoom-in"></i>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="green">
                                        <img src="{{asset('assets/images/product/single/4.webp')}}" alt="harosa single product">
                                        <div class="layer hidden-sm-down">
                                            <i class="material-icons zoom-in"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h1 class="h1 namne_details">Hummingbird printed t-shirt</h1>
                        <p class="reference">Reference: demo_1</p>
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
                                <span class="regular-price">$23.90</span>
                            </div>
                            <div class="product-price h5 has-discount">
                                <div class="current-price">
                                    <span>$21.99</span>
                                    <span class="discount discount-percentage">Save 8%</span>
                                </div>
                            </div>
                        </div>
                        <div class="product-information">
                            <div class="product-desc">
                                <p><span>Regular fit, round neckline, short sleeves. Made of extra long staple pima cotton. </span></p>
                            </div>
                            <div class="product-actions">
                                <form action="#">
                                    <div class="product-variants">
                                        <div class="product-variants-item">
                                            <span class="control-label">Size</span>
                                            <select class="form-control form-control-select" id="group_1">
                                                <option value="1" title="S" selected="selected">S</option>
                                                <option value="2" title="M">M</option>
                                                <option value="3" title="L">L</option>
                                                <option value="4" title="XL">XL</option>
                                            </select>
                                        </div>
                                        <div class="product-variants-item">
                                            <span class="control-label">Color</span>
                                            <ul id="group_2">
                                                <li class="float-xs-left input-container">
                                                    <label>
                                                    <input class="input-color" data-product-attribute="2" name="group[2]" value="8" checked="checked" type="radio">
                                                    <span class="color"><span class="sr-only">White</span></span>
                                                    </label>
                                                </li>
                                                <li class="float-xs-left input-container">
                                                    <label>
                                                    <input class="input-color" data-product-attribute="2" name="group[2]" value="11" type="radio">
                                                    <span class="color color-two"><span class="sr-only">Black</span></span>
                                                    </label>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-discounts"></div>
                                    <div class="product-add-to-cart">
                                        <span class="control-label">Quantity</span>
                                        <div class="box-quantity d-flex">
                                            <input class="quantity mr-40" min="1" value="1" type="number">
                                            <a class="add-cart" href="{{route('cart')}}"><i class="fa fa-shopping-cart"></i>add to cart</a>
                                        </div>
                                    </div>
                                    <div class="product-additional-info">
                                        <div class="social-sharing">
                                            <span>Share</span>
                                            <ul>
                                                <li class="facebook"><a href="#" title="Share" target="_blank">Share</a></li>
                                                <li class="twitter"><a href="#" title="Tweet" target="_blank">Tweet</a></li>
                                                <li class="googleplus"><a href="#" title="Google+" target="_blank">Google+</a></li>
                                                <li class="pinterest"><a href="#" title="Pinterest" target="_blank">Pinterest</a></li>
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
        <div class="single-product-description-area product-tabs-container-slider product_block_container">
            <div class="container">
                <ul class="nav tabs_slider">
                    <li class="active"><a href="#newarrival" data-bs-toggle="tab">New Arrival</a></li>
                    <li><a href="#ProductDetails" data-bs-toggle="tab">Product Details</a></li>
                    <li><a href="#featuredproducts" data-bs-toggle="tab">Featured Products</a></li>
                </ul>
                <div class="tab-content pos_content">
                    <div class="tab-pane fade show active" id="newarrival">
                        <p>Symbol of lightness and delicacy, the hummingbird evokes curiosity and joy. Studio Design' PolyFaune collection features classic products with colorful patterns, inspired by the traditional japanese origamis. To wear with a chino or jeans. The sublimation textile printing process provides an exceptional color rendering and a color, guaranteed overtime.</p>
                    </div>
                    <div class="tab-pane fade text-center" id="ProductDetails">
                        <div class="product-manufacturer">
                            <a href="#">
                            <img src="{{asset('assets/images/brand/sin.webp')}}" class="img img-thumbnail manufacturer-logo" alt="Harosa Studio Design">
                            </a>
                        </div>
                        <div class="product-reference">
                            <label class="label">Reference </label>
                            <span>demo_1</span>
                        </div>
                        <div class="product-quantities">
                            <label class="label">In stock</label>
                            <span data-stock="295" data-allow-oosp="0">295 Items</span>
                        </div>
                        <div class="product-out-of-stock"></div> 
                    </div>
                    <div class="tab-pane fade text-center" id="featuredproducts">
                        <div id="product_comments_block_tab">
                            <div class="comment clearfix">
                                <div class="comment_author">
                                    <span>Grade&nbsp;</span>
                                    <div class="star_content clearfix">
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
                                    <div class="comment_author_infos">
                                        <strong>Posthemes</strong>
                                        <em>05/18/2018</em>
                                    </div>
                                </div>
                                <div class="comment_details">
                                    <h4 class="title_block">demo</h4>
                                    <p>Good !</p>
                                </div>
                                <p class="align_center"><a id="new_comment_tab_btn" class="open-comment-form btn btn-secondary">Write your review !</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- product tabs container slider end -->

        <!-- product tabs container slider -->
        <div class="single-product-related-post product-tabs-container-slider product_block_container">
            <div class="container">
                <ul class="nav tabs_slider">
                    <li class="active"><a href="#newarrival" data-bs-toggle="tab"> 12 other products in the same category: </a></li>
                </ul>
                <div class="tab-content pos_content">
                    <div class="tab-pane active" id="newarrival">
                        <div class="productTabContent0 owl-carousel">
                            <!-- single product -->
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
                            </div>
                            <!-- single product end -->
                            <!-- single product -->
                            <div class="item-product">
                                <div class="product-miniature js-product-miniature">
                                    <div class="img_block">
                                        <a href="{{route('productDetails')}}" class="thumbnail product-thumbnail">
                                            <img src="{{asset('assets/images/product/2.webp')}}" alt="harosa product">
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
                            <!-- single product end -->
                            <!-- single product -->
                            <div class="item-product">
                                <div class="product-miniature js-product-miniature">
                                    <div class="img_block">
                                        <a href="{{route('productDetails')}}" class="thumbnail product-thumbnail">
                                            <img src="{{asset('assets/images/product/3.webp')}}" alt="harosa product">
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
                            <!-- single product end -->
                            <!-- single product -->
                            <div class="item-product">
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
                            <!-- single product end -->
                            <!-- single product -->
                            <div class="item-product">
                                <div class="product-miniature js-product-miniature">
                                    <div class="img_block">
                                        <a href="{{route('productDetails')}}" class="thumbnail product-thumbnail">
                                            <img src="{{asset('assets/images/product/5.webp')}}" alt="harosa product">
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
                            <!-- single product end -->
                            <!-- single product -->
                            <div class="item-product">
                                <div class="product-miniature js-product-miniature">
                                    <div class="img_block">
                                        <a href="{{route('productDetails')}}" class="thumbnail product-thumbnail">
                                            <img src="{{asset('assets/images/product/9.webp')}}" alt="harosa product">
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
                            <!-- single product end -->
                            <!-- single product -->
                            <div class="item-product">
                                <div class="product-miniature js-product-miniature">
                                    <div class="img_block">
                                        <a href="{{route('productDetails')}}" class="thumbnail product-thumbnail">
                                            <img src="{{asset('assets/images/product/10.webp')}}" alt="harosa product">
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
function changeQty(val) {
  const qtyInput = document.getElementById('qty');
  let current = parseInt(qtyInput.value);
  current = isNaN(current) ? 1 : current;
  current += val;
  if (current < 1) current = 1;
  qtyInput.value = current;
}
</script>
@endsection