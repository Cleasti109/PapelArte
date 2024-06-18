<?php
function crearConexion(){
$conexion=null;
$servidor='localhost';
$bd='papelarte'; //Se pone el nombre de la base de datos
$user='root';
$pass='';
try{
    //crear un objeto utilizando PHP Data Object(PDO) con una cadena de conexion, usuario y contraseña
$conexion = new PDO("mysql:host=".$servidor.";dbname=".$bd, $user, $pass);
}catch(PDOException $e){
die('Error:' . $e->getMessage());
exit;
}
return $conexion;
}
?>