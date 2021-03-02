$(document).ready(function () {
    $('.slick-scroll').slick({
        infinite: false,
        slidesToShow: 4,
        slidesToScroll: 4,
        
        // the magic
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 4,
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 360,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
        ],

    });
});
