<?php
 if($_SERVER["REQUEST_METHOD"] == "POST"){
     if(!empty($_POST["email"]) && !empty($_POST["password"])){
         session_start();
         require('conexiones.php');
         $email=$_POST["email"];
         $password=$_POST["password"];
         $password=md5($password);
         $conexion=crearConexion();
         $conexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
         
         //Donde pone "usuarios" se ponde como tal el nombre de la tabla
$query= $conexion-> prepare("SELECT * FROM usuarios where email= :e AND password = :p");
         //$query=$conexion -> prepare("INSERT INTO usuarios where usuario = :u AND password = :p");
         
         $query -> bindParam(":e", $email);
         $query -> bindParam(":p", $password);
         $query -> execute();
         $resultado = $query -> fetch(PDO::FETCH_ASSOC);
         if($resultado){
             $_SESSION["email"]= $resultado["email"];
             header("location:Main.php");
         }else{
?>
             <html>
                 <head><meta charset='utf-8'>
             <link rel='stylesheet' type="text/css" href='estilo/design2.css'>
                     <link rel="shortcut icon" href="pape.png">
                 </head>
             <body>
                 <br>
                 <fieldset class="err" align="center">
                     Usuario o contraseña invalidos<br>
                 <a href="IniciarSesion.php">Regresar</a>
                 </fieldset></body></html>
               <?php
         }
     }
 }?>