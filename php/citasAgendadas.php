<?php
include "connection.php";
$query_citas = "SELECT * FROM `citas` INNER JOIN cita_estatus ce ON citas.fk_cita_estatus = ce.id_estatus 
WHERE fk_medico = '$id_medico'; ";
$result_citas = mysqli_query($con, $query_citas);
$total_citas = mysqli_num_rows($result_citas);
if($total_citas >= 1){
    while($citas = mysqli_fetch_assoc($result_citas)){?>
        <div class="card">
            <div class="cardHeader">
                <div class="cardTitle">
                    <h4 class="orangeTx"><?php echo $citas['nombre_paciente'] . " " . $citas["apellido_paciente"];?></h4>
                </div>
                <div class="cardBody">
                    <p class="cardBody__observaciones"><?php echo $citas['observaciones']?></p>
                    <p><b> Fecha de cita: </b><?php echo $citas['fecha_cita'];?></p>
                    <p><b> Hora: </b><?php echo $citas["hora_cita"];?></p>
                    <p><b> Estatus: </b><?php echo $citas["nombre_estatus"];?></p>
                </div>
        
                <div class="cardFooter">
                </div>
            </div>
        </div>
        <?php
    }
}else{?>
<h1 class="noCitas">Aún no tienes citas agendadas</h1>
<?php
}

?>