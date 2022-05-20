function agendar(){
    $(document).ready(function(){
        let data = {
            nombre_paciente: $("#agendarForm__nombre").val(),
            ap_paciente: $("#agendarForm__apellidos").val(),
            edad_paciente: $("#agendarForm__edad").val(),
            localidad_paciente: $("#agendarForm__localidad").val(),
            telefono_paciente: $("#agendarForm__telefono").val(),
            email_paciente: $("#agendarForm__email").val(),
            medioContacto_paciente: $("#agendarForm__medioContacto").val(),
            fecha_cita: $("#agendarForm__fecha").val(),
            hora_cita: $("#agendarForm__hora").val(),
            observaciones_paciente: $("#agendarForm__observaciones").val(),
            action: $("#action").val(),
        }
        console.log(data);
        $.ajax({
            url: '../php/agendarCita.php',
            type: 'post',
            data: data,
            success: function(response){
                alert(response);
                console.log(response);
            }
        });//End Ajax

    }) // End Document ready
}
    
