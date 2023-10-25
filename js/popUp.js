
const formularioPopUP = document.querySelector('.hola');
const modal = document.querySelector('.modall')
const cerrarmodal = document.querySelector('.modall')

contact.addEventListener('submit', (e) =>{
     e.preventDefault();
    setTimeout(() => { modal.classList.add('modalActive');
    }, "500");
  
});


cerrarmodal.addEventListener('click', () =>{
    modal.classList.remove('modalActive');
});
