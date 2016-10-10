<?php
$documento=$_POST["documento"];
$nombre=$_POST["nombre"];
$apellido=$_POST["apellido"];
$fecha_nacimiento=$_POST["fecha_nacimiento"];
$celular=$_POST["celular"];
$rh=$_POST["rh"];

$sql= "INSERT INTO tb_usuario (documento,nombre,apellido,fecha_nacimiento,celular,rh)";
$sql .="VALUES ('$documento','$nombre','$apellido','$fecha_nacimiento','$celular','$rh')";
$conexion=mysqli_connect("localhost","root","","bd_analizi");
$resultado=$conexion->query($sql);
#echo $sql;

if ($conexion -> affected_rows >0){
	echo"ya se guardo los datos";

 }
 else
 {
  echo"no se guardo los datos";
 }
 ?>
 <a href="ejemplo_insert.html">volver</a>