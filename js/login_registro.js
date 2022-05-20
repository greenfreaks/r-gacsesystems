function submitData(){
    $(document).ready(function(){
      var data = {
        name_medico: $("#medico_name").val(),
        email_medico: $("#medico_email").val(),
        pwd_medico: $("#medico_pdw1").val(),
        action: $("#action").val(),
      };

      $.ajax({
        url: 'php/login_registro.php',
        type: 'post',
        data: data,
        success:function(response){
          alert(response);
          console.log(response);
          if(response == "Login Successful"){
            window.location.reload();
          }
        }
      });
    });
  }