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

    $('#toggle-featured-book-content').click(function(){
        $('#featured-book .wysiwyg').toggleClass('open');
        $(this).toggleClass('bg-[#23307f] bg-[#e73f5c]');
        $(this).find('i').toggleClass('fa-chevron-right fa-chevron-left');
    });

    function animateFeaturedBookSection() {
        const sectionSelector = '#featured-book';
        const sliderSelector = '#featured-book .h-scroll';

        let sliderOffsetX = 0;
        let horizontalSlidingMode = false;
        let lastScrollTop = $(window).scrollTop();
        let snapLock = false;

        const sliderWidth =
            $('#featured-book-slider .slide').outerWidth(true) *
            $('#featured-book-slider .slide').length;

        $(sliderSelector).css({
            width: sliderWidth + 'px'
        });

        function getMaxOffset() {
            return Math.max(
                0,
                sliderWidth - $(window).width()
            );
        }

        function enableHorizontalSliding() {
            $('html, body').css({
                overflow: 'hidden'
            });

            window.addEventListener(
                'wheel',
                wheelHandler,
                { passive: false }
            );

            horizontalSlidingMode = true;
        }

        function disableHorizontalSliding() {
            if (!horizontalSlidingMode) {
                return;
            }

            $('html, body').css({
                overflow: ''
            });

            window.removeEventListener(
                'wheel',
                wheelHandler
            );

            horizontalSlidingMode = false;
        }

        function wheelHandler(e) {
            const maxOffset = getMaxOffset();

            //
            // User wants to continue scrolling down
            //
            if (
                sliderOffsetX >= maxOffset &&
                e.deltaY > 0
            ) {
                disableHorizontalSliding();

                // small push so native scrolling continues naturally
                window.scrollBy(0, 1);

                return;
            }

            //
            // User wants to continue scrolling up
            //
            if (
                sliderOffsetX <= 0 &&
                e.deltaY < 0
            ) {
                disableHorizontalSliding();

                window.scrollBy(0, -1);

                return;
            }

            e.preventDefault();

            sliderOffsetX += e.deltaY;

            sliderOffsetX = Math.max(
                0,
                Math.min(sliderOffsetX, maxOffset)
            );

            $(sliderSelector).css({
                transform: `translateX(${-sliderOffsetX}px)`
            });
        }

        function shouldTriggerSection(direction) {
            const scrollTop = $(window).scrollTop();

            const sectionTop = $(sectionSelector).offset().top;
            const sectionHeight = $(sectionSelector).outerHeight();

            // trigger at 50% section height
            const triggerPoint =
                sectionTop + (sectionHeight * 0.5);

            const viewportBottom =
                scrollTop + $(window).height();

            if (direction === 'down') {
                return viewportBottom >= triggerPoint;
            }

            if (direction === 'up') {
                return scrollTop <= triggerPoint &&
                    scrollTop >= sectionTop - $(window).height();
            }

            return false;
        }

        function snapToSectionAndEnable() {
            if (horizontalSlidingMode || snapLock) {
                return;
            }

            snapLock = true;

            $('html, body').stop().animate(
                {
                    scrollTop: $(sectionSelector).offset().top
                },
                200,
                function () {
                    enableHorizontalSliding();
                }
            );
        }

        $(window).on('scroll.featuredBook', function () {
            if (horizontalSlidingMode) {
                return;
            }

            const currentScrollTop = $(window).scrollTop();

            const direction =
                currentScrollTop > lastScrollTop
                    ? 'down'
                    : 'up';

            lastScrollTop = currentScrollTop;

            if (shouldTriggerSection(direction)) {
                snapToSectionAndEnable();
            }

            const sectionTop = $(sectionSelector).offset().top;
            const sectionBottom =
                sectionTop +
                $(sectionSelector).outerHeight();

            //
            // reset lock after leaving section
            //
            if (
                currentScrollTop < sectionTop - $(window).height() ||
                currentScrollTop > sectionBottom
            ) {
                snapLock = false;
            }
        });

        $(window).on('resize.featuredBook', function () {
            const maxOffset = getMaxOffset();

            sliderOffsetX = Math.min(
                sliderOffsetX,
                maxOffset
            );

            $(sliderSelector).css({
                transform: `translateX(${-sliderOffsetX}px)`
            });
        });
    }
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