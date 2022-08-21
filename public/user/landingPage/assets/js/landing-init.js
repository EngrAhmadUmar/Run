(function ($) {
    //=========== Testimonial1 OwlCarousel ==========//
    $(".testimonial .owl-carousel").owlCarousel({
        loop: true,
        items: 1,
        dots: false,
        nav: true,
        autoplay: false,
        autoplaySpeed: 2500,
        navSpeed: true,
        navSpeed: 1500,
        smartSpeed: 1500,
        navText: [
            "<i class='la la-arrow-left'></i>",
            "<i class='la la-arrow-right'></i>",
        ],
    });

    //=========== owlCarousel client-slide ==========//
    var owl = $(".client-slide");
    owl.owlCarousel({
        loop: true,
        dots: false,
        autoplay: true,
        autoplaySpeed: 1000,
        responsive: {
            0: {
                items: 1,
            },
            400: {
                items: 2,
            },
            575: {
                items: 3,
            },
            1000: {
                items: 5,
            },
        },
    });
})(jQuery);
