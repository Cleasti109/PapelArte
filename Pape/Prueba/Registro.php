<?php
 function crearUsuario($conexion, $nombre, $numero, $email){
 try{
 $stmt= $conexion->prepare("INSERT INTO contactos(nombre, telefono, email) VALUES(:nom, :tel, :email)");
 $smt->bindParam(':nom' , $nombre);
 $smt->bindParam(':tel' , $numero);
 $smt->bindParam(':email' , $email);
  
  $confirm = $stmt->execute();
  return $confirm;
 }catch(PDOException $e) {
 die('Error:' .  $e->getMessage());
 
 }
 }

 function mostrarUsuario($conexion){
 try{
 $stmt= $conexion->query("SELECT * FROM usuarios");
 $stmt->setFetchmode(PDO::FETCH_ASSOC);
     $i=0;
     while($row=$stmt->fetch()){
         $registros[$i]=$row;
         $i++;
     }
     
 // $confirm = $stmt->execute();
  return $registros;
 }catch(PDOException $e) {
 die('Error:' .  $e->getMessage());
 
 }
 }

