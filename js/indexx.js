
/* contantes de cartas */
const carta4 = document.getElementById('carta4');
const carta = document.getElementById('carta5');
const carta6 = document.getElementById('carta6');



/* agregamos evento click a cartas para deribar a otras paginas */



carta4.addEventListener('click', () =>{
window.location.href ="ingresar.php";
});

carta5.addEventListener('click', () =>{
    window.location.href = "eliminar.php";
});

carta6.addEventListener('click', () =>{
    window.location.href = "informacion.php";
});





