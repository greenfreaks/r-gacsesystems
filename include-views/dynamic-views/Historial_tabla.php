<?php
include "connection.php";
$query_historial = "SELECT * FROM `citas` INNER JOIN cita_estatus ce ON citas.fk_cita_estatus = ce.id_estatus
WHERE fk_medico = '$id_medico'
ORDER BY citas.createdAt ASC";
$result_historial = mysqli_query($con, $query_historial);
$total_historial = mysqli_num_rows($result_historial);?>
<h4>Citas totales: <?php echo $total_historial?></h4>
<?php

if($total_historial >= 1){
    while($historial = mysqli_fetch_assoc($result_historial)){?>

<tr>
    <td><?php echo $historial['nombre_estatus']?></td>
    <td><?php echo $historial['nombre_paciente']?></td>
    <td><?php echo $historial['apellido_paciente']?></td>
    <td><?php echo $historial['edad_paciente']?></td>
    <td><?php echo $historial['localidad_paciente']?></td>
    <td><?php echo $historial['tel_paciente']?></td>
    <td><?php echo $historial['email_paciente']?></td>
    <td><?php echo $historial['medio_contacto']?></td>
    <td><?php echo $historial['fecha_cita']?></td>
    <td><?php echo $historial['hora_cita']?></td>
    <td><?php echo $historial['observaciones']?></td>
    <td><?php echo $historial['createdAt']?></td>
    <td><?php echo $historial['modifiedAt']?></td>
</tr>

<?php
    }
}else{?>
<h4 class="noCitas">Aún no tienes citas agendadas</h4>
<?php
}

?>