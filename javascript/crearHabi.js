$(document).ready(function () {
    $('#room_add').submit(function (e) { 
        e.preventDefault();
        
        const postData = {
            idHabitacion: $('#idHabitacion').val(),
            idTipHabitacion: $('#idTipHabitacion').val(),
            noPersonas: $('#noPersonas').val(),
            habiDisponibles: $('#habiDisponibles').val()
        }

        $.post("../../php/crearHabi.php", postData,
            function (response) {
                alert(response)
                $('#room_add').trigger('reset');
            }
        );
    });
    
});