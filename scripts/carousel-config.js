//promo caraousel init
$('.promo-carousel').owlCarousel({
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
let owl = $('.promo-carousel');
owl.owlCarousel();
$('.promo-next').click(function() {
    owl.trigger('next.owl.carousel');
})
$('.promo-prev').click(function() {
    owl.trigger('prev.owl.carousel');
})
//recommended products carousel init
$('.recommended-products-carousel').owlCarousel({
    loop: true,
    autoplayTimeout: 12000,
    smartSpeed: 700,
    nav: false,
    items: 3,
    dots: false,
    autoplay: true,
    rewind: true
})
// single product gallery carousel init
$('.product-gallery-carousel').owlCarousel({
    loop: true,
    smartSpeed: 700,
    autoplay: true,
    autoplayTimeout: 12000,
    items: 1,
    dots: false,
    margin: 200
})
