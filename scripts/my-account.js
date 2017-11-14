const loginFields = document.querySelector('.col-1');
const registerFields = document.querySelector('.col-2');
const accountBox = document.querySelector('.col2-set');

if(loginFields!=null&&registerFields!=null&&accountBox!=null) {
  accountBox.classList.add('col-12' , 'd-flex' , 'flex-wrap');
  loginFields.classList.add('col-12' , 'col-sm-12' , 'col-md-5' , 'col-lg-5');
  loginFields.classList.remove('col-1');
  registerFields.classList.add('col-12' , 'col-sm-12' , 'col-md-5' , 'col-lg-5');
  registerFields.classList.remove('col-2');
}
