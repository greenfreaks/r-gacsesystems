<?php
session_start();

$host = "localhost";
$user = "root";
$pass = "";
$db = "dr_reminder";

$con = mysqli_connect($host, $user, $pass, $db);

// if($con){
//     echo "Conexión exitosa";
// }else{
//     echo "Falló conexión";
// }
?>