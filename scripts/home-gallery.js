$( document ).ready(function() {
    let newestProducts = document.querySelector('.latest-products').children;
    $.each(newestProducts, function(i, elem) {
      elem.classList.add('col-12', 'col-sm-12', 'col-md-6', 'col-lg-4');
  });
});
