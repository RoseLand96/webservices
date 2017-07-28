<?php include ('functions.php');
$sin_cubrir=$_GET['sin_cubrir'];
$cubrir=$_GET['cubrir'];
$fecha=$_GET['fecha_cob'];
$porcentaje24=$_GET['porcentaje12'];
$id_servicio=$_GET['id_servicio'];

ejecutarSQLCommand("INSERT INTO  `cobertura24` (cubrir,sin_cubrir,fecha_cob,porcentaje24,id_servicio)
VALUES ('$cubrir' ,'$sin_cubrir','$fecha','$porcentaje24','$id_servicio')

 ON DUPLICATE KEY UPDATE `cubrir`= '$cubrir',`sin_cubrir`='$sin_cubrir',`fecha_cob`='$fecha',`porcentaje24`='$porcentaje24',`id_servicio`='$id_servicio';");

 ?>