
document.querySelector('.woocommerce-breadcrumb').setAttribute('aria-label' , 'breadcrumb');
document.querySelector('.woocommerce-breadcrumb').setAttribute('role' , 'navigation');
document.querySelector('.woocommerce-breadcrumb').classList.add('breadcrumb');
document.querySelector('.woocommerce-breadcrumb a').classList.add('breadcrumb-item');
document.querySelector('#sidebar').remove();
document.querySelector('#content').classList.add('catalog-products-box');
document.querySelector('.woocommerce-products-header').classList.add('catalog-products-header');
document.querySelector('.products').classList.add('catalog-products' , 'd-flex' , 'flex-wrap');
document.querySelector('.orderby').classList.add('form-control');
