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
        <!-- Button Modal Agendar Cita -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal_agendar">
            Nueva Cita <i class="fas fa-plus"></i>
        </button>

        <!-- Modal Agendar cita -->
        <?php include "../include-views/dynamic-views/Home_modalCitas.php"?>

        <div class="space"></div>

        <section class="cardSection row">
            <?php include "../include-views/dynamic-views/Home_cardsCitas.php";?>
            
            <!-- Citas generadas dinámicamente desde el siguiente archivo: -->
        </section>
    </div>
    <?php include "../include-views/template-views/footer.php"?>
    <?php include "../include-views/template-views/scripts.php"?>
</body>

</html>