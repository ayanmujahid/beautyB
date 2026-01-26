<!-- footer start -->
<footer id="footer">
    <div class="footer-container">
        <div class="footer-top">
            <div class="container">
                <div class="ft_newsletter">
                    <div id="block-newsletter-label">
                        <div class="title-newsletter">
                            <h2>Newsletter sign up</h2>
                            <p class="desc">(Get 30% OFF coupon today subscibers)</p>
                        </div>
                    </div>
                    <form action="{{route('newsletterSubmit')}}" method="POST">
                        @csrf
                        <input class="btn btn-primary float-xs-right hidden-xs-down" name="submitNewsletter"
                            value="Subscribe" type="submit">
                        <div class="input-wrapper">
                            <input name="email" value="" placeholder="Your email address"
                                aria-labelledby="block-newsletter-label" type="text">
                        </div>
                    </form>
                </div>
                {{-- <div class="pos_logo product_block_container">
                            <div class="logo-slider owl-carousel pos_content">
                                <div class="item-banklogo">
                                    <a href="#">
                                        <img src="assets/images/brand/1.webp" alt="harosa brand logo">
                                    </a>
                                </div>
                                <div class="item-banklogo">
                                    <a href="#">
                                        <img src="assets/images/brand/2.webp" alt="harosa brand logo">
                                    </a>
                                </div>
                                <div class="item-banklogo">
                                    <a href="#">
                                        <img src="assets/images/brand/3.webp" alt="harosa brand logo">
                                    </a>
                                </div>
                                <div class="item-banklogo">
                                    <a href="#">
                                        <img src="assets/images/brand/4.webp" alt="harosa brand logo">
                                    </a>
                                </div>
                                <div class="item-banklogo">
                                    <a href="#">
                                        <img src="assets/images/brand/5.webp" alt="harosa brand logo">
                                    </a>
                                </div>
                                <div class="item-banklogo">
                                    <a href="#">
                                        <img src="assets/images/brand/6.webp" alt="harosa brand logo">
                                    </a>
                                </div>
                                <div class="item-banklogo">
                                    <a href="#">
                                        <img src="assets/images/brand/1.webp" alt="harosa brand logo">
                                    </a>
                                </div>
                                <div class="item-banklogo">
                                    <a href="#">
                                        <img src="assets/images/brand/2.webp" alt="harosa brand logo">
                                    </a>
                                </div>
                            </div>
                        </div> --}}
            </div>
        </div>

        <!-- footer main -->
        <div class="footer-main">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-lg-3 links footer_block">
                        <h3>Contact Infor</h3>
                        <div class="footer-contact">
                            <p class="address add">123 Main Street, Anytown, CA 12345 - USA.</p>
                            <p class="phone add">0314-2957246</p>
                            <p class="email add"><a href="#">yourmail@domain.com</a></p>
                            <p class="time add">Working time: 9.00 -21.00</p>
                        </div>
                        <div class="social_follow">
                            <ul>
                                <li class="facebook"><a href="#" target="_blank">Facebook</a></li>
                                <li class="twitter"><a href="#" target="_blank">Twitter</a></li>
                                <li class="youtube"><a href="#" target="_blank">YouTube</a></li>
                                <li class="googleplus"><a href="#" target="_blank">Google +</a></li>
                                <li class="instagram"><a href="#" target="_blank">Instagram</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 links footer_block">
                        <h3 class="hidden-sm-down">Products</h3>
                        <ul class="footer_list">
                            <li><a href="#">Prices drop</a></li>
                            <li><a href="#">New products</a></li>
                            <li><a href="#">Best sales</a></li>
                            <li><a href="#">Stores</a></li>
                            <li><a href="#">Login</a></li>
                            <li><a href="#">My account</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-lg-3 links footer_block">
                        <h3 class="hidden-sm-down">Our company</h3>
                        <ul class="footer_list">
                            <li><a href="#">Delivery</a></li>
                            <li><a href="#">Legal Notice</a></li>
                            <li><a href="#">Terms and conditions of use</a></li>
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Secure payment</a></li>
                            <li><a href="#">Contact us</a></li>
                        </ul>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- footer main end -->

    </div>

    <!-- footer copyright area -->
    <div class="footer-copyright-area">
        <div class="container">
            <div class="copyright-inner">
                <div class="row justify-content-between row-cols-1 row-cols-md-2">
                    <div class="col">
                        <p>&copy; 2026 <span> Beauty B Store </span> Made with <i class="fa fa-heart"></i> by <a
                                href="https://designatrix.com/">Designatrix</a></p>
                    </div>
                    <div class="col text-md-end">
                        <img src="{{asset('assets/images/icons/payment-icon.webp')}}" alt="payment icon">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer copyright area end -->

</footer>
<!-- footer end -->

<!-- QUICKVIEW PRODUCT START -->
<div id="quickview-wrapper">
    <div class="modal fade" id="product_modal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-close-btn text-end p-2">
                    <button class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="single-product-page-area">
                        <div class="row">
                            <!-- Images Column -->
                            <div class="col-md-6">
                                <div class="images-container">
                                    <!-- Main Image -->
                                    <div class="product-cover mb-3">
                                        <img class="product-modal-image w-100" src="" alt="Product Image">
                                    </div>
                                    <!-- Thumbnails -->
                                    <div class="thumb-container">
                                        <ul class="nav nav-tabs product-thumbnails list-unstyled d-flex gap-2">
                                            <!-- Thumbnails injected via jQuery -->
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Product Info Column -->
                            <div class="col-md-6">
                                <h1 class="h1 namne_details"></h1>
                                <p class="reference">Reference: <span class="product-reference"></span></p>
                                <div class="product-prices mb-3">
                                    <div class="product-discount">
                                        <span class="regular-price"></span>
                                    </div>
                                    <div class="product-price h5 has-discount">
                                        <div class="current-price">
                                            <span class="discounted-price"></span>
                                            <span class="discount discount-percentage"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-information mb-3">
                                    <div class="product-desc">
                                        <p class="product-description"></p>
                                    </div>
                                </div>
                                <div class="product-actions">
                                    <form action="#">
                                        <div class="product-add-to-cart mb-2">
                                            <span class="control-label">Quantity</span>
                                            <div class="box-quantity d-flex gap-2">
                                                <input class="quantity form-control" min="1" value="1"
                                                    type="number">
                                                <a class="add-cart btn btn-primary" data-id="{{ $product->id }}"
                                                    href="#"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single product area -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- QUICKVIEW PRODUCT END -->



</div>
<!-- Body main wrapper end -->

</body>
