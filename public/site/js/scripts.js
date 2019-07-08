$(function() {

    "use strict";

    var wind = $(window);



    /* ----------------------------------------------------------------
                    [ Navbar ( scrollIt ) ]
    -----------------------------------------------------------------*/

    $.scrollIt({
        upKey: 38, // key code to navigate to the next section
        downKey: 40, // key code to navigate to the previous section
        easing: 'swing', // the easing function for animation
        scrollTime: 600, // how long (in ms) the animation takes
        activeClass: 'active', // class given to the active nav element
        onPageChange: null, // function(pageIndex) that is called when page is changed
        topOffset: -70 // offste (in px) for fixed top navigation
    });



    /* ----------------------------------------------------------------
                    [ Navbar ( Change Background & Logo ) ]
    -----------------------------------------------------------------*/

    wind.on("scroll", function() {

        var bodyScroll = wind.scrollTop(),
            navbar = $(".navbar"),
            logo = $(".navbar-top .logo> img");

        if (bodyScroll > 100) {

            navbar.addClass("nav-scroll");
            logo.attr('src', 'img/logo-dark.png');

        } else {

            navbar.removeClass("nav-scroll");
            logo.attr('src', 'img/logo-light.png');
        }
    });


    // close navbar-collapse when a  clicked
    $(".navbar-nav a").on('click', function() {
        $(".navbar-collapse").removeClass("show");
    });



    /* ----------------------------------------------------------------
                    [ Sections Background Image With Data ]
    -----------------------------------------------------------------*/

    var pageSection = $(".bg-img, section");
    pageSection.each(function(indx) {

        if ($(this).attr("data-background")) {
            $(this).css("background-image", "url(" + $(this).data("background") + ")");
        }
    })


});

// === window When Loading === //

$(window).on("load", function() {

    var wind = $(window);

    /* ----------------------------------------------------------------
                    [ Preloader ]
    -----------------------------------------------------------------*/

    $(".loading").fadeOut(500);



});