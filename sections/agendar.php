<?php
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

    <title>Agendar Cita</title>
</head>

<body>
    <?php include "../view-templates/sidenav.php"?>
    <div class="appBodyContent">
        <section class="agendar">
            <form id="agendarForm" class="agendarForm boxShadow">
                <input type="hidden" id="action" value="agendar">
                <h1 class="darkBlueTx alignCenter">Registro de Cita</h1>
                <h5> <i class="fas fa-user-injured"></i> Nombre del paciente</h5>
                <input type="text" id="agendarForm__nombre" name="nombre">

                <h5> <i class="fas fa-users-medical"></i> Apellidos</h5>
                <input type="text" id="agendarForm__apellidos" name="apellidos">

                <h5> <i class="fas fa-user-clock"></i> Edad</h5>
                <input type="number" id="agendarForm__edad" name="edad">

                <h5> <i class="fas fa-building"></i> Localidad</h5>
                <input type="text" id="agendarForm__localidad" name="localidad">

                <h5> <i class="fas fa-phone-alt"></i> Teléfono</h5>
                <input type="text" id="agendarForm__telefono" name="telefono">

                <h5> <i class="fas fa-at"></i> E-mail</h5>
                <input type="text" id="agendarForm__email" name="mail">

                <h5> <i class="fas fa-ballot-check"></i> Medio de contacto en que solicitó la cita</h5>
                <select id="agendarForm__medioContacto" name="medio">
                    <option disabled>Selecciona una opción</option>
                    <option value="Teléfono">Teléfono</option>
                    <option value="Email">Email</option>
                    <option value="Recepción">Recepción</option>
                </select>

                <h5> <i class="fas fa-calendar-day"></i> Día de la cita</h5>
                <input type="date" id="agendarForm__fecha">

                <h5> <i class="fas fa-clock"></i> Hora de la cita</h5>
                <input type="time" id="agendarForm__hora">

                <h5> <i class="fas fa-pen-alt"></i> Observaciones</h5>
                <textarea name="observaciones" id="agendarForm__observaciones"></textarea>

                <input type="submit" onclick="agendar();" id="agendarForm__submit" class="smBtn bgDarkBlue whiteTx" value="Agendar">
            </form>
        </section>
    </div>

    <footer class="whiteTx">

    </footer>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous">
    </script>
    <script src="../js/sidebar.js"></script>
    <script src="../js/agendarCita.js"></script>
</body>

</html>