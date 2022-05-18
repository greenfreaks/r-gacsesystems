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
    <header class="header">
        <nav id="navHome" class="header__nav boxShadow">
            <div class=" header__nav--logo">
                <a href="" class="noDecoration greenTx boldTx"><img src="assets/img/index-logo-min.png" alt=""></a>
            </div>
            <ul class="header__nav--content noList">
                <li><a href="#" class="noDecoration active orangeTx boldTx">Inicio</a></li>
                <li><a href="sections/slider_web.html" class="noDecoration blackTx">Servicios</a></li>
                <li><a href="sections/contacto.html" class="noDecoration blackTx">Contacto</a></li>
                <ul class="noList">
                    <li><a href="" class="noDecoration whiteTx">LogIn</a> <b class="whiteTx">/</b>
                        <a href="" class="noDecoration whiteTx">Registrate</a></li>
                </ul>
            </ul>
            <div class="header__nav--burger">
                <div class="header__nav--burger-1"></div>
                <div class="header__nav--burger-2"></div>
                <div class="header__nav--burger-3"></div>
            </div>
        </nav>
    </header>

    <div class="space"></div>

    <div class="formsContainer">
        <section id="userLog" class="userLog boxShadow">
            <form action="" id="userLog__form" class="userLog__form">
                <div class="userLog__formImg">
                    <img src="assets/img/index-login-min.png" alt="">
                </div>
                <div class="userLog__formData">
                    <img src="assets/img/index-logo-min.png" alt="">
                    <p class="darkOrangeTx">Email</p>
                    <input type="text" id="userLog__form--nombre">

                    <p class="darkOrangeTx">Contraseña</p>
                    <input type="email" id="userLog__form--email">

                    <button type="submit" class="lgBtn bgDarkOrange whiteTx">Ingresar</button>
                    <p class="lightGrayTx alignCenter">¿Aún no tienes una cuenta?</p>
                    <p id="btnRegistrate" class="darkOrangeTx pointer alignCenter">Regístrate</p>
                </div>
            </form>
        </section>

        <section id="userReg" class="userReg boxShadow">
            <form action="" id="userReg__form" class="userReg__form">
                <div class="userReg__formImg">
                    <img src="assets/img/index-reg-min.png" alt="">
                </div>
                <div class="userReg__formData">
                    <img src="assets/img/index-logo-min.png" alt="">
                    <p class="darkOrangeTx">Nombre Completo</p>
                    <input type="text" id="userReg__form--nombre">

                    <p class="darkOrangeTx">Email</p>
                    <input type="email" id="userReg__form--email">

                    <p class="darkOrangeTx">Contraseña</p>
                    <input type="password" id="userReg__form--psw1">

                    <p class="darkOrangeTx">Confirme su contraseña</p>
                    <input type="password" id="userReg__form--psw2">

                    <button type="submit" class="lgBtn bgDarkBlue whiteTx">Registrarse</button>

                    <p class="lightGrayTx alignCenter">¿Ya tienes una cuenta?</p>
                    <p id="btnIngresar" class="darkBlueTx pointer alignCenter">Ingresa</p>
                </div>
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
    <script src="js/log_reg.js"></script>
</body>

</html>