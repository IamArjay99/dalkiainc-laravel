$(window).on('load', function () {
    $('#pageloader').fadeOut();

    AOS.init();
});

$(document).ready(function () {
    // HOME
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        items: 1,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        animateOut: 'fadeOut'
    });

    // ABOUT
    $('.timeline').timeline({
        forceVerticalMode: 500,
        mode: 'horizontal',
        visibleItems: 3,
        rtlMode: false
    });

    // SCOPE AND SERVICES
    $('.owl-carousel-scope-and-services').owlCarousel({
        loop: true,
        margin: 20,
        items: 3,
        autoplay: false,
        animateOut: 'fadeOut'
    });
});