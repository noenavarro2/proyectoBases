<?php
//Recuperamos datos del formulario
$tiu1=$_POST['cbox1'];
//$tiu2=$_POST['cbox2'];
//$tiu3=$_POST['cbox3'];
$nom=$_POST['nombrere'];
$dni=$_POST['usuariore'];
$cla=$_POST['clavere'];
$fen=$_POST['fechare'];
if($tiu1==0){
	$tuse = "Profesor";
}
if($tiu1==1){
	$tuse = "Alumno";
}
if($tiu1==2){
	$tuse= "SAT";
}
//conectamos con la BD
include("conexion.php");
//creamos consulta
$sql="INSERT INTO usuarios(tipoUsuario, nombre,dni,clave,fechaNacimiento) VALUES ('$tuse','$nom','$dni','$cla','$fen')";
//ejecutamos la consulta
mysqli_query($conexion,$sql) or die("Error en la
consulta de inserción $sql");
//cerramos la conexion
mysqli_close($conexion);
//redirigeremos a la pagina inicial
header("location:index.php");
?>           