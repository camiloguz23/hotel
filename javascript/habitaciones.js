const btnEsconder2 = document.getElementById('serviciosID2');
const esconder2 = document.getElementById('listaDeServicios2');

const btnEsconder1 = document.getElementById('serviciosID1');
const esconder1 = document.getElementById('listaDeServicios1');

const btnEsconder3 = document.getElementById('serviciosID3');
const esconder3 = document.getElementById('listaDeservicios3');

const btnEsconder4 = document.getElementById('serviciosID4');
const esconder4 = document.getElementById('listaDeServicios4');

const btnEsconder5 = document.getElementById('serviciosID5');
const esconder5 = document.getElementById('listaDeServicios5');

const btnEsconder6 = document.getElementById('serviciosID6');
const esconder6 = document.getElementById('listaDeServicios6');

const btnEsconder7 = document.getElementById('serviciosID7');
const esconder7 = document.getElementById('listaDeServicios7');

const btnEsconder8 = document.getElementById('serviciosID8');
const esconder8 = document.getElementById('listaDeServicios8');

const btnEsconder9 = document.getElementById('serviciosID9');
const esconder9 = document.getElementById('listaDeServicios9');

const btnEsconder10 = document.getElementById('serviciosID10');
const esconder10 = document.getElementById('listaDeServicios10');

/* aparecer suites o habitaciones */



/*------------------------comenzar a esconder-------------- */
btnEsconder1.addEventListener('click',()=>{
    esconder1.classList.toggle('listaDeServicios');
})

btnEsconder2.addEventListener('click',()=>{
    esconder2.classList.toggle('listaDeServicios');
})

btnEsconder3.addEventListener('click',()=>{
    esconder3.classList.toggle('listaDeServicios');
})

btnEsconder10.addEventListener('click',()=>{
    esconder10.classList.toggle('listaDeServicios');
})

btnEsconder9.addEventListener('click', ()=>{
    esconder9.classList.toggle('listaDeServicios');
})

btnEsconder8.addEventListener('click',()=>{
    esconder8.classList.toggle('listaDeServicios');
})

btnEsconder7.addEventListener('click',()=>{
    esconder7.classList.toggle('listaDeServicios'); 
})

btnEsconder6.addEventListener('click', ()=>{
    esconder6.classList.toggle('listaDeServicios');
})

btnEsconder5.addEventListener('click',()=>{
    esconder5.classList.toggle('listaDeServicios');
})

btnEsconder4.addEventListener('click',()=>{
    esconder4.classList.toggle('listaDeServicios');
})


//********* BOTONES DE CONSULTAR DSIPONIBILIDAD ******************************/

const acceKing = document.getElementById("btnacceking")

acceKing.addEventListener("click", () => {
    const habi = document.getElementById("acceking")
    const dato = new FormData(habi)
    fetch("../php/disponibles.php", {
        method:"POST",
        body:dato
    }).then(res => res.text()).then(dat => {
        if (dat == 0) {
            acceKing.innerHTML = `La habitacion no esta dsiponible`
            setTimeout(() => {
                acceKing.innerHTML = `Verificar Disponibilidad`
            }, 6000);
        } else {
            acceKing.innerHTML = `La habitaciones disponibles son ${dat}`
            setTimeout(() => {
                acceKing.innerHTML = `Verificar Disponibilidad`
            }, 6000);
        }
    })
})

const suitConer = document.getElementById("uno")

suitConer.addEventListener("click", () => {
    const habi = document.getElementById("suitConer")
    const dato = new FormData(habi)
    fetch("../php/disponibles.php", {
        method:"POST",
        body:dato
    }).then(res => res.text()).then(dat => {
        if (dat == 0) {
            suitConer.innerHTML = `La habitacion no esta dsiponible`
            setTimeout(() => {
                suitConer.innerHTML = `Verificar Disponibilidad`
            }, 6000);
        } else {
            suitConer.innerHTML = `La habitaciones disponibles son ${dat}`
            setTimeout(() => {
                suitConer.innerHTML = `Verificar Disponibilidad`
            }, 6000);
        }
    })
})

