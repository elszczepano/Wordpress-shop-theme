const loginFields = document.querySelector('.col-1');
const registerFields = document.querySelector('.col-2');

if(loginFields!=null&&registerFields!=null) {
  loginFields.classList.add('col-12' , 'col-sm-12' , 'col-md-5' , 'col-lg-5');
  loginFields.classList.remove('col-1');
  registerFields.classList.add('col-12' , 'col-sm-12' , 'col-md-5' , 'col-lg-5');
  registerFields.classList.remove('col-2');
}
