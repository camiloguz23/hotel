$(document).ready(function () {
    const btn_iniciarSesion = $('#iniciarSesion');
    const submenuIniciar = $('#submenuIniciar');
    
    $(submenuIniciar).hide();

    $(btn_iniciarSesion).click(function (e) { 
        e.preventDefault();
        $(submenuIniciar).toggle(100);
    });
});

// envio de datos formulario de ingreso 

const formIngreso = document.getElementById("formIniciar")

formIngreso.addEventListener("submit", (e) => {
    e.preventDefault();
    const datoformu = new FormData(formIngreso)

    fetch("php/ingreso.php", {
        method:"POST",
        body:datoformu
    }).then(res => res.text()).then(info => {
        if (info == 1) {
            window.location = "html/administrador/administrador.html"
        }
    })
})

// ingreso de optcion en el formulario

const habi = document.getElementById("habi")
const boton = document.getElementById("btn_reservar")

boton.addEventListener("click", () => {
    fetch("php/habitacion.php").then(inp => inp.text()).then(dato => {
        console.log(dato)
        habi.innerHTML = dato
    })
})

// formulario de reservas 
 const reserva = document.getElementById("reserva")
 const btnEnviar = document.getElementById("enviar")

 btnEnviar.addEventListener("click", (e) => {
    e.preventDefault()
    const datoRe = new FormData(reserva)
    fetch("php/reserva.php", {
        method: "POST",
        body: datoRe
    }).then(res => res.text()).then(dato => {
        console.log(dato)
        reserva.innerHTML = ` <h2>su reservacion fue un exito</h2>`
        setTimeout(() => {
            
            window.location = "index.html" 
        }, 5000);
    })
 })

//// ************ PAGINA HABITACION ****************************
