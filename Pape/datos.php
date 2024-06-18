<?php
session_start();
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
            <td width="200px">
                <a href="main.php"><img src="estilo/pape.png" alt="Foto de perfil" width="50px" height="50px" class="imgs"></a></td>
            
        <td colspan="3" align="center" class="pp">
            <form action="Busqueda.php" method="get">
            <select name="Catalogos" placeholder="Catalogos" id="srch">
                <option value="">Todo</option>
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
                </select>
                
            <input type="text" placeholder="Buscar producto..." name="prod" class="search">
                <button class="buscar">Buscar</button></form></td>
            
            <td align="right">
                
          <div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
    <img src="estilo/cuenta.png" width="50" height="50">
  </button>
  <ul class="dropdown-menu">
      <?php
      
      if(!empty($_SESSION['email'])){
    if($_SESSION["email"]=="papeleria_mussme@hotmail.com"){
      ?>
      <li><button class="dropdown-item" type="button"><a href="Admin.php">Administración</a></button></li><?php  
      }else{echo "STAFF ONLY";
        
    }?>
      <li><button class="dropdown-item" type="button"><a href="Funciones/logout.php">Cerrar Sesión</a></button></li>
<?php     }else{?>
            <li><button class="dropdown-item" type="button"><a href="IniciarSesion.php">Iniciar Sesión</a></button></li>
           <?php }?>
  </ul>
            </div>      
            </td>
        </table>
    </header>
    
    <fieldset class="tabl1">
        <table>
            <tr>
            <td width="400px" valign="top">
               <img src="<?php  echo $registro['img'] ?>" width="390px" height="390">
            </td >
            <td width="800px" align="right">
                <fieldset class="vista2" align="left">
                <b><h4>Producto:</h4></b><?php echo $registro['producto']; ?><br>
                <b><h4>Catalogo:</h4></b><?php echo $registro['categoria']; ?><br>
                <b><h4>Marca:</h4></b><?php echo $registro['marca']; ?><br>
                <b><h4>Cantidad disponible:</h4></b><?php echo $registro['cantidad']; ?><br>
                <b><h4>Precio:</h4></b>$<?php echo $registro['precio']; ?><br>
                </fieldset><hr>
                <fieldset class="vista2" align="left">
                <b><h4>Información: </h4></b><?php echo $registro['info']; ?>
                </fieldset><br>
                <?php
                if(!empty($_SESSION['email'])){
                if($_SESSION["email"]!="papeleria_mussme@hotmail.com"){
                    echo "<a href='compra.php?id=".$registro['id']."'><button align='center' align='right'><img src='estilo/crr.png' width='50px' height='auto'>Añadir al carrito</button></a>";}else{
                    echo "<a href='editar.php?id=".$registro['id']."'><button align='center' align='right'><img src='estilo/crr.png' width='50px' height='auto'>Editar Producto</button></a>";
                }}else{
                    echo "<a href='IniciarSesion.php?id=".$registro['id']."'><button align='center' align='right'><img src='estilo/crr.png' width='50px' height='auto'>Añadir al carrito</button></a>";
                }
                ?>
        
    
    
    
    
                </td>
            </tr>
            </table>
            </fieldset><br><br>
        
        

    
    
    
    <footer><br>
        <table align="center" width="1500px" >
            <tr>
            <td class="ft"><h3>Contactanos</h3></td>
            <td class="ft"><h3>Información</h3></td>
            <td class="ft"><h3>Integrantes</h3></td>
            </tr>
        <tr>
            <td width=500px>
                <label class="txt">
                <nav>
                    Correo: 
                    <a href="mailto:papeleria_mussme@hotmail.com">papeleria_mussme@hotmail.com</a><br>    
                    WhatsApp:<a href="https://wa.me/6331002571" target="_blank">Enviar mensaje al +52 633 100 2571</a>
                </nav>
                
                </label>
            </td>
            <td width="500px" height="220px">
            <label class="txt"><br>
            <details>
                <summary>Dirección</summary>
                <p>C.5 Av.37 y 38</p>
                </details>
            <details>
                <summary>Horarios</summary>
                <p>6:30am-8:00pm</p>
                </details>
            <details>
                <summary>Empleados</summary>
                <p>Elva Adriana Helleon Garduño</p>
                <p>Martha Violeta Vistrain Helleon</p>
                <p>Luis Carlos Andrade Helleon</p>
                </details>
            </label></td>
            <td><label class="txt"><br>
            Luis Carlos Andrade Helleon<br>
            Juan Cantú Quintero<br>
            Ariana Thayde Morales Miranda<br>
            David Alan Morales Velázquez<br>
            Irais Jaqueline Palomino Álvarez<br>
                Ambar Galilea Quintero Silvas<br></label>
            </td>
            </tr>
        </table><br><br>
    </footer>
        
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
<?php
