<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tu Tienda de Productos</title>
    <link type="text/css" rel="stylesheet" href="../estilo/design3.css">
    <link rel="shortcut icon" href="../pape.png">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
    
    
</head>
<body>
    <header>
        <table width="2000px">
            <td width="200px">
                <img src="../estilo/pape.png" alt="Foto de perfil" width="50px" height="50px" class="imgs"></td>
            
        <td colspan="3" align="center" class="pp">
            <form action="" method="get">
            <select name="Catálogos" placeholder="Catalogos">
                <option>Todo</option>
                <option>Infantil</option>
                <option>Cumpleaños</option>
                <option>Electronica</option>
                <option>Merceria</option>
                <option>Joyeria</option>
                <optgroup label="alimentos">
                <option>Bebidas</option>
                    <option>Botana</option></optgroup>
                </select>
                
            <input type="text" placeholder="Buscar producto...">
                <button class="buscar">Buscar</button></form></td>
            
            <td align="right">
                
          <div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
    <img src="../estilo/cuenta.png" width="50" height="50">
  </button>
  <ul class="dropdown-menu">
      <li><button class="dropdown-item" type="button"><a href="../Funciones/logout.php">Cerrar Sesión</a></button></li>
  </ul>
</div>

                
            </td>
        </table>
    </header>
    <main>
        <section class="product-info">
            <div class="product-image">
                <img src="producto.jpg" alt="Imagen del producto">
            </div>
            <div class="product-details">
                <h2>Nombre del Producto</h2>
            </div>
        </section>
    </main>
    <footer>
        <!-- Puedes dejar este espacio en blanco o agregar otro contenido si lo deseas -->
    </footer>
        
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
