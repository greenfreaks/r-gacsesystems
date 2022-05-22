  $(document).ready(function () {
    let btnEnviar = $('.btnRegLog').click(function () {

      // Captura de valores de datos
      var data = {
        name_medico: $(".medico_name").val(),
        email_medico: $(".medico_email").val(),
        pwd_medico: $(".medico_pdw1").val(),
        pwd_medico2: $(".medico_pdw2").val(),
        pwd_medico_log: $(".medico_pdw_log").val(),
        action: $("#action").val(),
      };

      // Validación de Email válido
      let expReg_email = /^[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?$/;
      let verify_email = expReg_email.test(data.email_medico);


      // Validación de datos
      if (data.name_medico == "") {
        alertify.error(`<b class = "boldTx whiteTx">Ingrese su nombre</b>`);
        return false;
      } else if (data.email_medico == "" || verify_email == false) {
        alertify.error(`<b class = "boldTx whiteTx">Ingrese un email válido</b>`);
        return false;
      } else if (data.pwd_medico == "") {
        alertify.error(`<b class = "boldTx whiteTx">Ingresa una contraseña</b>`);
        return false;
      } else if (data.pwd_medico2 == "") {
        alertify.error(`<b class = "boldTx whiteTx">Debes de confirmar la contraseña</b>`);
        return false;
      } else if (data.pwd_medico != data.pwd_medico2) {
        alertify.error(`<b class = "boldTx whiteTx">Las contraseñas no coinciden</b>`);
        return false;
      }

      //Envío de datos
      $.ajax({
        url: 'php/login_registro.php',
        type: 'post',
        data: data,
        // Recimimos respuesta de PHP
        success: function (response) {
          console.log(response);
          // alert(response);

          //Se muestra alerta al usuario, dependiendo del resulado de su consulta
          if (response == "Login Successful") {
             Swal.fire({
              position: 'center',
              icon: 'success',
              title: 'Iniciando sesión',
              showConfirmButton: false,
              timer: 1800
            })
            setTimeout(function (){
              window.location.reload();
            }, 2000)
            
          }else if(response == "Wrong Password"){
            Swal.fire({
              position: 'center',
              icon: 'error',
              title: 'Contraseña incorrecta',
              showConfirmButton: false,
              timer: 1800
            })
          }else if(response == "User Not Registered"){
            Swal.fire({
              position: 'center',
              icon: 'warning',
              showCloseButton: false,
              title: `Este usuairo no existe, debes de <a href ="registro.php" class="noDecration orangeTx">
                        Crear una cuenta</a>`,
              showConfirmButton: false,
            })
          }else if(response == "User Has Already Taken"){
            Swal.fire({
              icon: 'warning',
              title: 'Este usuario ya existe',
              text: ' ¿Deseas iniciar sesión?',
              showConfirmButton: false,
              footer: '<a href="index.php" class ="noDecoration orangeTx boldTx">Iniciar sesión</a>',
            })
          }else if(response == "Registration Successful"){
            Swal.fire({
              icon: 'success',
              title: 'Registro Exitoso',
              text: 'Ahora puedes iniciar sesión',
              showConfirmButton: false,
            })
            setTimeout(function (){
              window.location.replace("index.php");
            }, 3000)
          }
        }
      }); // End Ajax
    }); // End BTN enviar function

  }); // End Document