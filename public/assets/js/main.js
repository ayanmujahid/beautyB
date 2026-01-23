/* Theme JS */

(function ($) {
    "use strict";

    /*--
       Off Canvas Menu
   -----------------------------------*/
    /*Variables*/
    var $offCanvasNav = $('.canvas-menu'),
        $offCanvasNavSubMenu = $offCanvasNav.find('.sub-menu, .mega-sub-menu, .menu-item ');

    /*Add Toggle Button With Off Canvas Sub Menu*/
    $offCanvasNavSubMenu.parent().prepend('<span class="mobile-menu-expand"></span>');

    /*Close Off Canvas Sub Menu*/
    $offCanvasNavSubMenu.slideUp();

    /*Category Sub Menu Toggle*/
    $offCanvasNav.on('click', 'li a, li .mobile-menu-expand, li .menu-title', function (e) {
        var $this = $(this);
        if (($this.parent().attr('class').match(/\b(menu-item-has-children|has-children|has-sub-menu)\b/)) && ($this.attr('href') === '#' || $this.hasClass('mobile-menu-expand'))) {
            e.preventDefault();
            if ($this.siblings('ul:visible').length) {
                $this.parent('li').removeClass('active-expand');
                $this.siblings('ul').slideUp();
            } else {
                $this.parent('li').addClass('active-expand');
                $this.closest('li').siblings('li').find('ul:visible').slideUp();
                $this.closest('li').siblings('li').removeClass('active-expand');
                $this.siblings('ul').slideDown();
            }
        }
    });

    $(".sub-menu, .mega-sub-menu, .menu-item").parent("li").addClass("menu-item-has-children");
    $(".mega-sub-menu").parent("li").css("position", "static");



    /* ----------------------------------------------
        nice-select-menu
    ---------------------------------------------- */
    $('.nice-select-menu').niceSelect();
    /*----------------------------
    4.1 Vertical-Menu Activation
    -----------------------------*/
    $('.categorie-title').on('click', function () {
        $('.categori-menu-list').slideToggle();
    });
    /* -------------------------------------------------------------
        nivoSlider
    -------------------------------------------------------------  */
    $('#mainSlider').nivoSlider({
        manualAdvance: true,
        directionNav: true,
        animSpeed: 500,
        slices: 18,
        pauseTime: 5000,
        pauseOnHover: false,
        controlNav: false,
        prevText: '<i class="fa fa-angle-left nivo-prev-icon"></i>',
        nextText: '<i class="fa fa-angle-right nivo-next-icon"></i>'
    });
    /* ----------------------------------------------
        Round product 
    ---------------------------------------------- */
    $('.block_content').owlCarousel({
        loop: true,
        dots: false,
        nav: true,
        navText: ["prev", "next"],
        autoplay: false,
        autoplayTimeout: 5000,
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        item: 3,
        margin: 30,
        responsive: {
            0: {
                items: 1
            },
            480: {
                items: 2
            },
            768: {
                items: 2
            },
            992: {
                items: 3
            }
        }
    })
    /* ----------------------------------------------
        productTabContent0 product 
    ---------------------------------------------- */
    $('.productTabContent0').owlCarousel({
        loop: true,
        dots: false,
        nav: true,
        navText: ["prev", "next"],
        autoplay: false,
        autoplayTimeout: 5000,
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        item: 4,
        margin: 30,
        responsive: {
            0: {
                items: 1
            },
            480: {
                items: 2
            },
            768: {
                items: 3
            },
            992: {
                items: 4
            }
        }
    })
    /* ----------------------------------------------
        productTabContent1 product 
    ---------------------------------------------- */
    $('.productTabContent1').owlCarousel({
        loop: true,
        dots: false,
        nav: true,
        navText: ["prev", "next"],
        autoplay: false,
        autoplayTimeout: 5000,
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        item: 6,
        margin: 30,
        responsive: {
            0: {
                items: 1
            },
            480: {
                items: 2
            },
            768: {
                items: 3
            },
            992: {
                items: 4
            },
            1170: {
                items: 6
            }
        }
    })
    /* ----------------------------------------------
        productTabContent0 product 
    ---------------------------------------------- */
    $('.productTabContent2').owlCarousel({
        loop: true,
        dots: false,
        nav: true,
        navText: ["prev", "next"],
        autoplay: false,
        autoplayTimeout: 5000,
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        item: 3,
        margin: 30,
        responsive: {
            0: {
                items: 1
            },
            480: {
                items: 2
            },
            768: {
                items: 3
            },
            992: {
                items: 3
            }
        }
    })
    /* ----------------------------------------------
        feature-item product 
    ---------------------------------------------- */
    $('.feature-item').owlCarousel({
        loop: true,
        dots: false,
        nav: true,
        navText: ["prev", "next"],
        autoplay: false,
        autoplayTimeout: 5000,
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        item: 1,
        responsive: {
            0: {
                items: 1
            },
            480: {
                items: 1
            },
            768: {
                items: 1
            },
            992: {
                items: 1
            },
            1170: {
                items: 1
            }
        }
    })
    /* ----------------------------------------------
        Testimonial 
    ---------------------------------------------- */
    $(".testimonialsSlide").owlCarousel({
        autoplay: true,
        autoplayHoverPause: true,
        smartSpeed: 1000,
        nav: false,
        dots: true,
        responsiveClass: true,
        navText: ["prev", "next"],
        responsive: {
            0: {
                items: 1
            },
            480: {
                items: 1
            },
            768: {
                items: 1
            },
            992: {
                items: 1
            },
            1200: {
                items: 1
            }
        }
    })


    /* ----------------------------------------------
        Special Products 
    ---------------------------------------------- */
    $('.special-item').owlCarousel({
        loop: true,
        dots: false,
        nav: true,
        navText: ["prev", "next"],
        autoplay: false,
        autoplayTimeout: 5000,
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        item: 2,
        margin: 30,
        responsive: {
            0: {
                items: 1
            },
            480: {
                items: 1
            },
            768: {
                items: 2
            },
            992: {
                items: 2
            }
        }
    })
    /* ----------------------------------------------
        Special Products 
    ---------------------------------------------- */
    $('.special-item1').owlCarousel({
        loop: true,
        dots: false,
        nav: true,
        navText: ["prev", "next"],
        autoplay: false,
        autoplayTimeout: 5000,
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        item: 1,
        responsive: {
            0: {
                items: 1
            },
            480: {
                items: 1
            },
            768: {
                items: 1
            },
            992: {
                items: 1
            }
        }
    })
    /* ----------------------------------------------
        blog slider
    ---------------------------------------------- */
    $('.blog_slider').owlCarousel({
        loop: true,
        dots: false,
        margin: 30,
        nav: true,
        navText: ["prev", "next"],
        autoplay: false,
        autoplayTimeout: 5000,
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        item: 3,
        margin: 30,
        responsive: {
            0: {
                items: 1
            },
            480: {
                items: 1
            },
            768: {
                items: 2
            },
            992: {
                items: 3
            }
        }
    })
    /* ----------------------------------------------
        brand logo
    ---------------------------------------------- */
    $('.logo-slider').owlCarousel({
        autoPlay: true,
        smartSpeed: 1000,
        autoplayHoverPause: true,
        nav: true,
        dots: false,
        navText: ["prev", "next"],
        responsive: {
            0: {
                items: 2,
            },
            480: {
                items: 3,
            },
            768: {
                items: 4,
                nav: false,
            },
            992: {
                items: 5,
            },
            1200: {
                items: 6,
            }
        }
    })

    /* ----------------------------------------------
        gallery-post active
    ---------------------------------------------- */
    $('.gallery-post').owlCarousel({
        autoplay: false,
        autoplayTimeout: 5000,
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        loop: true,
        dots: false,
        nav: false,
        navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
        item: 1,
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    })

    /* ----------------------------------------------
        Countdown 
    ---------------------------------------------- */
    $('[data-countdown]').each(function () {
        var $this = $(this), finalDate = $(this).data('countdown');
        $this.countdown(finalDate, function (event) {
            $this.html(event.strftime('<span class="cdown days"><span class="time-count">%-D</span> <p>Days</p></span> <span class="cdown hour"><span class="time-count">%-H</span> <p>Hour</p></span> <span class="cdown minutes"><span class="time-count">%M</span> <p>Mint</p></span> <span class="cdown second"> <span><span class="time-count">%S</span> <p>Sec</p></span>'));
        });
    });

    $(".search-icon").on("click", function () {
        $("#search_widget").toggle();
    });



    /* ----------------------------------------------
        slider-carousel-active
    ---------------------------------------------- */

    /* ----------------------------------------------
        product popup
    ---------------------------------------------- */
    $('.product-popup').magnificPopup({
        delegate: 'a', // child items selector, by clicking on it popup will open
        type: 'image'
        // other options
    });



    /*--------------------------
    tab active
    ---------------------------- */
    $('.product-details-small a').on('click', function (e) {
        e.preventDefault();

        var $href = $(this).attr('href');

        $('.product-details-small a').removeClass('active');
        $(this).addClass('active');

        $('.product-details-large .tab-pane').removeClass('active');
        $('.product-details-large ' + $href).addClass('active');
    })

    /* ----------------------------------------------
        Tooltip
    ---------------------------------------------- */
    // $('[rel="tooltip"]').tooltip(); 



    /* ********************************************
        13. Cart Plus Minus Button
    ******************************************** */
    $(".cart-plus-minus").prepend('<div class="dec qtybutton">-</div>');
    $(".cart-plus-minus").append('<div class="inc qtybutton">+</div>');
    $(".qtybutton").on("click", function () {
        var $button = $(this);
        var oldValue = $button.parent().find("input").val();
        if ($button.text() == "+") {
            var newVal = parseFloat(oldValue) + 1;
        }
        else {
            // Don't allow decrementing below zero
            if (oldValue > 0) {
                var newVal = parseFloat(oldValue) - 1;
            }
            else {
                newVal = 0;
            }
        }
        $button.parent().find("input").val(newVal);
    });

    /*-- Price Range --*/
    $('#price-range').slider({
        range: true,
        min: 0,
        max: 700,
        values: [0, 700],
        slide: function (event, ui) {
            $('.price-amount').val('$' + ui.values[0] + ' - $' + ui.values[1]);
        }
    });
    $('.price-amount').val('$' + $('#price-range').slider('values', 0) +
        ' - $' + $('#price-range').slider('values', 1));
    $('.product-filter-toggle').on('click', function () {
        $('.product-filter-wrapper').slideToggle();
    })

    /* ---------------------------
    11. FAQ Accordion Active
    * ---------------------------*/
    $('.panel-heading a').on('click', function () {
        $('.panel-default').removeClass('show');
        $(this).parents('.panel-default').addClass('show');
    });


    /* CounterUp Active */
    $('.counter').counterUp({
        delay: 10,
        time: 1000
    });


    /*--
        Isotop with ImagesLoaded
    -----------------------------------*/
    var isotopFilter = $('.isotop-filter');
    var isotopGrid = $('.isotop-grid');
    var isotopGridMasonry = $('.isotop-grid-masonry');
    var isotopGridItem = '.isotop-item';
    /*-- Images Loaded --*/
    isotopGrid.imagesLoaded(function () {
        /*-- Filter List --*/
        isotopFilter.on('click', 'button', function () {
            isotopFilter.find('button').removeClass('active');
            $(this).addClass('active');
            var filterValue = $(this).attr('data-filter');
            isotopGrid.isotope({ filter: filterValue });
        });
        /*-- Filter Grid Layout FitRows --*/
        isotopGrid.isotope({
            itemSelector: isotopGridItem,
            layoutMode: 'fitRows',
            masonry: {
                columnWidth: 1,
            }
        });
        /*-- Filter Grid Layout Masonary --*/
        isotopGridMasonry.isotope({
            itemSelector: isotopGridItem,
            layoutMode: 'masonry',
            masonry: {
                columnWidth: 1,
            }
        });
    });

    /*-- Image --*/
    var imagePopup = $('.image-popup');
    imagePopup.magnificPopup({
        type: 'image',
    });

    $('iframe[src*="youtube"]').parent().fitVids();

    /*--------------------------
     ScrollUp
    ---------------------------- */
    $.scrollUp({
        scrollText: '<i class="ion-arrow-up-c"></i>',
        easingType: 'linear',
        scrollSpeed: 900,
        animation: 'fade'
    });

    // --------------------------------------------MODAL VALUES---------------------------------------

    $(document).ready(function () {
        $('.quick_view').on('click', function () {
            var product = {
                id: $(this).data('id'),
                name: $(this).data('name'),
                price: parseFloat($(this).data('price')),
                discounted_price: parseFloat($(this).data('discounted_price')),
                description: $(this).data('description'),
                image: $(this).data('image'),
                gallery: $(this).data('gallery') || [] // array of URLs
            };

            // Update product info
            $('#product_modal .namne_details').text(product.name);
            // Update product info
            $('#product_modal .regular-price').text('PKR ' + product.discounted_price.toFixed(2)); // discounted shown as "regular"
            $('#product_modal .discounted-price').text('PKR ' + product.price.toFixed(2)); // original price shown as "sale"


            let discountPercent = 0;
            if (product.price > product.discounted_price) {
                discountPercent = Math.round(((product.price - product.discounted_price) / product.price) * 100);
                $('#product_modal .discount-percentage').text('Save ' + discountPercent + '%').show();
            }
            $('#product_modal .discount-percentage').text('Save ' + discountPercent + '%');

            $('#product_modal .product-description').text(product.description);
            $('#product_modal .product-modal-image').attr('src', product.image);

            // Update Add to Cart link
            $('#product_modal .add-cart').attr('href', '/cart?product_id=' + product.id);

            // Populate thumbnails
            const thumbContainer = $('#product_modal .product-thumbnails');
            thumbContainer.empty();

            // Main image first
            thumbContainer.append(`<li><img src="${product.image}" class="img-thumbnail thumb-item" style="width:60px; cursor:pointer;"></li>`);

            // Add all gallery images
            product.gallery.forEach(function (url) {
                thumbContainer.append(`<li><img src="${url}" class="img-thumbnail thumb-item" style="width:60px; cursor:pointer;"></li>`);
            });

            // Click on thumbnail to change main image
            $('.thumb-item').off('click').on('click', function () {
                var src = $(this).attr('src');
                $('#product_modal .product-modal-image').attr('src', src);
            });
        });
    });

    // --------------------------------------------MODAL VALUES---------------------------------------


    // --------------------------------------------Cart VALUES---------------------------------------

    $(document).ready(function () {

        // CSRF for all AJAX
        $.ajaxSetup({
            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
        });

        // Fetch cart dropdown
        function refreshCart() {
            $.get('/cart/data', function (res) {
                if (!res.cart) return;

                const cartList = $('.header-cart > ul');
                cartList.empty();

                $('#cart-count').text('(' + res.cart_count + ')');
                $('.header-cart #cart-total').text('Rs' + parseFloat(res.cart_total).toFixed(2));


               res.cart.forEach(item => {
    // Ensure full URL for image
    let imageUrl = item.image.startsWith('http') ? item.image : window.location.origin + '/storage/' + item.image;

    cartList.append(`
                <li>
                    <div class="img_content">
                        <img class="product-image img-responsive" src="${imageUrl}" alt="${item.name}">
                        <span class="product-quantity">${item.quantity}x</span>
                    </div>
                    <div class="right_block">
                        <span class="product-name">${item.name}</span>
                        <span class="product-price">Rs${parseFloat(item.price).toFixed(2)}</span>
                        <a href="#" class="remove-from-cart" data-id="${item.id}">
                            <i class="fa fa-remove"></i>
                        </a>
                    </div>
                </li>
            `);
                });
            });
        }


        refreshCart();

        // Add to cart
        $(document).on('click', '.add-cart', function (e) {
            e.preventDefault();
            const productId = $(this).data('id');
            const quantity = parseInt($(this).closest('.product-actions').find('.quantity').val()) || 1;
            const attributes = $(this).closest('form').serializeArray();

            let attrData = {};
            attributes.forEach(attr => {
                if (attr.name.startsWith('group')) {
                    attrData[attr.name] = attr.value;
                }
            });

            $.post('/cart/add', { product_id: productId, quantity: quantity, attributes: attrData }, function (res) {
                if (res.success) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Added to cart successfully!',
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 1500
                    });
                    refreshCart();
                } else {
                    Swal.fire('Oops', 'Something went wrong. Please try again.', 'error');
                }
            });
        });

        // Remove from cart
        $(document).on('click', '.remove-from-cart', function (e) {
            e.preventDefault();
            const productId = $(this).data('id');
            $.post('/cart/remove', { product_id: productId }, function (res) {
                if (res.success) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Removed from cart',
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 1500
                    });
                    refreshCart();
                } else {
                    Swal.fire('Oops', 'Could not remove product.', 'error');
                }
            });
        });

    });



    // --------------------------------------------Cart VALUES---------------------------------------



})(jQuery);


