$( document ).ready(function() {
    let catalogProducts = document.querySelector('.catalog-products').children;
    $.each(catalogProducts, function(i, elem) {
      elem.classList.add('col-12', 'col-sm-12', 'col-md-6', 'col-lg-4');
  });
});
