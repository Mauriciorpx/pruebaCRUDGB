<?php
    include("conection.php");
    $con = conectar();

    $sql="SELECT * FROM usuarios";

    $query=mysqli_query($con,$sql);
    
    /* $row=mysqli_fetch_array($query); */
    


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-3">
                <h1>Ingresar Datos</h1>
                <form action="insertar.php" method="POST">
                    
                    <input type="text" class="form-control mb-3" name= "nombre" placeholder = "Nombre">
                    <input type="text" class="form-control mb-3" name= "email" placeholder = "Correo Electronico">
                    <input type="text" class="form-control mb-3" name= "edad" placeholder = "Edad">
                    <input type="text" class="form-control mb-3" name= "sexo" placeholder = "Sexo">
                    <input type="text" class="form-control mb-3" name= "usuario" placeholder = "Usuario">
                    <input type="text" class="form-control mb-3" name= "clave" placeholder = "Clave">
                    <input type="text" class="form-control mb-3" name= "direccion" placeholder = "Direccion">

                    <input type="submit" class="btn btn-primary" value ="Registrar Usuario">
                </form>
            </div>
            <div class="col-md-8">
                <h1>Usuarios</h1>
                <table class="table">
                    <thead class="table-success table-striped">
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Correo</th>
                            <th>Edad</th>
                            <th>Sexo</th>
                            <th>Direccion</th>
                            <th>Fecha de Creacion</th>
                            <th>Ultima Modificacion</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            while($row=mysqli_fetch_array($query)){
                        ?>
                        <tr>
                            <th><?php echo $row ['id']?></th>
                            <th><?php echo $row ['nombre']?></th>
                            
                            
                            <th><?php echo $row ['email'] ?></th>
                            <th><?php echo $row ['edad'] ?></th>
                            <th><?php echo $row ['sexo'] ?></th>
                            <th><?php echo $row ['direccion'] ?></th>
                            <th><?php echo $row ['fecha_creacion'] ?></th>
                            <th><?php echo $row ['fecha_modificacion'] ?></th>
                            <th><a href="edit.php?id=<?php echo $row['id'] ?>" class="btn btn-info">Editar</a></th>
                            <th><a href="delete.php?id=<?php echo $row['id'] ?>"class="btn btn-danger">Eliminar</a></th>
                        </tr>
                        <?php 
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>