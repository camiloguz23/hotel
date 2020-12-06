const $habi_dispo = document.getElementById("habi_dispo");
const $habi_ocupada = document.getElementById("habi_ocupada");
const $idTipHabitacion = document.getElementById("idTipHabitacion");
const $fragment = document.createDocumentFragment();
const $form_list = document.getElementById("")
listaDisponible();
listaOcupada();
ListaTipo()

function listaDisponible() {
    fetch("../../php/listaDisponible.php")
    .then(resp => resp.ok ? resp.json():Promise.reject(resp))
    .then(data => {
        console.log(data)
        data.forEach(e => {
            $habi_dispo.innerHTML +=`<tr idHabitacion="${e.id}">
                                        <td>${e.id}</td>
                                        <td>${e.tipo}</td>
                                        <td>${e.no_personas}</td>
                                        <td>${e.no_habitacion}</td>
                                        <td>${e.disponibles_habi}</td>
                                        <td>
                                                <button class="btn_form_1" type="submit">Editar</button>
                                            </td>
                                    </tr>`;
        });
    })
    .catch(error => {
        console.error(error)
})
}

function listaOcupada() {
    fetch("../../php/listaOcupada.php")
    .then(resp => resp.ok ? resp.json():Promise.reject(resp))
    .then(data => {
        console.log(data)
        data.forEach(e => {
            $habi_ocupada.innerHTML += `<tr idHabitacion="${e.id_habitacion}">
                                            <td>${e.id_habitacion}</td>
                                            <td>${e.nom_tip_habi}</td>
                                            <td>${e.documento}</td>
                                            <td>${e.nom_cliente}</td>
                                            <td>${e.correo_cliente}</td>
                                            <td>${e.fecha_ingreso}</td>
                                            <td>${e.fecha_salida}</td>
                                            <td idDocumento="${e.documento}">
                                                <button class="btn_form" type="submit">Cancelar Reserva</button>
                                            </td>
                                        </tr>`;
        });
    })
}

function ListaTipo() {
    fetch("../../php/tipoHabi.php")
    .then(resp => resp.ok ? resp.json():Promise.reject(resp))
    .then(data => {
        console.log(data)
        data.forEach(e => {
            $idTipHabitacion.innerHTML += `<option value="${e.id}">${e.tipo}</option>`;
        });
    })
}

$(document).ready(function () {
    $('#flotante').hide(0);
    $(document).on('click', '.btn_form', function() {
        let element = $(this)[0].parentElement.parentElement;
        let element2 = $(this)[0].parentElement
        const datos = {
            id: $(element).attr('idHabitacion'),
            idDocumento: $(element2).attr('idDocumento'),
        }
        $.post("../../php/cancelarReserva.php", datos,
            function (response) {
                alert(response)
                location.reload()
            }
        );
    })

    $('#form_editar').submit(function (e) { 
        e.preventDefault();
        
    });

    $(document).on('click', '.btn_form_1', function() {
        let elemento = $(this)[0].parentElement.parentElement;
        var idHabi = $(elemento).attr('idHabitacion');
        $('#flotante').fadeIn(300);
    })

    $("#cerrarFlotante").click(function (e) { 
        $('#flotante').fadeOut(300);
    });


    
});