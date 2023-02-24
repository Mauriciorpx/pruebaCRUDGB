# pruebaCRUDGB

# CRUD PHP

## Programas necesarios:

## XAMPP
Link de descarga: https://www.apachefriends.org/es/download.html
PHP Version 8.0.25

##MySql
Enlace de descarga:
https://dev.mysql.com/downloads/mysql/

Ejectutar XAMPP, iniciar apache y mysql

En el navegador (preferiblemente google chrome) en la barra de direcciones ingresar a localhost y a continuacion ingresar a phpMyAdmin (parte superior derecha)


## Crear base de datos

### Script:

CREATE DATA BASE users-crud

Ingresar a la base de datos y Crear tabla para usuarios:


CREATE TABLE `users-crud`.`usuarios` (`id` INT NOT NULL AUTO_INCREMENT , `nombre` VARCHAR(20) NOT NULL , `email` VARCHAR(40) NOT NULL , `edad` INT NOT NULL , `sexo` VARCHAR(20) NOT NULL , `direccion` VARCHAR(20) NOT NULL , `fecha_creacion`VARCHAR(20) NOT NULL , `fecha_modificacion` VARCHAR(20) NOT NULL, `usuario` VARCHAR(20) NOT NULL,  `clave` VARCHAR(20) NOT NULL, PRIMARY KEY (`id`)) ENGINE = InnoDB;

La carpeta del proyecto debe ser colocada en la carpeta htdocs de Xammp, si la instalacion se realizó por defecto, deberá encontrarse en la siguiente ruta:

C:\xampp\htdocs

A continuacion abrir el navegador e ingresar a la siguiente ruta

http://localhost/prueba-CRUD/index.php