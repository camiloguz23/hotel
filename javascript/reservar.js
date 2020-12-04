const reservar = document.getElementById("reservarBox");
const btn_reservar = document.getElementById("btn_reservar");
const cerrar_reserva = document.getElementById("prueba");

btn_reservar.addEventListener("click", (e) => {
    e.preventDefault();
    reservar.classList.add("reservarBox-activado");
})

cerrar_reserva.addEventListener("click", (e) => {
    e.preventDefault();
    reservar.classList.remove("reservarBox-activado");
})