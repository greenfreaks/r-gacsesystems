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


    <link rel="stylesheet" href="css/style.css">

    <title>Doctor Reminder</title>
</head>

<body>
    <div class="formsContainer">
        <section class="userReg boxShadow">
            <h1 class="orangeTx">Doctor Reminder</h1>
            <form action="" id="userReg__form" class="userReg__form">
                <p class="darkOrangeTx">Nombre</p>
                <input type="text" id="userReg__form--nombre">

                <p class="darkOrangeTx">Apellido paterno</p>
                <input type="text" id="userReg__form--ap">

                <p class="darkOrangeTx">Apellido materno</p>
                <input type="text" id="userReg__form--am">

                <p class="darkOrangeTx">Email</p>
                <input type="email" id="userReg__form--email">

                <p class="darkOrangeTx">Contraseña</p>
                <input type="password" id="userReg__form--psw1">

                <p class="darkOrangeTx">Confirme su contraseña</p>
                <input type="password" id="userReg__form--psw2">
            </form>
        </section>

        <section class="userLog">
            <h1 class="orangeTx">Doctor Reminder</h1>
            <form action="" id="userLog__form" class="userLog__form">
                <p>Email</p>
                <input type="email" id="userLog__form--email">

                <p>Contraseña</p>
                <input type="email" id="userLog__form--psw">
            </form>
        </section>
    </div>
    <footer class="whiteTx">

    </footer>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="js/nav.js"></script>
</body>

</html>