const suitExec = document.getElementById("dos")

suitExec.addEventListener("click", () => {
    const habi = document.getElementById("suitExec")
    const dato = new FormData(habi)
    fetch("../php/disponibles.php", {
        method:"POST",
        body:dato
    }).then(res => res.text()).then(dat => {
        if (dat == 0) {
            suitExec.innerHTML = `La habitacion no esta dsiponible`
            setTimeout(() => {
                suitExec.innerHTML = `Verificar Disponibilidad`
            }, 6000);
        } else {
            suitExec.innerHTML = `La habitaciones disponibles son ${dat}`
            setTimeout(() => {
                suitExec.innerHTML = `Verificar Disponibilidad`
            }, 6000);
        }
    })
})

const accesDoble  = document.getElementById("tres")

accesDoble.addEventListener("click", () => {
    const habi = document.getElementById("accedoble")
    const dato = new FormData(habi)
    fetch("../php/disponibles.php", {
        method:"POST",
        body:dato
    }).then(res => res.text()).then(dat => {
        if (dat == 0) {
            accesDoble.innerHTML = `La habitacion no esta dsiponible`
            setTimeout(() => {
                accesDoble.innerHTML = `Verificar Disponibilidad`
            }, 6000);
        } else {
            accesDoble.innerHTML = `La habitaciones disponibles son ${dat}`
            setTimeout(() => {
                accesDoble.innerHTML = `Verificar Disponibilidad`
            }, 6000);
        }
    })
})

const ada = document.getElementById("cuatro")

ada.addEventListener("click", () => {
    const habi = document.getElementById("ada")
    const dato = new FormData(habi)
    fetch("../php/disponibles.php", {
        method:"POST",
        body:dato
    }).then(res => res.text()).then(dat => {
        if (dat == 0) {
            ada.innerHTML = `La habitacion no esta dsiponible`
            setTimeout(() => {
                ada.innerHTML = `Verificar Disponibilidad`
            }, 6000);
        } else {
            ada.innerHTML = `La habitaciones disponibles son ${dat}`
            setTimeout(() => {
                ada.innerHTML = `Verificar Disponibilidad`
            }, 6000);
        }
    })
})

const grandclub = document.getElementById("cinco")

grandclub.addEventListener("click", () => {
    const habi = document.getElementById("grandclub")
    const dato = new FormData(habi)
    fetch("../php/disponibles.php", {
        method:"POST",
        body:dato
    }).then(res => res.text()).then(dat => {
        if (dat == 0) {
            grandclub.innerHTML = `La habitacion no esta dsiponible`
            setTimeout(() => {
                grandclub.innerHTML = `Verificar Disponibilidad`
            }, 6000);
        } else {
            grandclub.innerHTML = `La habitaciones disponibles son ${dat}`
            setTimeout(() => {
                grandclub.innerHTML = `Verificar Disponibilidad`
            }, 6000);
        }
    })
})

const btnHabitaciones = document.getElementById('habitacSuites');
const btnSuites = document.getElementById('aparecerSuites');

const suitesA = document.getElementById('cajasDeAbitaciones');/* suites */
const habitacionesA = document.getElementById('habitacionesGran');

btnHabitaciones.addEventListener('click',(e)=>{
    e.preventDefault();
    suitesA.style.display = 'none';
    habitacionesA.style.display = 'block';
})

btnSuites.addEventListener('click',(a)=>{
    a.preventDefault();
    suitesA.style.display = 'grid';
    habitacionesA.style.display = 'none';
})

/* mini formulario reservar ahora */
const btnabrirR = document.getElementById('btn_reservar');
const btncerrarR = document.getElementById('prueba');

const aparecerForm = document.getElementById('reservarMain');

btnabrirR.addEventListener('click',(e)=>{
    e.preventDefault();
    aparecerForm.style.display = 'grid';
})

