<?php
//  creamos variables para conectarnos con la base de datos -->

$host= "192.168.100.108";
$bd= "db_registros"; //nombre de la base de datos
$usuario="root";
$contrasenia="123456";

try {
  $conexion = new PDO("mysql:host=$host;dbname=$bd",$usuario,$contrasenia,$nombre, $apellido, $email); //PDO se utiliza para comunicar directamente con la base de datos

} catch (Exception $ex) { //en caso si existe un error
  echo $ex->getMessage(); //imprima el error que se provoco
}

  ?>
