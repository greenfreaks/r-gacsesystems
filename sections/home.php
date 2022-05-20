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

  <title>HOME</title>
</head>

<body>
  <?php include "../view-templates/sidenav.php"?>
  <div class="appBodyContent">
    <section class="cardSection">
      <div class="card">
        <div class="cardHeader">
          <div class="cardTitle">
            <h4 class="orangeTx">Título</h4>
          </div>
          <div class="cardBody">
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eos, qui dolore totam commodi inventore dolor
              laboriosam laborum odit saepe! Nesciunt vero enim maxime, ipsa voluptas debitis illo dicta ad rerum!
            </p>

            <a href="">algo</a>
          </div>

          <div class="cardFooter">
            <p>2 de febrero 2020</p>
          </div>
        </div>
      </div>

      <div class="card">
        <div class="cardHeader">
          <div class="cardTitle">
            <h4 class="orangeTx">Título</h4>
          </div>
          <div class="cardBody">
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eos, qui dolore totam commodi inventore dolor
              laboriosam laborum odit saepe! Nesciunt vero enim maxime, ipsa voluptas debitis illo dicta ad rerum!
            </p>

            <a href="">algo</a>
          </div>

          <div class="cardFooter">
            <p>2 de febrero 2020</p>
          </div>
        </div>
      </div>

      <div class="card">
        <div class="cardHeader">
          <div class="cardTitle">
            <h4 class="orangeTx">Título</h4>
          </div>
          <div class="cardBody">
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eos, qui dolore totam commodi inventore dolor
              laboriosam laborum odit saepe! Nesciunt vero enim maxime, ipsa voluptas debitis illo dicta ad rerum!
            </p>

            <a href="">algo</a>
          </div>

          <div class="cardFooter">
            <p>2 de febrero 2020</p>
          </div>
        </div>
      </div>

      <div class="card">
        <div class="cardHeader">
          <div class="cardTitle">
            <h4 class="orangeTx">Título</h4>
          </div>
          <div class="cardBody">
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eos, qui dolore totam commodi inventore dolor
              laboriosam laborum odit saepe! Nesciunt vero enim maxime, ipsa voluptas debitis illo dicta ad rerum!
            </p>

            <a href="">algo</a>
          </div>

          <div class="cardFooter">
            <p>2 de febrero 2020</p>
          </div>
        </div>
      </div>



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