jQuery(document).ready(function(){
    jQuery(".latest-carousel").owlCarousel({
        rewind: true,
        margin: 40,
        nav: true,
    });
    jQuery(".portfolio-carousel").owlCarousel({
        rewind: true,
        margin: 40,
        nav: true,
        items:1
    });

    AOS.init();
});