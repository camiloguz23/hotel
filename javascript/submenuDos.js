$(document).ready(function () {
    const btn_iniciarSesion = $('#iniciarSesion');
    const submenuIniciar = $('#submenuIniciar');
    
    $(submenuIniciar).hide();

    $(btn_iniciarSesion).click(function (e) { 
        e.preventDefault();
        $(submenuIniciar).toggle(100);
    });
});
