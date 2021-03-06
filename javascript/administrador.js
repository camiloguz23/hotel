const $habi_dispo = document.getElementById("habi_dispo");
const $habi_ocupada = document.getElementById("habi_ocupada");
const $idTipHabitacion = document.getElementById("idTipHabitacion");
const $fragment = document.createDocumentFragment();
// const $form_list = document.getElementById("");
const $cerrarSesion = document.getElementById('cerrarsesion');
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
                                            <td>${e.id_reservas}</td>
                                            <td>${e.nom_tip_habi}</td>
                                            <td>${e.documento}</td>
                                            <td>${e.nom_cliente}</td>
                                            <td>${e.correo_cliente}</td>
                                            <td>${e.fecha_ingreso}</td>
                                            <td>${e.fecha_salida}</td>
                                            <td idDocumento="${e.documento}">
                                                <div idReservas="${e.id_reservas}">
                                                    <button class="btn_form" type="submit">Cancelar Reserva</button>
                                                </div>
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
        let element = $(this)[0].parentElement.parentElement.parentElement;
        let element2 = $(this)[0].parentElement.parentElement;
        let element3 = $(this)[0].parentElement;
        const datos = {
            id: $(element).attr('idHabitacion'),
            idDocumento: $(element2).attr('idDocumento'),
            idReserva: $(element3).attr('idReservas')
        }
        $.post("../../php/cancelarReserva.php", datos,
            function (response) {
                alert(response)
                location.reload()
            }
        );
    })

    $(document).on('click', '.btn_form_1', function() {
        let elemento = $(this)[0].parentElement.parentElement;
        let idHabi = $(elemento).attr('idHabitacion');
        $('#flotante').fadeIn(300);

        $('#form_editar').submit(function (e) { 
            e.preventDefault();

            const datos = {
                idhabi: idHabi,
                noPersonas: $('#noPersonas').val(),
                noHabitaciones: $('#noHabitaciones').val()
            }

            $.post("../../php/editarHabi.php", datos,
                function (response) {
                    alert(response)
                    location.reload()
                }
            );
    
});
        });

        $("#cerrarFlotante").click(function (e) { 
            $('#flotante').fadeOut(300);
        });
    })

    console.log($cerrarSesion);
    $cerrarSesion.addEventListener("click", (e)=>{
        window.location =  '../../php/cerrar_sesion.php';
    });


    const $formularioReg = document.getElementById("forreg");
    console.log($formularioReg);
    const $inputs = document.querySelectorAll(".forreg [required]");
    console.log($inputs);
    $inputs.forEach((input)=>{
        const $span = document.createElement("span");
        $span.id = input.name;
        $span.textContent = input.title;
        $span.classList.add("forreg-error" , "none");
        input.insertAdjacentElement("afterend" , $span);

    });
    document.addEventListener("keyup", e=>{
        if(e.target.matches(".forreg [required]")){
            let pattern = e.target.pattern || e.target.dataset.pattern;
            if(pattern && e.target.value !== ""){
                let regexp = new RegExp(pattern);
                return !regexp.exec(e.target.value)
                 ? document.getElementById(e.target.name).classList.add("isactive")
                 : document.getElementById(e.target.name).classList.remove("isactive")
            }
        }
    });

    $formularioReg.addEventListener("submit",(e)=>{
        e.preventDefault();

        let datos = new FormData($formularioReg);

        $formularioReg.reset();
        async function insertAdmin(){
            try {
                let res = await fetch("../../php/insertar.php",{ method:'POST', body: datos });
                let json = await res.json();

                if(!res.ok) throw({status: res.status, statusText: res.statusText});

                if(json === "ok"){
                    alert("usuario creado con exito");
                }else if(json ==="errorcreacion"){
                    alert("vaya ocurrio un error inexperado");
                }else if(json ==="usuarioregistrado"){
                    alert("usuario existente");
                }
            } catch (error) {
                let messague = error.statusText || "ocurrio un error";
                alert(`Error ${error.status} ${messague}`);
            }
        }
        insertAdmin();
    });
