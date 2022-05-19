$(document).ready(function () {
    let sectionLog = document.getElementById('userLog');
    let sectionReg = document.getElementById('userReg');
    let formLog = document.getElementById('userLog__form');
    let formReg = document.getElementById('userReg__form');
    let btnRegistrate = document.getElementById('btnRegistrate');
    let btnIngresar = document.getElementById('btnIngresar');

    sectionReg.style.display = "none";

    btnRegistrate.onclick = () => {
        sectionReg.style.display = "block";
        sectionLog.style.display = "none";
    }

    btnIngresar.onclick = () => {
        sectionReg.style.display = "none";
        sectionLog.style.display = "block";
    }

    //Se obtienen los datos del formulario

    formReg.onsubmit = (e) =>{
        e.preventDefault();

        formReg.attr('disabled', true);
        let formdata = {};
        formdata['titularPropiedad'] = $('#form__registroPropiedad--titularPropiedad').val();
        formdata['inventoresPropiedad'] = $('#form__registroPropiedad--inventoresPropiedad').val();
        formdata['resumenPropiedad'] = $('#form__registroPropiedad--resumenPropiedad').val();
        formdata['tipoPropiedad'] = $('#form__registroPropiedad--tipoPropiedad').val();
        formdata['tituloPropiedad'] = $('#form__registroPropiedad--tituloPropiedad').val();

        formdata['sectoresPropiedad'] = [];
        $('input[type=checkbox][name=sectoresPropiedad]:checked').each(function () {
            formdata['sectorePropiedad'].push($(this).attr('value'));
        });

        formdata['estatusPropiedad'] = $('#form__registroPropiedad--estatusPropiedad').val();
        formdata['regionPropiedad'] = $('#form__registroPropiedad--regionPropiedad').val();
        formdata['numeroPatentePropiedad'] = $('#form__registroPropiedad--numeroPatentePropiedad').val();
        formdata['linkPropiedad'] = $('#form__registroPropiedad--linkPropiedad').val();

        console.log(formdata);

        $.ajax({
            type: 'POST',
            dataType: 'json',
            url: 'registroPropiedadIntelectual/registrarPropiedadController',
            data: formdata,
            success: function (data) {
                if (data.error == true) {
                    console.error(data.mensaje);
                    M.toast({
                        html: `<span class='red-text'>error: ${data.mensaje}</span>`
                    });
                    $('#form__registroPropiedad--submit').attr('disabled', false);
                } else {
                    data_saved = true;
                    console.log(data.msg);
                    $('#form__registroPropiedad').trigger('reset');
                    M.toast({
                        html: '¡Datos Insertados de forma Correcta!',
                        completeCallback: function () {
                            console.error('Your toast was dismissed');
                            $('#form__registroPropiedad--submit').attr('disabled', false);
                            //window.location.href = '/';
                        }
                    });
                }
            },
            error: function (e) {
                console.error(`ERROR JS: ${e}`);
                M.toast({
                    html: '⚠ Ocurrio un error al enviar sus datos, por favor recargue la pagina e intente de nuevo ⚠',
                    completeCallback: function () {
                        console.error('Your toast was dismissed');
                        $('#form__registroPropiedad--submit').attr('disabled', false);
                        //window.location.href = '/';
                    }
                });
            },
            beforeSend: function () {
                console.log('Inicio de envío de datos');
                console.group();
            },
            complete: function () {
                console.groupEnd();
                console.log('Fin de envio de datos');
            }
        });
    });
});