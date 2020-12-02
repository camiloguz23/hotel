$(document).ready(function () {
    const btn_iniciarSesion = $('#iniciarSesion');
    const submenuIniciar = $('#submenuIniciar');
    const contenedorIniciar = $('#iniciarS');

    $(submenuIniciar).hide();

    $(btn_iniciarSesion).click(function (e) { 
        e.preventDefault();
        $(submenuIniciar).toggle(100);
        $(contenedorIniciar).toggleClass('iniciarS-activado');
    });
});