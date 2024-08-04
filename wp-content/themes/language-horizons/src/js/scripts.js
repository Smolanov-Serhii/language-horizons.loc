$(document).ready(function () {
    if (window.innerWidth > 1024) {
        const ToRight = gsap.utils.toArray('.to-right, .to-left, .to-up');
        ToRight.forEach(ToRightIn => {
            gsap.to(ToRightIn, {
                scrollTrigger: {
                    trigger: ToRightIn,
                    start: "top 95%",
                    toggleClass: "aos-animate",
                    once: false,
                    scrub: false
                },
            })
        });

        const ToElse = gsap.utils.toArray('.to-right-else, .to-left-else, .to-up-else');
        ToElse.forEach(ToElseIn => {
            gsap.to(ToElseIn, {
                scrollTrigger: {
                    trigger: ToElseIn,
                    start: "bottom 140%",
                    toggleClass: "aos-animate",
                    once: false,
                    scrub: false
                },
            })
        });
        $('img').bind('contextmenu', function(e) {
            return false;
        });
        const ToElseTwo = gsap.utils.toArray('.to-right-else-two, .to-left-else-two, .to-up-else-two');
        ToElseTwo.forEach(ToElseInTwo => {
            gsap.to(ToElseInTwo, {
                scrollTrigger: {
                    trigger: ToElseInTwo,
                    start: "bottom 180%",
                    toggleClass: "aos-animate",
                    once: false,
                    scrub: false
                },
            })
        });
    } else {
        $('.to-right, .to-left, .to-up, .to-right-else, .to-left-else, .to-up-else, .to-right-else-two, .to-left-else-two, .to-up-else-two').addClass('aos-animate')
    }
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
        console.log('clisk')
        $('.header').toggleClass('burger');
        $('.header__wrapper').toggleClass('active');
        $('body').addClass('locked');
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

    function BannerSlider(){
        var BannerSlider = new Swiper(".banner .swiper", {
            slidesPerView: 1,
            spaceBetween: 0,
            effect: "fade",
            speed: 300,
            loop: true,
            autoplay: {
                enabled: true,
                delay: 3000,
                disableOnInteraction: false,
                autoplayDisableOnInteraction: false
            },
            navigation: {
                nextEl: ".banner .swiper-button-next",
                prevEl: ".banner .swiper-button-prev",
            },
            pagination: {
                el: ".banner .swiper-pagination",
                clickable: true,
            },
        });
    }
    if ($('.banner').length) {
        BannerSlider();
    }


    function MarketSlider(){
        var MarketSlider = new Swiper(".market .swiper", {
            speed: 300,
            autoplay: {
                enabled: true,
                delay: 2000,
                disableOnInteraction: false,
                autoplayDisableOnInteraction: false
            },
            navigation: {
                nextEl: ".market .swiper-button-next",
                prevEl: ".market .swiper-button-prev",
            },
            spaceBetween: 24,
            loop: true,
            breakpoints: {
                '320': {
                    slidesPerView: 1.5,
                    spaceBetween: 10,
                },
                '500': {
                    slidesPerView: 2,
                    spaceBetween: 10,
                },
                '768': {
                    slidesPerView: 2.5,
                    spaceBetween: 10,
                },
                '1024': {
                    slidesPerView: 3,
                    spaceBetween: 20,
                },
                '1400': {
                    slidesPerView: 4,
                    spaceBetween: 24,
                },
                '1600': {
                    slidesPerView: 6,
                    spaceBetween: 24,
                },
                '1800': {
                    slidesPerView: 7,
                    spaceBetween: 24,
                },
            },
        });
    }
    if ($('.market').length) {
        MarketSlider();
    }


    function SliderProductPage(){
        if($('.variate').length){
            var BigSlider = new Swiper ('.swiper-big', {
                slidesPerView: 1,
                centeredSlides: true,
                autoHeight: true,
                effect: "fade",
                pagination: {
                    el: ".swiper-big .swiper-pagination",
                    clickable: true,
                    renderBullet: function (index, className) {
                        var names = [];
                        $(".swiper-big .swiper-slide").each(function(i) {
                            names.push($(this).data("thumb"));
                        });
                        return `<span class="dot swiper-pagination-bullet"><img src="${names[index]}"></span>`;
                    },
                },
            });
            $(".variate__pagination-item").click(function () {
                $(".variate__pagination-item").removeClass('active');
                $(this).addClass('active');
                console.log()
                BigSlider.slideTo($(this).data('index'), 300, true);
            });
        }
    }
    if ($('.variate').length) {
        SliderProductPage();
    }
    function ProductAnimate(){
        if($('.animate').length){
            console.clear();
            /* The encoding is super important here to enable frame-by-frame scrubbing. */

// ffmpeg -i ~/Downloads/Toshiba\ video/original.mov -movflags faststart -vcodec libx264 -crf 23 -g 1 -pix_fmt yuv420p output.mp4
// ffmpeg -i ~/Downloads/Toshiba\ video/original.mov -vf scale=960:-1 -movflags faststart -vcodec libx264 -crf 20 -g 1 -pix_fmt yuv420p output_960.mp4

            const video = document.querySelector(".video-background");
            let src = video.currentSrc || video.src;

            /* Make sure the video is 'activated' on iOS */
            function once(el, event, fn, opts) {
                var onceFn = function (e) {
                    el.removeEventListener(event, onceFn);
                    fn.apply(this, arguments);
                };
                el.addEventListener(event, onceFn, opts);
                return onceFn;
            }

            once(document.documentElement, "touchstart", function (e) {
                video.play();
                video.pause();
            });

            /* ---------------------------------- */
            /* Scroll Control! */

            gsap.registerPlugin(ScrollTrigger);
            let tl = gsap.timeline({
                defaults: { duration: 1 },
                scrollTrigger: {
                    trigger: "#container",
                    start: "top 40%",
                    end: "bottom bottom",
                    scrub: true
                }
            });
            once(video, "loadedmetadata", () => {
                tl.fromTo(
                    video,
                    {
                        currentTime: 0
                    },
                    {
                        currentTime: video.duration || 1
                    }
                );
            });
            /* When first coded, the Blobbing was important to ensure the browser wasn't dropping previously played segments, but it doesn't seem to be a problem now. Possibly based on memory availability? */
            setTimeout(function () {
                if (window["fetch"]) {
                    fetch(src)
                        .then((response) => response.blob())
                        .then((response) => {
                            var blobURL = URL.createObjectURL(response);

                            var t = video.currentTime;
                            once(document.documentElement, "touchstart", function (e) {
                                video.play();
                                video.pause();
                            });

                            video.setAttribute("src", blobURL);
                            video.currentTime = t + 0.01;
                        });
                }
            }, 1000);

            /* ---------------------------------- */


            const boxes = gsap.utils.toArray('.animate__part:first-child');
            boxes.forEach(box => {
                gsap.to(box, {
                    css:{marginBottom:'-45vh'},
                    scrollTrigger: {
                        css:{marginBottom:0},
                        trigger: box,
                        end: "top 60%",
                        once: false,
                        scrub: true
                    },
                })
            });
        }
    }
    if ($('.single-products').length) {
        ProductAnimate();
    }




});

