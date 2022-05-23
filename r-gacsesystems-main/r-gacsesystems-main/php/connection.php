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

// Se incluye clase para el envío de correos
include "PHPMailer/clsMail.php";

ini_set('display_errors','Off');
ini_set('error_reporting', E_ALL );
define('WP_DEBUG', false);
define('WP_DEBUG_DISPLAY', false);
?>