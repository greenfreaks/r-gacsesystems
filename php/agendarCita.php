<?php
include "../php/connection.php";
if(isset($_POST['action'])){
    if($_POST["action"] == "agendar")
    agendar();
}

function agendar(){
    global $con;
    $nombre_paciente = trim($_POST['nombre_paciente']);
    $id_medico = $_SESSION["id_medico"];
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

    $agendar_query = "INSERT INTO `citas` (`id_cita`, `fk_medico`, `nombre_paciente`, `apellido_paciente`, `edad_paciente`, `localidad_paciente`, `tel_paciente`, `email_paciente`, `medio_contacto`, `fecha_cita`, `hora_cita`, `observaciones`, `fk_cita_estatus`, `createdAt`, `modifiedAt`) 
    VALUES (NULL, '$id_medico', '$nombre_paciente', '$ap_paciente', '$edad_paciente', '$localidad_paciente', '$telefono_paciente', '$email_paciente', '$medioContacto_paciente', '$fecha_cita', '$hora_cita', '$observaciones_paciente', '1', current_timestamp(), NULL); ";

    $agendar_exec = mysqli_query($con, $agendar_query);
    if($agendar_exec){
        echo "Cita Creada";
    }else{
        echo "Falló el registro";
    }
}
?>