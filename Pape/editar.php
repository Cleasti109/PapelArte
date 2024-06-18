<?php
session_start();
if($_SESSION["email"] != "papeleria_mussme@hotmail.com"){
   header("location:IniciarSesion.php");
    exit();
}else{
require "conexiones.php";
require "acciones.php";
if(isset($_GET['id'])){
    $id=$_GET['id'];
}
$conexion=crearConexion();
$registro=consultarProducto($conexion,$id);    
    
    
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tu Tienda de Productos</title>
    <link type="text/css" rel="stylesheet" href="estilo/design4.css">
    <link rel="shortcut icon" href="pape.png">
    
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
    
    
</head>
<body>
    <header>
        <table width="2000px">
            <td width="300px">
                <a href="main.php"><img src="estilo/pape.png" alt="Foto de perfil" width="80px" height="80px" class="imgs"></a></td>
            
        <td colspan="3" align="center" class="pp">
            <label>Edición de almacenamiento<br>Papeleria el Estudiante</label>
            </td>
            
            <td align="right">
                
          <div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
    <img src="estilo/cuenta.png" width="50" height="50">
  </button>
  <ul class="dropdown-menu">
      <?php
    if($_SESSION["email"]=="papeleria_mussme@hotmail.com"){
      ?>
      <li><button class="dropdown-item" type="button"><a href="Admin.php">Administración</a></button></li><?php  
      }else{echo "STAFF ONLY";
        
    }?>
      <li><button class="dropdown-item" type="button"><a href="Funciones/logout.php">Cerrar Sesión</a></button></li>
  </ul>
            </div>      
            </td>
        </table>
    </header>
    
        <div id="prd">
    <fieldset class="tabl1" align="center">
        
        
    <form method="post" action="actualizar.php" enctype="multipart/form-data">
        
    <label for="producto">Producto</label><br>
    <input type="text" class="disp2" name="producto" value="<?php echo $registro["producto"];?>" required><br><br>
        
    <label for="catalogos">Catálogos</label><br>
    <select name="catalogos" class="disp2" placeholder="Catálogos" required>
                <option value="Arte">Arte</option>
                <option value="Infantil">Infantil</option>
                <option value="Fiesta">Fiesta</option>
                <option value="Didacticos">Didacticos</option>
                <option value="Electronica">Electronica</option>
                <option value="Merceria">Merceria</option>
                <option value="Joyeria">Joyeria</option>
                <optgroup label="alimentos">
                <option value="Bebidas">Bebidas</option>
                    <option value="Botana">Botana</option></optgroup>
                </select><br><br>
        
    <label for="cantidad">Cantidad</label><br>
    <input type="number" class="disp2" name="cantidad" value="<?php echo $registro["cantidad"];?>" required><br><br>
        
     <label for="marca">Marca</label><br>
    <input type="text" class="disp2" name="marca" value="<?php echo $registro["marca"]; ?>" required><br><br>
        
    <label for="price">Precio</label><br>
    <input type="number" class="disp2" name="price" value="<?php echo $registro["precio"];?>" required><br><br>
        
    <label for="imgn">Insertar imagén</label><br>
    <input type="file" class="disp2" name="imgn" value="<?php echo $registro["img"];?>" required><br><br>
        
        <label for="info">Información</label><br>
    <textarea name="info" class="int" required placeholder="Info del producto" maxlength="200"><?php echo $registro["info"];?></textarea><br>
        
    <input type="hidden" name="id" value="<?php echo $registro['id'];?>" required>  
        <button type="submit" onClick="return confirm(\'Seguro que deseas borrar?\')">Actualizar Producto</button>
        
        
        
        
        </form>    
        </fieldset></div>
    
    
    
        
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
<?php
}
?>