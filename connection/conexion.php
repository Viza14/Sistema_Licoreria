<?php
// conexion a la base de datos usando PDO
$base_Datos = "licoreria"; //hay que cambiar el nombre de la base de datos a usar 
$usuario = "root";
$clave = "";
$host = "localhost"; //localhost o en mi caso 127.0.0.1:3307

try {
    $bd = new PDO("mysql:host=$host; dbname=$base_Datos", $usuario, $clave);
    //echo "se a conectado correctamente"; //es una manera mas segura de conectar

} catch (Exception $e) {
    echo 'Error de conexion' . $e->getMessage();
}
