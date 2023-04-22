
<?php 


// validacion datos del servidor 
$user ="root";
$pass="";
$host="localhost";
$tabla_name="paguina"
// conexion a la base de datos

$connection=mysqli_connect($user,$pass,$host,$tabla_name);
	
// verificacionn de conexion
if ($connection) {
die("No se ha podido connectar a la base de datos:".mysql_error());


$db_subs_last=utt8_decode  ($_POST['nombre']);
$db_subs_last=utt8_decode($_POST['email']);
$db_subs_last=utt8_decode  ($_POST['asunto']);
$db_subs_last=utt8_decode($_POST['pais']);
$db_subs_last=utt8_decode  ($_POST['mensaje']);
$db_resultado=mysql_query(" $connection, "SELECT*FROM".""," $tabla_name"  $db_subs_last");

if (mysqli_num_rows($resultado)>0) {
	echo "Fallo";
}else{
	$insert_value=INSERT INTO ."db_tabla_name."('nombre','apellido','contraseña')VALUES("".$db_subs_last."");

mysqli_select_db($db_connection);
$retry_value=mysqli_query($insert_value,$db_connection);
if ($retry_value) {
die('Error:' .mysqli_error());
}
header_close($db_connection);
?>