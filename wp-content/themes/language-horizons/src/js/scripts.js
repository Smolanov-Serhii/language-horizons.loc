$(document).ready(function () {

    // AOS.init({
    //     // Global settings:
    //     disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
    //     startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
    //     initClassName: 'aos-init', // class applied after initialization
    //     animatedClassName: 'aos-animate', // class applied on animation
    //     useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
    //     disableMutationObserver: false, // disables automatic mutations' detections (advanced)
    //     debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
    //     throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)
    //     // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
    //     offset: 50, // offset (in px) from the original trigger point
    //     delay: 0, // values from 0 to 3000, with step 50ms
    //     duration: 1000, // values from 0 to 3000, with step 50ms
    //     easing: 'ease', // default easing for AOS animations
    //     once: false, // whether animation should happen only once - while scrolling down
    //     mirror: false, // whether elements should animate out while scrolling past them
    //     anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation
    //
    // });

    var $menu = $("header");
    $(window).scroll(function() {
        var winScrollTop = $(this).scrollTop();
        if ( $(this).scrollTop() > 20 && $menu.hasClass("default")){
            $menu.removeClass("default").addClass("moved");
        } else if($(this).scrollTop() <= 20 && $menu.hasClass("moved")) {
            $menu.removeClass("moved").addClass("default");
        }
    });
    if ($(".header__popup").length){
        document.addEventListener( 'wpcf7mailsent', function( event ) {
            $('.header__popup').fadeIn(300);
        }, false );
        $( ".header__popup-close" ).on( "click", function() {
            $('.header__popup').fadeOut(300);
        } );
    };

    $(".header__burger").click(function () {
        $('.header').toggleClass('burger');
        $('.header__wrapper').toggleClass('active');
        $('body').toggleClass('locked');
    });
    $(".header__close").click(function () {
        $('.header__wrapper').removeClass('active');
        $('.header').removeClass('burger');
        $('body').removeClass('locked');
    });
    const div = document.querySelector( '.header');

    document.addEventListener( 'click', (e) => {
        const withinBoundaries = e.composedPath().includes(div);
        if ( ! withinBoundaries ) {
            $('.header__wrapper').removeClass('active');
            $('.header').removeClass('burger');
            $('body').removeClass('locked');
        }
    })
    function RevSlider(){
        var MarketSlider = new Swiper(".reviews .swiper", {
            slidesPerView: 3,
            spaceBetween: 30,
            pagination: {
                el: '.reviews .swiper-pagination',
                clickable: true,
            },
            loop: true,
            breakpoints: {
                '320': {
                    slidesPerView: 1,
                    spaceBetween: 10,
                },
                '500': {
                    slidesPerView: 2,
                    spaceBetween: 10,
                },
                '768': {
                    slidesPerView: 2,
                    spaceBetween: 10,
                },
                '1024': {
                    slidesPerView: 3,
                    spaceBetween: 20,
                },
            },
        });
    }
    if ($('.reviews').length) {
        RevSlider();
    }

    function FaqClick(){
        if($('.faq').length){
            $(".faq__item-title, .faq__item svg").click(function() {
                if ($(this).closest('.faq__item').hasClass('active')){
                    $(this).closest('.faq__item').removeClass("active");
                    $(this).closest('.faq').find('.faq__item-desc').fadeOut(300);
                } else {
                    $(this).closest('.faq').find('.faq__item').removeClass("active");
                    $(this).closest('.faq').find('.faq__item-desc').fadeOut(300);
                    $(this).closest('.faq__item').find('.faq__item-desc').fadeIn(300);
                    $(this).closest('.faq__item').addClass("active");
                }
            });
        }
    }
    FaqClick();

});

