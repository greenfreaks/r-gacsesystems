<?php require "../php/verify_activeSesson.php"?>
<!DOCTYPE html>
<html lang="en">
<?php include "../view-templates/head.php"?>

<body>
  <!-- Se llama a la plantilla del sidenav -->
  <?php include "../view-templates/sidenav.php"?>

  <div class="appBodyContent">
    <section class="cardSection">

      <!-- Citas generadas dinámicamente desde el siguiente archivo: -->
      <?php include "../php/citasAgendadas.php";?>

    </section>
  </div>
  <?php include "../view-templates/scripts.php"?>
</body>

</html>