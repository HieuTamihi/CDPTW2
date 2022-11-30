$('.intem-main').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    appendArrows: '.contron-pre-next',
    autoplaySpeed: 1000,
    // arrows: true,
    infinite: true,
    // autoplay: true,
});
$('.cont-bottum-main').slick({
    infinite: true,
    slidesToShow: 6,
    slidesToScroll: 1,
    appendArrows: '.contron-pre-next',
    autoplaySpeed: 1000,
    arrows: true,
    infinite: true,
    autoplay: true,
    responsive: [{
        breakpoint: 767,
        settings: {
            slidesToShow: 4,
        }
    }, {
        breakpoint: 480,
        settings: {
            slidesToShow: 1
        }
    },]
});
$('.intem-thume').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    vertical: true,
    appendArrows: '.contron-pre-next',
    autoplaySpeed: 1000,
    arrows: true,
    infinite: true,
    // autoplay: true,
    responsive: [{
        breakpoint: 767,
        settings: {
            slidesToShow: 2,
            vertical: false,
        }
    }, {
        breakpoint: 480,
        settings: {
            slidesToShow: 1
        }
    },]
});

CKEDITOR.replace('#ckeditoerEmployer');
