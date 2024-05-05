$(window).on('load', function () {
    $('#pageloader').fadeOut();
});

$(document).ready(function () {
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        items: 1,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        animateOut: 'fadeOut'
    });

    $('.timeline').timeline({
        forceVerticalMode: 500,
        mode: 'horizontal',
        visibleItems: 3,
        rtlMode: true
    });

    AOS.init();
});