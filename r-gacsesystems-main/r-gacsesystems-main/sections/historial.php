<?php require "../php/verify_activeSesson.php"?>
<!DOCTYPE html>
<html lang="en">

<!-- Head -->
<?php include "../include-views/template-views/head.php"?>

<body>
    <!-- NAVBAR -->
    <?php include "../include-views/template-views/navbar.php"?>

    <!-- BODY CONTENT -->
    <div class="appBodyContent">
        <h3 class="darkBlueTx cTx">Historial de citas médicas.</h3>
        <div class="tableSection table-responsive">
            <table class="table sticky table-striped table-hover">
                <thead class="">
                    <tr>
                        <th>Estatus de la cita</th>
                        <th>Nombre del paciente</th>
                        <th>Apellido</th>
                        <th>Edad</th>
                        <th>Localidad</th>
                        <th>Teléfono</th>
                        <th>Email</th>
                        <th>Medio en que agendó la cita</th>
                        <th>Fecha de la cita</th>
                        <th>Hora de la cita</th>
                        <th>Observaciones</th>
                        <th>Fecha de creación</th>
                        <th>Fecha de modificación</th>
                    </tr>
                </thead>
                <tbody class="searchIn">
                    <?php include "../include-views/dynamic-views/Historial_tabla.php"?>
                </tbody>
            </table>
        </div>
    </div>
    <?php include "../include-views/template-views/footer.php"?>
    <?php include "../include-views/template-views/scripts.php"?>
</body>

</html>