<?php
date_default_timezone_set('America/Bogota');
include("conection.php");
$con=conectar();

$id = $_POST['id'];
$nombre=$_POST['nombre'];
$email=$_POST['email'];
$edad=$_POST['edad'];
$sexo=$_POST['sexo'];
$direccion=$_POST['direccion'];
$fecha_modificacion=date("y-d-m h:i:s");

$sql="UPDATE usuarios SET  nombre='$nombre',email='$email',edad='$edad', sexo='$sexo', direccion='$direccion', fecha_modificacion='$fecha_modificacion'  WHERE id='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: index.php");
    }
?>