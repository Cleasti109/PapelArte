<?php
session_start();
if($_SESSION["email"] != "papeleria_mussme@hotmail.com"){
   header("location:main.php");
    exit();
}else if(!isset($_SESSION["email"])){
    header("location:IniciarSesion.php");
}
else
{
require "conexiones.php";
require "acciones.php";
require "Prueba/Registro.php";
//Crear la conexion a la base
$conexion = crearConexion();

//Mostrar registros y obtener el total
$registros = mostrarUsuario($conexion);
$productos = mostrarProducto($conexion);
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
    
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link rel="" href="https://cdn.datatables.net/fixedheader/3.1.6/css/fixedHeader.dataTables.min.css">
    
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
    
    
</head>
<body bgcolor="FFDE57">
    <header>
        <table width="2000px">
            <td width="200px">
                <a href="main.php"><img src="estilo/pape.png" alt="Foto de perfil" width="80px" height="80px" class="imgs" id="imgse"></a></td>
            
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
      }else{echo "STAFF ONLY";
        
    }?>
      <li><button class="dropdown-item" type="button"><a href="Funciones/logout.php">Cerrar Sesión</a></button></li>
  </ul>
            </div>      
            </td>
        </table>
    </header>
    
    <fieldset class="tabl1" align="center">
        <div id="btn">
        <button class="tablink" onclick="openCity('Productos', this, 'green')" id="defaultOpen">Productos</button>
            
        <button class="tablink" onclick="openCity('Usuarios', this, 'red')">Usuarios</button></div>
        
        <br><br>
        
    
        
        <div id="Productos" class="tabcontent">
  <table width="500px" class="usuarios" id="example">
        <thead >
            <tr>
                <th class="adm">Id</th>
                <th class="adm">Producto</th>
                <th class="adm">Marca</th>
                <th class="adm">Catalogo</th>
                <th class="adm">Cantidad</th>
                <th class="adm">Precio</th>
                <th class="adm">Img</th>
                <th class="adm">Consultar</th>
                <th class="adm">Editar</th>
                <th class="adm">Borrar</th>
            </tr>
            </thead>
            <tbody class="tabl">
            <?php
    if(empty($productos)){
        echo "No hay resultados";
    }else{
                //recoger todos los registros
                foreach($productos as $reg){
                    echo '<tr>';
                    
                    echo '<td>'.$reg['id'].'</td>';
                    
                    echo '<td>'.$reg['producto'].'</td>';
                    
                    echo '<td>'.$reg['marca'].'</td>';
                    
                    echo '<td>'.$reg['categoria'].'</td>';
                    
                    echo '<td>'.$reg['cantidad'].'</td>';
                    
                    echo '<td>'.$reg['precio'].'</td>';
                    
                    echo '<td><img src="'.$reg['img'].'" width="80px" height="auto"></td>';
                    
                    echo '<td><a href="datos.php?id='.$reg['id'].'"><button>Consultar</button></a></td>';
                    
                    echo '<td><a href="editar.php?id='.$reg['id'].'"><button>Editar</button></a></td>';
                    
echo '<td class="borrar">       <a href="borrar.php?id='.$reg['id'].'" onClick="return confirm(\'Seguro que deseas borrar?\')"><button>Borrar</button></a></td>';
                    
                    echo '</tr>';
                }}?>
            </tbody>
        </table> 
            
            <a href="Producto.php"><button>Agregar Producto</button></a>
</div>
    
        
        <div id="Usuarios" class="tabcontent">
    <table width="1225px" class="usuarios">
    
        <thead>
            <tr>
                <th class="adm">ID</th>
            <th class="adm">Nombre</th>
                <th class="adm">Telefono</th>
                <th class="adm">E-mail</th>
                <th class="adm">Contraseña</th>
                
            </tr>
            </thead>
            <tbody class="tabl">
                
            <?php
                //recoger todos los registros
                foreach($registros as $reg){
                    echo '<tr>';
                    
                    echo '<td>'.$reg['id'].'</td>';
                    
                    echo '<td>'.$reg['usuario'].'</td>';
                    
                    echo '<td>'.$reg['telefono'].'</td>';
                    
                    echo '<td>'.$reg['email'].'</td>';
                    
                    echo '<td>'.$reg['password'].'</td>';
                    
                    echo '</tr>';
                }?>
            </tbody>
        </table></div>
    </fieldset>
    



<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/fixedheader/3.1.6/js/dataTables.fixedHeader.min.js"></script> 

<script>


$(document).ready(function(){
    var table = $('#example').DataTable({
       orderCellsTop: true,
       fixedHeader: true 
    });
    

    //Creamos una fila en el head de la tabla y lo clonamos para cada columna
    

    $('#example thead  th').each( function (i) {
            var title = $(this).text(); //es el nombre de la columna
           //este if es para filtrar las columnas que no quiero que se hagan las busquedas
            if (!(title == 'Img' || title == 'Fecha de creación' || title == 'Editar' || title == 'Borrar' || title == 'Consultar')) {
                
                $(this).html( '<label  class="text-capitalize">'+title+'</label><br><input type="text" class="disp" placeholder="Buscar por '+title+'" />' );
                
                $( 'input', this ).on( 'keyup change', function () {
                    if ( table.column(i).search() !== this.value ) {
                        table
                        .column(i)
                        .search( this.value )
                        .draw();
                    }
                });
            }
        }); 
});


 

</script>

        
        
        
    



<script>
    
    
function openCity(tableName,elmnt,color) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].style.backgroundColor = "";
  }
  document.getElementById(tableName).style.display = "block";
  elmnt.style.backgroundColor = color;

}
// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
    
<script>

    


 
  
    </script>
    
        
   <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/fixedheader/3.1.6/js/dataTables.fixedHeader.min.js"></script> 
    
</body>
</html>
<?php
}
?>