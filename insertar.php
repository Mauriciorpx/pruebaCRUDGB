<?php
include "mcript.php";
date_default_timezone_set('America/Bogota');
include("conection.php");
$con=conectar();

$id = null;
$nombre=$_POST['nombre'];
$email=$_POST['email'];
$edad=$_POST['edad'];
$sexo=$_POST['sexo'];
$direccion=$_POST['direccion'];
$fecha_creacion=date("y-d-m h:i:s");
$fecha_modificacion=date("y-d-m h:i:s");
$usuario =$_POST['usuario'];
$clave =$_POST['clave'];
$usuarioenc =$encriptar($usuario); 
$claveenc =$encriptar($usuario); 
/* $usuario =$_POST[$encriptar('usuario')];
$clave =$_POST[$encriptar('clave')]; */

$sql="INSERT INTO usuarios VALUES ('$id', '$nombre', '$email', '$edad', '$sexo', '$direccion', '$fecha_creacion', '$fecha_creacion', '$usuarioenc', '$claveenc')";
$query = mysqli_query($con,$sql);

if($query){
    Header("Location: index.php");
}
?>