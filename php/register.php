<?php
include "connection.php";
if(isset($_POST['submit'])){
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $pwd = $_POST['psw'];

    $query_userExist = "SELECT * FROM medicos WHERE email_medico = '$email'";
    $verify_userExist = mysqli_query($con, $query_userExist);
    $result_userExist = mysqli_num_rows($verify_userExist);

    if($result_userExist == 1){
        echo "El correo ya existe";
    }else{
        $insert_query = "INSERT INTO medicos(name_medico, email_medico, pwd_medico) VALUES('$nombre', '$email', '$pwd')";
        $query_execute = mysqli_query($con, $insert_query);
    }
        

    
}
?>