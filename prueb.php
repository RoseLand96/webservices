<?php
$db_host = "localhost";
$db_name = "osp";
$db_user = "root";
$db_password = "";
$connection = mysql_connect($db_host, $db_user, $db_password) or die("Connection Error: " . mysql_error());
mysql_select_db($db_name) or die("Error al seleccionar la base de datos:".mysql_error());
@mysql_query("SET NAMES 'utf8'");

if(isset($_POST["id_servicio"])){

$id_servicio = $_POST["id_servicio"];
$sql_query = "SELECT * FROM servicio WHERE id_servicio=$id_servicio;";
$result = mysql_query($sql_query);
$rows = array();
while($r = mysql_fetch_assoc($result)) {
$rows[] = $r;
}
print json_encode($rows);
}else
echo "No existe el serv";
mysql_close($connection);
?>