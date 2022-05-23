$(document).ready(function () {
    let btnAgendar = $('.btnAgendar').click(function () {
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
        // Validación de Email válido
        let expReg_email = /^[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?$/;
        let verify_email = expReg_email.test(data.email_paciente);


        // Validación de datos
        if (data.nombre_paciente == "") {
            alertify.error(`<b class = "boldTx whiteTx">Ingresa un nombre</b>`);
            return false;
        } else if (data.ap_paciente == "") {
            alertify.error(`<b class = "boldTx whiteTx">Ingresa el apellido</b>`);
            return false;
        } else if (data.edad_paciente == "") {
            alertify.error(`<b class = "boldTx whiteTx">Ingresa la edad del paciente</b>`);
            return false;
        } else if (data.localidad_paciente == "") {
            alertify.error(`<b class = "boldTx whiteTx">Ingresa la localidad del paciente</b>`);
            return false;
        } else if (data.telefono_paciente == "") {
            alertify.error(`<b class = "boldTx whiteTx">Ingresa el número de teléfono del paciente</b>`);
            return false;
        } else if (data.email_paciente == "" || verify_email == false) {
            alertify.error(`<b class = "boldTx whiteTx">Ingrese un email válido</b>`);
            return false;
        } else if (data.medioContacto_paciente == "") {
            alertify.error(`<b class = "boldTx whiteTx">Ingresa cual fue el medio de contacto para agendar la cita</b>`);
            return false;
        } else if (data.fecha_cita == "") {
            alertify.error(`<b class = "boldTx whiteTx">Debes de ingresar la fecha de la cita</b>`);
            return false;
        } else if (data.hora_cita == "") {
            alertify.error(`<b class = "boldTx whiteTx">Ingresa la hora de la cita</b>`);
            return false;
        } else if (data.observaciones_paciente == "") {
            alertify.error(`<b class = "boldTx whiteTx">Añade una observación</b>`);
            return false;
        }
        // Animación de validación de datos
        let timerInterval
        Swal.fire({
            title: 'Validando registro de cita',
            timer: 2300,
            timerProgressBar: true,
            didOpen: () => {
                Swal.showLoading()
                const b = Swal.getHtmlContainer().querySelector('b')
                timerInterval = setInterval(() => {
                    b.textContent = Swal.getTimerLeft()
                }, 100)
            },
            willClose: () => {
                clearInterval(timerInterval)
            }
        }).then((result) => {
            /* Read more about handling dismissals below */
            if (result.dismiss === Swal.DismissReason.timer) {
                console.log('I was closed by the timer')
            }
        })
        // Envío de datos
        $.ajax({
            url: '../php/agendarCita.php',
            type: 'post',
            data: data,
            success: function (response) {
                // alert(response);
                console.log(response);
                if (response == "Scheduled appointment") {
                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: 'Cita agendada correctamente',
                        showConfirmButton: false,
                        timer: 1800
                    });
                    setTimeout(function () {
                        window.location.reload();
                    }, 2000)
                } else if (response == "Failed appointment") {
                    Swal.fire({
                        position: 'center',
                        icon: 'error',
                        title: 'No fue posible agendar la cita',
                        showConfirmButton: false,
                        timer: 1800
                    })
                }
            }
        }); //End Ajax
    }); // End Function Modal agregar
}) // End Document ready