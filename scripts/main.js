$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
if(document.querySelector( '.wpcf7-form' )!=null) {
  document.querySelector('.wpcf7').classList.add('d-flex' , 'justify-content-center');
  if(document.querySelectorAll( 'input' )!=null) {
  const inputs = document.querySelectorAll( 'input' );
      $.each(inputs, function(i, elem) {
        elem.classList.add('form-control');
  });
  }
  const textareas = document.querySelectorAll( 'textarea' );
      $.each(textareas, function(i, elem) {
        elem.classList.add('form-control');
  });
}
