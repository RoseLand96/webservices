<?php
header( 'Content-Type: text/html;charset=utf-8' );

$db_host = "rmspavs8mpub7dkq.chr7pe7iynqr.eu-west-1.rds.amazonaws.com";
     $db_name = "n3ycfw3efefiynuy";
     $db_user = "g1wbv4e6yvi6e710";
     $db_password = "t2z30tum76qfgrzd";
    
     $connection = mysql_connect($db_host, $db_user, $db_password) or die("Connection Error: " . mysql_error());
    
mysql_select_db($db_name) or die("Error al seleccionar la base de datos:".mysql_error());
    @mysql_query("SET NAMES 'utf8'");
    $dia=strftime("%A");

if(isset($_POST["id_servicio"])  && $dia=="Monday" || $dia=="Lunes"){

$id_servicio = $_POST["id_servicio"];
$sql_query = "SELECT * from turnos24_lunes where id_servicio=$id_servicio;";
$result = mysql_query($sql_query);
$rows = array();
while($r = mysql_fetch_assoc($result)) {
  $rows[] = $r;
}
print json_encode($rows);
}
else if(isset($_POST["id_servicio"])  && $dia=="Tuesday" || $dia=="Martes"){

$id_servicio = $_POST["id_servicio"];
$sql_query = "SELECT * from turnos24_martes where id_servicio=$id_servicio;";
$result = mysql_query($sql_query);
$rows = array();
while($r = mysql_fetch_assoc($result)) {
  $rows[] = $r;
}
print json_encode($rows);
}else if(isset($_POST["id_servicio"])  && $dia=="Wednesday" || $dia=="Miercoles"){

$id_servicio = $_POST["id_servicio"];
$sql_query = "SELECT * from turnos24_miercoles where id_servicio=$id_servicio;";
$result = mysql_query($sql_query);
$rows = array();
while($r = mysql_fetch_assoc($result)) {
  $rows[] = $r;
}
print json_encode($rows);
}else if(isset($_POST["id_servicio"])  && $dia=="Thursday" || $dia=="Jueves"){

$id_servicio = $_POST["id_servicio"];
$sql_query = "SELECT * from turnos24_jueves where id_servicio=$id_servicio;";
$result = mysql_query($sql_query);
$rows = array();
while($r = mysql_fetch_assoc($result)) {
  $rows[] = $r;
}
print json_encode($rows);
}
else if(isset($_POST["id_servicio"])  && $dia=="Friday" || $dia=="Viernes"){

$id_servicio = $_POST["id_servicio"];
$sql_query = "SELECT * from turnos24_viernes where id_servicio=$id_servicio;";
$result = mysql_query($sql_query);
$rows = array();
while($r = mysql_fetch_assoc($result)) {
  $rows[] = $r;
}
print json_encode($rows);
}else if(isset($_POST["id_servicio"])  && $dia=="Saturday" || $dia=="Sábado"){

$id_servicio = $_POST["id_servicio"];
$sql_query = "SELECT * from turnos24_sabado where id_servicio=$id_servicio;";
$result = mysql_query($sql_query);
$rows = array();
while($r = mysql_fetch_assoc($result)) {
  $rows[] = $r;
}
print json_encode($rows);
}
else if(isset($_POST["id_servicio"])  && $dia=="Sunday" || $dia=="Domingo"){

$id_servicio = $_POST["id_servicio"];
$sql_query = "SELECT * from turnos24_domingo where id_servicio=$id_servicio;";
$result = mysql_query($sql_query);
$rows = array();
while($r = mysql_fetch_assoc($result)) {
  $rows[] = $r;
}
print json_encode($rows);
}
else
{
	echo "No existe el turno";
mysql_close($connection);
}
?>