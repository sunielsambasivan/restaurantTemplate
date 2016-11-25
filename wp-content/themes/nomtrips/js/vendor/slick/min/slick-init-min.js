jQuery(document).ready(function($) {
    $(".cards--carousel").each(function() {
        var s = $(this).find(".cards--carousel--container");
        var e = $(this).find('button[class^="slick-prev"]');
        var o = $(this).find('button[class^="slick-next"]');
        s.slick({
            dots: true,
            infinite: false,
            speed: 300,
            slidesToShow: 6,
            slidesToScroll: 1,
            responsive: [ {
                breakpoint: 1366,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 1,
                    dots: true
                }
            }, {
                breakpoint: 991,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    dots: true
                }
            }, {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    dots: true
                }
            } ],
            nextArrow: $(o),
            prevArrow: $(e)
        });
    });
});