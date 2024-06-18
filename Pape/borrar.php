<?php
require "conexiones.php";
require "acciones.php";
if(isset($_GET['id'])){
    $id=$_GET['id'];
}
$conexion = crearConexion();
$confirm = borrarContacto($conexion, $id);
?>
<html>
    <head>
    <meta charset="utf-8">
    
    </head>
<body>
<?php
    if($confirm){
        echo "Contacto Eliminado";
    }else{echo "Error al eliminarar el registro";
         }?>
    <!--boton para volver-->
<?php
    $conexion = null;
    ?>
    </body>
</html>