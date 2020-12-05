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
    }).then(res => res.text()).then(info => console.log(info))
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

