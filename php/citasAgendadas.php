<?php
include "connection.php";
function citasPendientes(){
    include "connection.php";
    $result = array();
    $result ['error'] = false;
    $result ['mensaje'] = "";
    $result['citasPendientes'] =
    $citas = [];
    $citas_query = "SELECT * FROM citas WHERE fk_cita_estatus =  1 AND fk_cita_estatus =  2 AND fk_cita_estatus =  3";
    $citas_execute = mysqli_query($con, $citas_query);
    while($row_citas = $citas_execute->fetch_assoc()){
        $cita = array();
        $cita['id_cita'] = $row_citas['id_cita'];
    }
}
?>