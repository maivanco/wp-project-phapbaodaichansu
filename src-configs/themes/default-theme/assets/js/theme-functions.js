jQuery(document).ready(function ($) {

    $('#hero-carousel').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: false,
        autoplaySpeed: 2000,
        arrows:true,
        dots:false,
        fade: true,
        prevArrow: '<button type="button" class="slick-prev"><i class="fa-solid fa-chevron-left"></i></button>',
        nextArrow: '<button type="button" class="slick-next"><i class="fa-solid fa-chevron-right"></i></button>',
    });

    $('#featured-book-slider').slick({
        speed: 20000,
        autoplay: true,
        autoplaySpeed: 200,
        cssEase: 'linear',
        slidesToShow: 1,
        slidesToScroll: 1,
        variableWidth: true,
        arrows: false,
        dots: true
    });

    $('.sec-product-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        fade: true,
        arrows: true,
        dots: false,
        prevArrow: '<button type="button" class="slick-prev bg-gold"><i class="fa-solid fa-chevron-left"></i></button>',
        nextArrow: '<button type="button" class="slick-next bg-gold"><i class="fa-solid fa-chevron-right"></i></button>',
    });

    $('#toggle-featured-book-content').click(function(){
        $('#featured-book .wysiwyg').toggleClass('open');
        $(this).toggleClass('bg-[#23307f] bg-[#e73f5c]');
        $(this).find('i').toggleClass('fa-chevron-right fa-chevron-left');
    });


    
    
    // Cart Popup Logic
    $('.toggle-cart').on('click', function(e) {
        e.preventDefault();
        $('#cart-popup-overlay').removeClass('hidden').addClass('opacity-100').removeClass('opacity-0');
        $('#cart-popup').removeClass('translate-x-full');
        $('body').addClass('overflow-hidden');
    });

    $('#close-cart-popup, #cart-popup-overlay').on('click', function(e) {
        e.preventDefault();
        $('#cart-popup').addClass('translate-x-full');
        $('#cart-popup-overlay').removeClass('opacity-100').addClass('opacity-0');
        setTimeout(() => {
            $('#cart-popup-overlay').addClass('hidden');
        }, 300);
        $('body').removeClass('overflow-hidden');
    });

    // Show Cart Popup after adding to cart
    $(document.body).on('added_to_cart', function(event, fragments, cart_hash, $button) {
        $('#cart-popup-overlay').removeClass('hidden').addClass('opacity-100').removeClass('opacity-0');
        $('#cart-popup').removeClass('translate-x-full');
        $('body').addClass('overflow-hidden');
    });

    // Mini Cart Quantity Update
    $(document).on('change', '.woocommerce-mini-cart .mini-cart-qty', function() {
        var $input = $(this);
        var cart_item_key = $input.closest('.quantity-wrapper').data('cart_item_key');
        var cart_item_qty = $input.val();
        var $cartPopup = $('#cart-popup');
        
        $cartPopup.addClass('opacity-50 pointer-events-none'); 

        $.ajax({
            type: 'POST',
            url: (typeof wc_cart_fragments_params !== 'undefined') ? wc_cart_fragments_params.ajax_url : '/wp-admin/admin-ajax.php',
            data: {
                action: 'update_mini_cart_item_qty',
                cart_item_key: cart_item_key,
                cart_item_qty: cart_item_qty
            },
            success: function(response) {
                if (response && response.fragments) {
                    $.each(response.fragments, function(key, value) {
                        $(key).replaceWith(value);
                    });
                    $(document.body).trigger('wc_fragments_refreshed');
                }
                $cartPopup.removeClass('opacity-50 pointer-events-none');
            },
            error: function() {
                $cartPopup.removeClass('opacity-50 pointer-events-none');
            }
        });
    });

})