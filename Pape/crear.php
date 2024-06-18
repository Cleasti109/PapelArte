<?php
//agregar las funciones
require "conexiones.php";
require "Registro.php";

//validar datos

if(isset($_POST['usuario'])){
    $nombre = $_POST['usuario'];
}
if(isset($_POST['telefono'])){
    $telefono=$_POST['telefono'];
}
if(isset($_POST["email"])){
    $email=$_POST['email'];
}
if(isset($_POST["id"])){
    $id=$_POST['id'];
}
if(isset($_POST["password"])){
    $password=md5($_POST['password']);
}
//crar la conexion
$conexion=crearConexion();
//crear el contacto
$checo =checar($conexion, $email);

if(!empty($checo['email'])){  ?>
    <html>
                 <head><meta charset='utf-8'>
             <link rel='stylesheet' type="text/css" href='estilo/design2.css'>
                     <link rel="shortcut icon" href="pape.png">
                 </head>
             <body>
                 <br>
                 <fieldset class="err" align="center">
                     Cuenta existente<br>
                 <a href="Registrar.php">Regresar</a>
                 </fieldset></body></html><?php
}else {
$confirm = crearUsuario($conexion, $nombre, $telefono, $email, $password);?>

<html>
<head><meta charset='utf-8'>
             <link rel='stylesheet' type="text/css" href='estilo/design2.css'>
    <link rel="shortcut icon" href="pape.png"></head>
    <body>
        <fieldset class="err" align="center">
        <?php
        if($confirm){
            echo "HECHO";
        }else{
            echo "ERROR";
        }?><br>
        
            <a href="IniciarSesion.php" class="boton">Volver al inicio</a></fieldset>
    </body>
</html><?php
}


