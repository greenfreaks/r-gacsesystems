<?php
include "connection.php";
$query_citas = "SELECT * FROM `citas` INNER JOIN cita_estatus ce ON citas.fk_cita_estatus = ce.id_estatus 
WHERE fk_medico = '$id_medico'
AND fk_cita_estatus = 1 OR fk_cita_estatus = 2 OR fk_cita_estatus = 3
ORDER BY `citas`.`fecha_cita` ASC, `citas`.`hora_cita` ASC";
$result_citas = mysqli_query($con, $query_citas);
$total_citas = mysqli_num_rows($result_citas);?>
<h3>Citas próximas: <?php echo $total_citas?></h3>
<?php

if($total_citas >= 1){
    while($citas = mysqli_fetch_assoc($result_citas)){
        $datos = $citas['id_cita']. "||". $citas['nombre_paciente']. "||". $citas['apellido_paciente']. "||". $citas['edad_paciente']. "||".
            $citas['localidad_paciente']. "||". $citas['tel_paciente']. "||". $citas['email_paciente']. "||". $citas['medio_contacto']. "||".
            $citas['fecha_cita']. "||". $citas['hora_cita']. "||". $citas['observaciones']. "||". $citas['nombre_estatus']. "||". 
            $citas['createdAt']. "||". $citas['modified_at'];
    ?>

<div class="card">
    <div class="cardTitle">
        <h4><?php echo $citas['nombre_paciente']. " ". $citas['apellido_paciente']?></h4>
        <h5 class="lightGrayTx"><?php echo $citas['edad_paciente']. " " . "años" ?></h5>
    </div>
    <div class="cardBody">
        <div class="cardBody__appointment">
            <h6><i class="fas fa-calendar-alt"></i> <?php echo $citas['fecha_cita']?></h6>
            <div class="space"></div>
            <h6><i class="fas fa-alarm-clock"></i> <?php echo $citas['hora_cita']?></h6>
        </div>
        <div class="cardBody__contact">
            <h6><i class="fas fa-phone-alt"></i> <?php echo $citas['tel_paciente']?></h6>
            <div class="space"></div>
            <h6><i class="fas fa-envelope"></i> <?php echo $citas['email_paciente']?></h6>
        </div>
    </div>
    <div class="space"></div>
    <div class="cardFooter">
    <h6><i class="fas fa-envelope"></i> <?php echo $citas['nombre_estatus']?></h6>
    </div>
</div>

<?php
    }
}else{?>
<h1 class="noCitas">Aún no tienes citas agendadas</h1>
<?php
}

?>