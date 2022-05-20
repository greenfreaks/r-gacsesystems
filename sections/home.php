<?php
ini_set('display_errors','Off');
ini_set('error_reporting', E_ALL );
define('WP_DEBUG', false);
define('WP_DEBUG_DISPLAY', false);
require '../php/login_registro.php';
if(isset($_SESSION["id_medico"])){
  $id_medico = $_SESSION["id_medico"];
  $user = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM medicos WHERE id_medico = $id_medico"));
}
else{
  header("Location: ../index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />

  <meta name="keywords" content="WEB, SOFTWARE, ARTE, TECNOLOGÍA, DISEÑO, HTML, DIGITAL, INNOVACIÓN">

  <meta name="description" content="Empresa dedicada al desarrollo de software, desarrollo web, 
    creación de contenido multimedia y venta playeras con diseños intrépidos">


  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


  <link rel="stylesheet" href="../css/style.css">

  <title>HOME</title>
</head>

<body>
  <!-- Se llama a la plantilla del sidenav -->
  <?php include "../view-templates/sidenav.php"?>

  <div class="appBodyContent">
    <section class="cardSection">

      <!-- Citas generadas dinámicamente desde el siguiente archivo: -->
      <?php include "../php/citasAgendadas.php";?>

    </section>
  </div>

  <footer class="whiteTx">

  </footer>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous">
  </script>
  <script src="../js/sidebar.js"></script>
</body>

</html>