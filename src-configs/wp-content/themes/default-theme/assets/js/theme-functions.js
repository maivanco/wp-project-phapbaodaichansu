jQuery(document).ready(function ($) {

    let headerScripts = function(){
        
        if(!$('#site-header').hasClass('has-special-intro')) {
            return;
        }

        let offsetPointToTrigger = $(window).height() / 2;

        $(window).on('scroll', function(){
            let activeClass = 'opacity-0 h-0';
            if($(this).scrollTop() > offsetPointToTrigger) {
                $('#site-header').removeClass(activeClass);
            }else {
                $('#site-header').addClass(activeClass);
            }
        });
    }
    headerScripts();
    
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

    $('#featured-product-slider').slick({
        speed: 20000,
        autoplay: true,
        autoplaySpeed: 200,
        infinite: true,  
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
        prevArrow: '<button type="button" class="slick-prev"><i class="fa-solid fa-chevron-left"></i></button>',
        nextArrow: '<button type="button" class="slick-next"><i class="fa-solid fa-chevron-right"></i></button>',
    });

    $('#youtube-marquee-slider').slick({
        dots: false,
        arrows: true,
        infinite: true,
        speed: 300,
        slidesToShow: 4,
        prevArrow: '<button type="button" class="slick-prev"><i class="fa-solid fa-chevron-left"></i></button>',
        nextArrow: '<button type="button" class="slick-next"><i class="fa-solid fa-chevron-right"></i></button>',
        responsive: [
            {
                breakpoint: 1600,
                settings: {
                    slidesToShow: 3,
                }
            },
            {
                breakpoint: 1199,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 1,
                }
            }
        ]
    });

    $('#toggle-featured-product-content').click(function(){
        $('#featured-product .wysiwyg').toggleClass('open');
        $(this).toggleClass('bg-[#23307f] bg-[#e73f5c]');
        $(this).find('i').toggleClass('fa-chevron-right fa-chevron-left');
    });
    setTimeout(function(){
        if($(window).width() > 991){
            $('#toggle-featured-product-content').trigger('click');
        }
        
    },3000);


    // Mobile Menu Toggle Logic
    $('#toggle-menu').on('click', function(e) {
        e.preventDefault();
        var $btn = $(this);
        var $mobileMenu = $('#mobile-menu');
        
        $mobileMenu.toggleClass('hidden');
        var isExpanded = !$mobileMenu.hasClass('hidden');
        $btn.attr('aria-expanded', isExpanded);
        $btn.find('.menu-icon-open').toggleClass('hidden', isExpanded);
        $btn.find('.menu-icon-close').toggleClass('hidden', !isExpanded);
    });

    // Close mobile menu when clicking a link inside it
    $('#mobile-menu a').on('click', function() {
        $('#mobile-menu').addClass('hidden');
        $('#toggle-menu').attr('aria-expanded', 'false');
        $('#toggle-menu .menu-icon-open').removeClass('hidden');
        $('#toggle-menu .menu-icon-close').addClass('hidden');
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
        });
    });

    // Quantity Plus/Minus Buttons
    $(document).on('click', '.quantity .minus, .quantity .plus', function(e) {
        e.preventDefault();
        var $btn = $(this);
        var $input = $btn.siblings('.qty');
        if (!$input.length) {
            $input = $btn.closest('.quantity').find('.qty');
        }
        if (!$input.length) return;

        var val = parseFloat($input.val()) || 0;
        var max = parseFloat($input.attr('max'));
        var min = parseFloat($input.attr('min'));
        var step = parseFloat($input.attr('step'));

        if (isNaN(min) || min < 0) min = 1;
        if (isNaN(step) || step <= 0) step = 1;

        if ($btn.hasClass('minus')) {
            if (val > min) {
                var newVal = val - step;
                if (newVal < min) newVal = min;
                $input.val(newVal).trigger('change');
            }
        } else if ($btn.hasClass('plus')) {
            if (isNaN(max) || val < max) {
                var newVal = val + step;
                if (!isNaN(max) && newVal > max) newVal = max;
                $input.val(newVal).trigger('change');
            }
        }
    });

    // Table of Contents Scrollspy & Interactive Navigation
    function initTableOfContents() {
        const $tocLinks = $('.toc-link');
        if (!$tocLinks.length) return;

        const targets = [];
        $tocLinks.each(function () {
            const targetId = $(this).data('target');
            const targetEl = document.getElementById(targetId);
            if (targetEl) {
                targets.push({
                    id: targetId,
                    el: targetEl,
                    $link: $(this)
                });
            }
        });

        if (!targets.length) return;

        let ticking = false;

        function updateActiveHeading() {
            const scrollPos = window.scrollY + 130;
            let current = null;

            for (let i = 0; i < targets.length; i++) {
                const elTop = targets[i].el.getBoundingClientRect().top + window.scrollY;
                if (elTop <= scrollPos) {
                    current = targets[i];
                } else {
                    break;
                }
            }

            if (current) {
                $tocLinks.removeClass('is-active');
                current.$link.addClass('is-active');
            } else if (window.scrollY < 200 && targets.length > 0) {
                $tocLinks.removeClass('is-active');
                targets[0].$link.addClass('is-active');
            }
        }

        $(window).on('scroll resize', function () {
            if (!ticking) {
                window.requestAnimationFrame(function () {
                    updateActiveHeading();
                    ticking = false;
                });
                ticking = true;
            }
        });

        // Initial active link calculation
        updateActiveHeading();

        // Smooth scroll on click
        $tocLinks.on('click', function (e) {
            const targetId = $(this).data('target');
            const targetEl = document.getElementById(targetId);
            if (targetEl) {
                e.preventDefault();
                const offset = 100;
                const bodyRect = document.body.getBoundingClientRect().top;
                const elementRect = targetEl.getBoundingClientRect().top;
                const offsetPosition = elementRect - bodyRect - offset;

                window.scrollTo({
                    top: offsetPosition,
                    behavior: 'smooth'
                });

                if (window.history && window.history.pushState) {
                    window.history.pushState(null, null, '#' + targetId);
                }

                $tocLinks.removeClass('is-active');
                $(this).addClass('is-active');
            }
        });

        // Mobile toggle collapse/expand
        $(document).on('click', '.toc-toggle-btn', function (e) {
            e.preventDefault();
            const $nav = $('.toc-navigation');
            const $icon = $(this).find('svg');
            $nav.slideToggle(200);
            $icon.toggleClass('rotate-180');
        });
    }

    initTableOfContents();

})