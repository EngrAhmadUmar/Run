//  Preloader
jQuery(window).on("load", function () {
    $("#preloader").fadeOut(500);
    $("#main-wrapper").addClass("show");
});

(function ($) {
    // Active menu
    function activeNav(include, className) {
        $(function () {
            if (window.location.href.includes(include)) {
                $(className).addClass("active").parent().addClass("active");
            }
        });
    }
    $(function () {
        for (
            var nk = window.location,
                o = $(".menu a,.settings-sidebar a")
                    .filter(function () {
                        return nk.href.includes(this.href);
                    })
                    .addClass("active")
                    .parent()
                    .addClass("active");
            ;

        ) {
            // console.log(o)
            if (!o.is("li")) break;
            o = o.parent().addClass("show").parent().addClass("active");
        }
    });

    activeNav("settings", ".settings");
    // Dark
    $(function () {
        if (window.location.href.includes("dark")) {
            $("body").addClass("dark");
        }
    });

    //===========  ==========//
    $(".duration-option a").on("click", function () {
        $(".duration-option a.active").removeClass("active");
        $(this).addClass("active");
    });

    //=========== Header sticky-top ==========//
    $(window).on("scroll", function () {
        if ($(window).scrollTop() > 50) {
            $(".header").addClass("sticky-top"), 3000;
        } else {
            $(".header").removeClass("sticky-top"), 3000;
        }
    });

    //=========== niceSelect ==========//
    // $("select").niceSelect();
})(jQuery);
