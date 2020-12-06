$(document).ready(function () {
    $('#room_add').submit(function (e) { 
        e.preventDefault();
        
        const postData = {
            idTipoHabi: $('#idTipoHabi').val(),
            idNomTipHabitacion: $('#idNomTipHabitacion').val()
        }

        $.post("../../php/crearTipo.php", postData,
            function (response) {
                alert(response)
                $('#room_add').trigger('reset');
            }
        );
    });
    
});