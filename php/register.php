<?
include "connection.php";
$name = $POST['name'];
$email = $POST['email'];
$psw = $POST['psw'];

$queryRegister = "INSERT INTO medicos('name_medico', 'email_medico', 'pwd_medico') values($name, $email, $psw)";
$sendRegister = mysqli_query($connection, $queryRegister);
?>