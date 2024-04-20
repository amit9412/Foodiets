$(document).ready(function() {
    $('.form-select2').select2();
    $('[data-toggle="tooltip"]').tooltip();

    /****=====  Review JS =====****/
    $(".review-owl").owlCarousel({
        loop:false,
        margin:20,
        dots: true,
        nav:false,
        autoplay:false,
        navSpeed: 2000,
        smartSpeed: 1500,
        responsive:{
            0:{
                items:1
            },
            767:{
                items:1
            },
            991:{
                items:1
            }
        }
    });

    /****=====  Special JS =====****/
    $(".special-owl").owlCarousel({
        loop:false,
        margin:20,
        dots: false,
        nav:true,
        autoplay:false,
        navSpeed: 2000,
        smartSpeed: 1500,
        mouseDrag:false,
        touchDrag:false,
        navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
        responsive:{
            0:{
              items:1
            },
            630:{
              items:2
            },
            992:{
              items:3
            }
        }
    });

    /****=====  Gallery JS =====****/
    $(".gallery-owl").owlCarousel({
        autoplay: true,
        loop: true,
        margin: 10,
        touchDrag: true,
        mouseDrag: true,
        nav: false,
        dots: false,
        autoplayTimeout: 6000,
        autoplaySpeed: 1200,
        responsive: {
            0: {
                items: 1
            },
            480: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 5
            },
            1200: {
                items: 5
            }
        }
    });

    /****=====  Go to Top JS =====****/
    $(function(){
        // Scroll Event
        $(window).on('scroll', function(){
        var scrolled = $(window).scrollTop();
        if (scrolled > 160) $('.back-home').addClass('active');
        if (scrolled < 160) $('.back-home').removeClass('active');
        });  
        // Click Event
        $('.back-home').on('click', function() {
        $("html, body").animate({ scrollTop: "0" },  500);
        });
    });

   /****=====  Filter  =====****/ 
    $(".filterShow").click(function(){
        $(".user-left").toggleClass("show");
        $(".moreShow").toggleClass("show");
        $(".bgShow").toggleClass("show");
    });
    $(".bgShow").click(function(){
        $(".bgShow").toggleClass("show");
        $(".user-left").toggleClass("show");
        $(".moreShow").toggleClass("show");
    });
});

$(window).on('load', function () {
    $(".loading-text").delay(1e3).fadeOut("slow");
    $(".preloader").delay(2e3).fadeOut("slow");
});