<?php
include "../php/connection.php";
if(isset($_POST['action'])){
    if($_POST["action"] == "agendar")
    agendar();
}

function agendar(){
    global $con;
    $id_medico = $_SESSION["id_medico"];
    $nombre_paciente = trim($_POST['nombre_paciente']);
    $ap_paciente = trim($_POST['ap_paciente']);
    $edad_paciente = trim($_POST['edad_paciente']);
    $ap_paciente = trim($_POST['ap_paciente']);
    $localidad_paciente = trim($_POST['localidad_paciente']);
    $telefono_paciente = trim($_POST['telefono_paciente']);
    $email_paciente = trim($_POST['email_paciente']);
    $medioContacto_paciente = trim($_POST['medioContacto_paciente']);
    $fecha_cita = trim($_POST['fecha_cita']);
    $hora_cita = trim($_POST['hora_cita']);
    $observaciones_paciente = trim($_POST['observaciones_paciente']);

    /* ------- Preparando función para enviar el mail al administrador -------- */
    $sendUserMail = new clsMail();
    $bodyHTMLUser = "
    <h1>¡Cita agendada correctamente!</h1>
    <p>¡Qué tal {$nombre_paciente}!<p>
    <p>Tu cita ha quedado agendada</p>
    <p>Para el día <b>{$fecha_cita}</b> </p>
    <p>A las <b>{$hora_cita}</b></p>
    <p>Es muy importante que asistas <b>TU SALUD ES MUY VALIOSA</b>, pero si necesitas cancelar tu cita
    te pedimos que porfavor lo hagas con anticipación, ya que así le damos oportunidad a otras personas de agendar
    una cita.</p>
    <h4>¡Muchas gracias y recuerda cuidar tu salud en todo momento, nos vemos pronto ;)!</h4>
    ";

    $agendar_query = "INSERT INTO `citas` (`id_cita`, `fk_medico`, `nombre_paciente`, `apellido_paciente`, `edad_paciente`, `localidad_paciente`, `tel_paciente`, `email_paciente`, `medio_contacto`, `fecha_cita`, `hora_cita`, `observaciones`, `fk_cita_estatus`, `createdAt`, `modifiedAt`) 
    VALUES (NULL, '$id_medico', '$nombre_paciente', '$ap_paciente', '$edad_paciente', '$localidad_paciente', '$telefono_paciente', '$email_paciente', '$medioContacto_paciente', '$fecha_cita', '$hora_cita', '$observaciones_paciente', '1', current_timestamp(), NULL); ";

    $agendar_exec = mysqli_query($con, $agendar_query);
    if($agendar_exec){
        echo "Scheduled appointment";
        // Envío de correo a usuario
        $userSent = $sendUserMail->metEnviarUser(
        "Registro de cita médica", 
        "Tienes una cita agendada",
        "Tu salud es importante",
        $email_paciente,
        $bodyHTMLUser); 
        
    }else{
        echo "Failed appointment";
    }
}
?>