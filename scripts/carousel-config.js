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
