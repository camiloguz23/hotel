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