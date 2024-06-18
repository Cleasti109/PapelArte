<?php
 function crearUsuario($conexion, $usuario, $telefono, $email, $password){
 try{

 $stmt= $conexion->prepare("INSERT INTO usuarios(usuario, email, password, telefono) VALUES(:usu, :email, :pass, :tel)");
 $stmt->bindParam(':usu' , $usuario);
 $stmt->bindParam(':email' , $email);
 $stmt->bindParam(':pass' , $password);
 $stmt->bindParam(':tel' , $telefono);
  
  $confirm = $stmt->execute();
  return $confirm;
 }catch(PDOException $e) {
 die('Error:' .  $e->getMessage());
 
 }
 }

function checar($conexion, $email){
try{
		$stmt=$conexion->prepare('SELECT email FROM usuarios WHERE email =:email');
		$stmt->setFetchMode(PDO::FETCH_ASSOC);
		$stmt->bindParam(':email',$email);
		$stmt->execute();
		$registro = $stmt->fetch();
		return $registro;
	}catch(PDOException $e){
		die('error' .$e->getMessage());

	}}