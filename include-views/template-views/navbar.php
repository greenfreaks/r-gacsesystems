<nav id="navHome" class="header__nav boxShadow">
    <div class=" header__nav--logo">
        <img src="../assets/img/index-logo-min.png" alt="">
    </div>
    <ul class="header__nav--content noList">
        <li><a href="home.php" class="noDecoration whiteTx boldTx">Agendar Cita</a></li>
        <li><a href="historial.php" class="noDecoration whiteTx boldTx">Historial de citas</a></li>
        <li class="darkBlueTx boldTx"><i class="fas fa-user"></i> <?php echo $user['name_medico']?></li>
        <li><a href="../php/logout.php"><i class="fas fa-power-off orangeTx boldTx"></i></a></li>
    </ul>
    <div class="header__nav--burger">
        <div class="header__nav--burger-1"></div>
        <div class="header__nav--burger-2"></div>
        <div class="header__nav--burger-3"></div>
    </div>
</nav>