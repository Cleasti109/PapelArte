<?php
session_start();
    
require "conexiones.php";
require "acciones.php";
require "Prueba/Registro.php";
//Crear la conexion a la base
$conexion = crearConexion();    
$productos = mostrarNovedad($conexion);
$artistic = mostrarArte($conexion);
$infantil = mostrarInfantil($conexion);
    
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
<body >
    <header>
        <table width="2000px">
            <td width="200px">
                <a href="main.php"><img src="estilo/pape.png" alt="Foto de perfil" width="80px" height="80px" class="imgs" id="imgse"></a></td>
            
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
    
    <br><br>
        <table width="1225px" align="center">
        <tr>
<!-----------------------------------------Carrusel-------------------------------------------------------------------------------------------deimagenes----------------------------------------------->
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" align="center">
<ol class="carousel-indicators">
<li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
<li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
<li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
</ol>
<div class="carousel-inner">
<div class="carousel-item active">
<img src="Prueba/Servicios.png" alt="Imagen 1" height="auto" width="600px">
</div>
<div class="carousel-item">
<img src="Prueba/Catalogo.png" alt="Imagen 2" height="auto" width="600px">
</div>
<div class="carousel-item">
<img src="Prueba/ContactUS.png" alt="Imagen 3" height="auto" width="600px">
</div>
</div>
<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev" style="background-color:gray;">
<span class="carousel-control-prev-icon" aria-hidden="true"></span>
<span class="visually-hidden">Previous</span>
</a>
<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next" style="background-color:gray;">
<span class="carousel-control-next-icon" aria-hidden="false"></span>
<span class="visually-hidden">Next</span>
</a>
</div>
            
            
            </tr>
<!--------------------------------------------------------------------------------------------------------------------------------------------------->
            <br>
            <table align="center">
                <font color="white">
                    <h1 align="center"><b>Novedades</b></h1></font><hr>
            <?php
    $i=0;
                //recoger todos los registros
    echo "<tr>";
    if(empty($productos)){
        echo "No hay resultados";
    }else{
                foreach($productos as $reg){
                    if($i<=5){
                    
                    echo '<td width="170px">';
                    
                    echo '<a href="datos.php?id='.$reg['id'].'"><fieldset class="vista" align="center">';
                    echo '<br>';
                    
                    echo '<img src="'.$reg['img'].'" width="120" height="120">';
                        
                    echo '<br><b><fieldset class="vista3" align="center">'.$reg['producto'].'</b><br>';
                    
                    echo '</a>';
                    
                    
                    
                    
                    
                    echo '<fieldset></fieldset><br>';
                    echo '</td>'; $i++;
                    if($i>=5){
                        $i=0;
                        echo "</tr><br>";
                    }}else{
                        $i=0;
                        echo "</tr><br>";
                    }
                }}?>
            
        </table>  
            <hr>
        <fieldset class="doc" align="center">
            <table width="1450px">
            <tr>
            <td width="1000px" valign="top" align="center"><h1>Papeleria el Estudiante</h1>
                <font size="4">
                    <p id="infrm"> En la Papeleria el Estudiante encontrará los mejores utiles para sus actividades manuales como el arte, estudios incluso el trabajo. De igual forma, encontrará los productos electronicos basicos como USB, Mouse e incluso linternas.<br>De igual forma encontrará productos para su estetica como lo son perfumes y joyas.<br><br>Ubicación<br>Calle.5 Av.37 y 38</p></font>
                
            </td><td><img src="estilo/exterior.jpg" width="500" height="auto"></td></tr>
            </table>
            
        </fieldset>
            
             <br>
            <table align="center">
                <h1 align="center">Artisticos</h1><hr>
            <?php
    $i=0;
                //recoger todos los registros
    echo "<tr>";
    if(empty($artistic)){
        echo "No hay resultados";
    }else{
                foreach($artistic as $reg){
                    if($i<=5){
                    echo '<td width="170px">';
                    
                    echo '<a href="datos.php?id='.$reg['id'].'"><fieldset class="vista" align="center">';
                    echo '<br>';
                    
                    echo '<img src="'.$reg['img'].'" width="120" height="120">';
                        
                    echo '<br><b><fieldset class="vista3" align="center">'.$reg['producto'].'</b><br>';
                    
                    echo '</a>';
                    
                    
                    
                    
                    
                    echo '<fieldset></fieldset><br>';
                    echo '</td>'; $i++;
                    if($i>=5){
                        $i=0;
                        echo "</tr><br>";
                    }}else{
                        $i=0;
                        echo "</tr><br>";
                    }
                }}?>
            
        </table>          
            
            <br>
            <table align="center"><hr>
                <h1 align="center">Para los niños</h1><hr>
            <?php
    $i=0;
                //recoger todos los registros
    echo "<tr>";
    if(empty($infantil)){
        echo "No hay resultados";
    }else{
                foreach($infantil as $reg){
                    if($i<=5){
                    echo '<td width="170px">';
                    
                    echo '<a href="datos.php?id='.$reg['id'].'"><fieldset class="vista" align="center">';
                    echo '<br>';
                    
                    echo '<img src="'.$reg['img'].'" width="120" height="120">';
                        
                    echo '<br><b><fieldset class="vista3" align="center">'.$reg['producto'].'</b><br>';
                    
                    echo '</a>';
                    
                    
                    
                    
                    
                    echo '<fieldset></fieldset><br>';
                    echo '</td>'; $i++;
                    if($i>=5){
                        $i=0;
                        echo "</tr><br>";
                    }}else{
                        $i=0;
                        echo "</tr><br>";
                    }
                }}?>
            
        </table>       
    
    
    
    <br><br>
    
    <footer><br>
        <table align="center" width="1500px">
            <tr>
            <td class="ft"><h3>Contactanos</h3></td>
            <td class="ft"><h3>Información</h3></td>
            <td class="ft"><h3>Integrantes</h3></td>
            </tr>
        <tr>
            <td width=500px valign="top">
                <label class="txt"><br>
                <nav>
                    Correo: 
                    <a href="mailto:papeleria_mussme@hotmail.com">papeleria_mussme@hotmail.com</a><br>    
                    WhatsApp:<a href="https://wa.me/6331002571" target="_blank">Enviar mensaje al +52 633 100 2571</a>
                </nav>
                
                </label>
            </td>
            <td width="500px" height="220px" valign="top">
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
            <td valign="top"><label class="txt"><br>
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
        
    
    </table>
</body>
</html>