btncerrarR.addEventListener('click',(z)=>{
    z.preventDefault();
    aparecerForm.style.display = 'none';
})


const grandclubdoble = document.getElementById("seis")

grandclubdoble.addEventListener("click", () => {
    const habi = document.getElementById("grandclubdoble")
    const dato = new FormData(habi)
    fetch("../php/disponibles.php", {
        method:"POST",
        body:dato
    }).then(res => res.text()).then(dat => {
        if (dat == 0) {
            grandclubdoble.innerHTML = `La habitacion no esta dsiponible`
            setTimeout(() => {
                grandclubdoble.innerHTML = `Verificar Disponibilidad`
            }, 6000);
        } else {
            grandclubdoble.innerHTML = `La habitaciones disponibles son ${dat}`
            setTimeout(() => {
                grandclubdoble.innerHTML = `Verificar Disponibilidad`
            }, 6000);
        }
    })
})

const camaking = document.getElementById("siete")

camaking.addEventListener("click", () => {
    const habi = document.getElementById("camaking")
    const dato = new FormData(habi)
    fetch("../php/disponibles.php", {
        method:"POST",
        body:dato
    }).then(res => res.text()).then(dat => {
        if (dat == 0) {
            camaking.innerHTML = `La habitacion no esta dsiponible`
            setTimeout(() => {
                camaking.innerHTML = `Verificar Disponibilidad`
            }, 6000);
        } else {
            camaking.innerHTML = `La habitaciones disponibles son ${dat}`
            setTimeout(() => {
                camaking.innerHTML = `Verificar Disponibilidad`
            }, 6000);
        }
    })
})

const camadoble = document.getElementById("ocho")

camadoble.addEventListener("click", () => {
    const habi = document.getElementById("camadobles")
    const dato = new FormData(habi)
    fetch("../php/disponibles.php", {
        method:"POST",
        body:dato
    }).then(res => res.text()).then(dat => {
        if (dat == 0) {
            camadoble.innerHTML = `La habitacion no esta dsiponible`
            setTimeout(() => {
                camadoble.innerHTML = `Verificar Disponibilidad`
            }, 6000);
        } else {
            camadoble.innerHTML = `La habitaciones disponibles son ${dat}`
            setTimeout(() => {
                camadoble.innerHTML = `Verificar Disponibilidad`
            }, 6000);
        }
    })
})

const vistacama = document.getElementById("nueve")

vistacama.addEventListener("click", () => {
    const habi = document.getElementById("vistacama")
    const dato = new FormData(habi)
    fetch("../php/disponibles.php", {
        method:"POST",
        body:dato
    }).then(res => res.text()).then(dat => {
        if (dat == 0) {
            vistacama.innerHTML = `La habitacion no esta dsiponible`
            setTimeout(() => {
                vistacama.innerHTML = `Verificar Disponibilidad`
            }, 6000);
        } else {
            vistacama.innerHTML = `La habitaciones disponibles son ${dat}`
            setTimeout(() => {
                vistacama.innerHTML = `Verificar Disponibilidad`
            }, 6000);
        }
    })
})


const habi = document.getElementById("habi")
const boton = document.getElementById("btn_reservar")

boton.addEventListener("click", () => {
    
    fetch("../php/habitacion.php").then(inp => inp.text()).then(dato => {
        console.log(dato)
        habi.innerHTML = dato
    })
})


const reserva = document.getElementById("reserva")
 const btnEnviar = document.getElementById("enviar")

 btnEnviar.addEventListener("click", (e) => {
     
    e.preventDefault()
    const datoRe = new FormData(reserva)
    fetch("../php/reserva.php", {
        method: "POST",
        body: datoRe
    }).then(res => res.text()).then(dato => {
        console.log(dato)
        reserva.innerHTML = ` <h2>su reservacion fue un exito</h2>`
        setTimeout(() => {
            
            window.location = "../index.html" 
        }, 5000);
    })
 })