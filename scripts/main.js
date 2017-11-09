$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})

if(document.querySelector( '.catalog-products' )!=null) {
const catalogProducts = document.querySelector( '.catalog-products' ).children;
    $.each(catalogProducts, function(i, elem) {
      elem.classList.add('col-12' , 'col-sm-12' , 'col-md-6' , 'col-lg-4');
});
}

if(document.querySelector( '.wpcf7-form' )!=null) {
  document.querySelector('.wpcf7').classList.add('d-flex' , 'justify-content-center');
}

if(document.querySelectorAll( 'input' )!=null) {
const inputs = document.querySelectorAll( 'input' );
    $.each(inputs, function(i, elem) {
      elem.classList.add('form-control');
    });
}

if(document.querySelectorAll( 'textarea' )!=null) {
const textareas = document.querySelectorAll( 'textarea' );
    $.each(textareas, function(i, elem) {
      elem.classList.add('form-control');
    });
}

if(document.querySelector( '.stock-quantity' )!=null) {
  const stockQuantity = parseInt(document.querySelector( '.stock-quantity' ).textContent);
  const progressBar = document.querySelector( '.progress-bar' );
  progressBar.style.width = `${stockQuantity}%`;

    switch(true) {
      case stockQuantity <=30:
        progressBar.classList.add('bg-danger');
      break;
      case stockQuantity <=50:
        progressBar.classList.add('bg-warning');
      break;
      default:
        progressBar.classList.add('bg-success');
      break;
    }
}
