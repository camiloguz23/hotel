const btnEsconder1 = document.getElementById('serviciosID2')
const btnEsconder2 = document.getElementById('serviciosID1')
const esconder2 = document.getElementById('listaDeServicios2')
const esconder1 = document.getElementById('listaDeServicios1')

btnEsconder1.addEventListener('click',()=>{

    esconder2.classList.toggle('listaDeServicios');
} )

btnEsconder2.addEventListener('click',()=>{

    esconder1.classList.toggle('listaDeServicios');
} )