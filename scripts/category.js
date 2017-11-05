document.querySelector('.woocommerce-breadcrumb').setAttribute('aria-label' , 'breadcrumb');
document.querySelector('.woocommerce-breadcrumb').setAttribute('role' , 'navigation');
document.querySelector('.woocommerce-breadcrumb').classList.add('breadcrumb');
document.querySelector('.woocommerce-breadcrumb a').classList.add('breadcrumb-item');
document.querySelector('#sidebar').remove();
document.querySelector('#content').classList.add('catalog-products-box');
document.querySelector('.woocommerce-products-header').classList.add('catalog-products-header');
if(document.querySelector('.products')!=null) {
  document.querySelector('.products').classList.add('catalog-products' , 'd-flex' , 'flex-wrap');
}
if(document.querySelector('.orderby')!=null) {
  document.querySelector('.orderby').classList.add('form-control');
}
