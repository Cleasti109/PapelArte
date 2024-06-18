<?php
//agregar las funciones
require "conexiones.php";
require "acciones.php";

//validar datos

if(isset($_POST['producto'])){
    $producto = $_POST['producto'];
}
if(isset($_POST['catalogos'])){
    $catalogos=$_POST['catalogos'];
}
if(isset($_POST["cantidad"])){
    $cantidad=$_POST['cantidad'];
}
if(isset($_POST["marca"])){
  $marca=$_POST['marca'];
}
if(isset($_POST["info"])){
  $info=$_POST['info'];
}
if(isset($_POST["id"])){
    $id=$_POST['id'];
}
if(isset($_POST["price"])){
$precio=$_POST['price'];
}
$img='';
if(isset($_FILES["imgn"])){
    $file=$_FILES["imgn"];
    $nombre=$file["name"];
    $tipo=$file["type"];
    $ruta_provisional=$file["tmp_name"];
    $size=$file["size"];
    $dimensiones =getimagesize($ruta_provisional);
    $width=$dimensiones[0];
    $height=$dimensiones[1];
$carpeta="fotos/";
if($tipo != 'image/.jpg' && $tipo != 'image/JPG' && $tipo != 'image/jpeg' && $tipo != 'image/png' && $tipo != 'image/gif'){
    echo "<script> alert('El archivo no es una imagen');</script>";
}
else if($size>3*1024*1024){
echo "Error, el tamaño máximo permitido es un 3MB";        
    }
else{
    $src=$carpeta.$nombre;
    move_uploaded_file($ruta_provisional,$src);
    $img="fotos/".$nombre;
}
}
//crar la conexion
$conexion=crearConexion();
//crear el contacto
$confirm = actualizarProducto($conexion, $id, $producto, $catalogos, $cantidad, $precio, $marca, $img, $info,);
?>
<html>
<head><meta charset='utf-8'>
             <link rel='stylesheet' type="text/css" href='estilo/design2.css'>
    <link rel="shortcut icon" href="pape.png"></head>
    <body>
        <fieldset class="err" align="center">
        <?php
        if($confirm){
            echo "Editado con exito";
        }else{
            echo "Error en la edicion";
        }?><br>
        
            <a href="Admin.php" class="boton">Volver al inicio</a></fieldset>
    </body>
</html>

<?php
    $conexion = null;
    ?>