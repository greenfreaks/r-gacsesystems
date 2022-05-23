<?php
require 'login_registro.php';
if(isset($_SESSION["id_medico"])){
  $id_medico = $_SESSION["id_medico"];
  $user = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM medicos WHERE id_medico = $id_medico"));
}
else{
  header("Location: ../index.php");
}
?>