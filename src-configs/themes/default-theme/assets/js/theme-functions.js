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

    $('#featured-book-slider-off').slick({
        slidesToShow: 1,
        // centerMode: true,
        variableWidth: true,
        arrows:true,
        dots:true,
        // fade: true,
    });

    function animateFeaturedBookSection() {
        const sectionSelector = '#featured-book';
        const sliderSelector = '#featured-book .h-scroll';

        let sliderOffsetX = 0;
        let isSliderReachedToTheEnd = false;
        let horizontalSlidingMode = false;

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

            console.log('enableHorizontalSliding');
            $('html, body').css({
                overflow: 'hidden'
            });

            window.addEventListener(
                'wheel',
                wheelHandler,
                { passive: false }
            );
        }


        // function isSliderReachedToTheStart(deltaY){
        //     return sliderOffsetX <= 0 && deltaY < 0;
        // }

        // function isSliderReachedToTheEnd(maxOffset, deltaY){
        //     return sliderOffsetX >= maxOffset && deltaY > 0;
        // }

        function disableHorizontalSliding() {
            if (!horizontalSlidingMode) {
                return;
            }

            horizontalSlidingMode = false;

            $('html, body').css({
                overflow: ''
            });

            window.removeEventListener(
                'wheel',
                wheelHandler
            );
        }

        function wheelHandler(e) {
            const maxOffset = getMaxOffset();

            // Already at the end -> restore normal scrolling
            if (sliderOffsetX >= maxOffset && e.deltaY > 0) {
                console.log('disableHorizontalSliding 01');
                disableHorizontalSliding();
                isSliderReachedToTheEnd = true;
                return;
            }

            // Already at the beginning -> restore normal scrolling
            if (sliderOffsetX <= 0 && e.deltaY < 0) {
                console.log('disableHorizontalSliding 02');
                disableHorizontalSliding();
                return;
            }

            e.preventDefault();

            isSliderReachedToTheEnd = false;

            sliderOffsetX += e.deltaY;

            sliderOffsetX = Math.max(0, Math.min(sliderOffsetX, maxOffset));

            $(sliderSelector).css({
                transform: `translateX(${-sliderOffsetX}px)`
            });
        }

        function isSectionInViewPort() {
            const scrollTop = $(window).scrollTop();
            const sectionTop = $(sectionSelector).offset().top;
            const heightOfHalfScreen = $(window).height() / 2;     

            return scrollTop + heightOfHalfScreen >= sectionTop && scrollTop + heightOfHalfScreen <= sectionTop + heightOfHalfScreen;
        }

        $(window).on('scroll.featuredBook', function () {
            if (horizontalSlidingMode) {
                return;
            }

            const scrollTop = $(window).scrollTop();
            const sectionTop = $(sectionSelector).offset().top;

            // Activate when section reaches top just once
            if (isSectionInViewPort() && !horizontalSlidingMode && !isSliderReachedToTheEnd) {
                horizontalSlidingMode = true;
                enableHorizontalSliding();
                $("html, body").animate({ 
                    scrollTop: $(sectionSelector).offset().top 
                }, 100);
                
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
    animateFeaturedBookSection();

})