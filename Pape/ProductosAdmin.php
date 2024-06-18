<?php
session_start();
if(empty($_SESSION["email"])){
   header("location:IniciarSesion.php");
    exit();
}else{
require "conexiones.php";
require "Prueba/Registro.php";
//Crear la conexion a la base
$conexion = crearConexion();

//Mostrar registros y obtener el total
$registros = mostrarUsuario($conexion);
//$totalContactos = totalContactos($conexion);

    
    
    
    
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
            <td width="200px">
                <a href="main.php"><img src="estilo/pape.png" alt="Foto de perfil" width="80px" height="80px" class="imgs"></a></td>
            
        <td colspan="3" align="center" class="pp">
            <label>Administración de almacenamiento y de usuario<br>Papeleria el Estudiante</label>
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
      }else{echo "usted no es administrador";
        
    }?>
      <li><button class="dropdown-item" type="button"><a href="Funciones/logout.php">Cerrar Sesión</a></button></li>
  </ul>
            </div>      
            </td>
        </table>
    </header>
    
    <fieldset class="tabl1" align="center">
    <a href="Admin.php"><button type="button">Usuarios</button></a>
    <br>
    <fieldset class="tabl">
    <table width="1225px" class="usuarios">
        <thead>
            <tr>
            <th >Nombre</th>
                <th >Telefono</th>
                <th >E-mail</th>
                <th>Contraseña</th>
                
            </tr>
            </thead>
            <tbody>
            <?php
                //recoger todos los registros
                foreach($registros as $reg){
                    echo '<tr>';
                    
                    echo '<td>'.$reg['usuario'].'</td>';
                    
                    echo '<td>'.$reg['telefono'].'</td>';
                    
                    echo '<td>'.$reg['email'].'</td>';
                    
                    echo '<td>'.$reg['password'].'</td>';
                    
                    /*echo '<td><a href="editar.php?id='.$reg['id'].'">Editar</a></td>';
                    
                    echo '<td class="borrar><a href="borrar".php?d='.$reg['id'].'" onClick="return confirm(\'Seguro que deseas borrar?\')">Borrar</a></td>';*/
                    
                    echo '</tr>';
                }?>
            </tbody>
        </table>
    </fieldset>
    </fieldset>
    
    <footer>
        <!-- Puedes dejar este espacio en blanco o agregar otro contenido si lo deseas -->
    </footer>
        
   <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
<?php
}
?>