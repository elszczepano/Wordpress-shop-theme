//promo caraousel init
$('.promo-carousel').owlCarousel( {
    loop: true,
    autoplayTimeout: 8000,
    smartSpeed: 700,
    margin: 10,
    nav: false,
    items: 1,
    dots: false,
    autoplay: true,
    rewind: true
})

//promo carousel controls
const promoControls = $('.promo-carousel');

$('.promo-next').click(function() {
    promoControls.trigger('next.owl.carousel');
})
$('.promo-prev').click(function() {
    promoControls.trigger('prev.owl.carousel');
})

//recommended products carousel init
$('.recommended-products-carousel').owlCarousel( {
    loop: true,
    autoplayTimeout: 7000,
    smartSpeed: 700,
    nav: false,
    autoplay: true,
    rewind: true,
    responsive : {
    0 : {
      items: 1,
    },
    768 : {
      items: 2,
    },
    992 : {
      items: 3,
      dots: false
    }
}
})

//promo carousel controls
const recommendedControls = $('.recommended-products-carousel');

$('.recommended-next').click(function() {
    recommendedControls.trigger('next.owl.carousel');
})
$('.recommended-prev').click(function() {
    recommendedControls.trigger('prev.owl.carousel');
})

// single product gallery carousel init
$('.product-gallery-carousel').owlCarousel( {
    loop: true,
    smartSpeed: 700,
    autoplay: true,
    autoplayTimeout: 12000,
    items: 1,
    dots: false,
    margin: 200
})
