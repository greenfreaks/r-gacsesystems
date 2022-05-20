<?php require "../php/verify_activeSesson.php"?>
<!DOCTYPE html>
<html lang="en">

<!-- HEAD -->
<?php include "../view-templates/head.php"?>

<body>
    <!-- SIDENAV -->
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

                <input type="submit" onclick="agendar();" id="agendarForm__submit" class="smBtn bgDarkBlue whiteTx"
                    value="Agendar">
            </form>
        </section>
    </div>

    <!-- SCRIPTS -->
    <?php include "../view-templates/scripts.php"?>
</body>

</html>