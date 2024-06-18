<?php
function crearProducto($conexion, $producto, $catalogos, $cantidad, $precio, $marca, $img, $info){
	try{
		$stmt= $conexion->prepare('INSERT INTO productos (producto, categoria, cantidad, precio, img, marca, info) VALUES (:prod, :cata, :cant, :pre, :img, :mrc, :inf)');
		$stmt->bindParam(':prod',$producto);
		$stmt->bindParam(':cata',$catalogos);
		$stmt->bindParam(':cant',$cantidad);
        $stmt->bindParam(':pre',$precio);
        $stmt->bindParam(':img',$img);
        $stmt->bindParam(':mrc',$marca);
        $stmt->bindParam(':inf',$info);
		$confirm=$stmt->execute();
		return $confirm;
	}catch(PDOException $e){
		die('error'.$e->getMessage());
	}
}
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
function MaostrarUsuario($conexion){
	try{
		$stmt=$conexion->query("SELECT * FROM usuarios where usuario=usu");
		$stmt->setFetchMode(PDO:: FETCH_ASSOC);
		$i=0;
		while($row=$stmt->fetch()) {
			$registros[$i]=$row;
			$i++;
		}
		return $registros;
	}catch (PDOException $e){
		die('error'.$e->getMessage());
	}
}
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
function mostrarProducto($conexion){
	try{
		$stmt=$conexion->query("SELECT * FROM productos");
		$stmt->setFetchMode(PDO:: FETCH_ASSOC);
		$i=0;
		while($row=$stmt->fetch()) {
			$registros[$i]=$row;
			$i++;
		}if(isset($registros)){
		return $registros;}else{
            $registros='';
            return $registros;
        }
		return $registros;
	}catch (PDOException $e){
		die('error'.$e->getMessage());
	}
}
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
function totalContactos($pdo){
	try{
		$stmt=$pdo->query("SELECT COUNT( * ) AS total FROM contactos");
		$stmt->setFetchMode(PDO::FETCH_ASSOC);
		$row=$stmt->fetch();
		return $row['total'];
	}catch(PDOException $e){
		die('error'.$e->getMessage());
	}
}
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
function consultarProducto($conexion,$id){
	try{
		$stmt=$conexion->prepare('SELECT * FROM productos WHERE id =:id');
		$stmt->setFetchMode(PDO::FETCH_ASSOC);
		$stmt->bindParam(':id',$id);
		$stmt->execute();
		$registro = $stmt->fetch();
		return $registro;
	}catch(PDOException $e){
		die('error' .$e->getMessage());

	}
}
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
function buscarProducto($conexion,$prod,$cata){
	try{
		$stmt=$conexion->query("SELECT * FROM productos where producto like '$prod%' && categoria like '%$cata%'");
		$stmt->setFetchMode(PDO:: FETCH_ASSOC);
		$i=0;
		while($row=$stmt->fetch()) {
			$registros[$i]=$row;
			$i++;
		}
        if(isset($registros)){
		return $registros;}else{
            $registros='';
            return $registros;
        }
	}catch (PDOException $e){
		die('error'.$e->getMessage());
	}
}
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
function actualizarProducto($conexion, $id, $producto, $catalogos, $cantidad, $precio, $marca, $img, $info){
	try{
		$stmt=$conexion->prepare("UPDATE productos SET producto=:prod , categoria=:cate, cantidad=:cant, precio=:pre, img=:img WHERE id=:id");
		$stmt->bindParam(':prod',$producto);
		$stmt->bindParam(':cate',$catalogos);
		$stmt->bindParam(':cant',$cantidad);
        $stmt->bindParam(':pre',$precio);
        $stmt->bindParam(':img',$img);
		$stmt->bindParam(':id',$id);

		$confirm=$stmt->execute();
		return $confirm;
	}catch(PDOException $e){
		die('error'.$e->getMessage());
	}
}
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
function borrarContacto($conexion,$id){

try{
	$stmt=$conexion->prepare('DELETE FROM productos WHERE id=:id');
	$stmt->bindParam(':id',$id);
	$confirm=$stmt->execute();
	return $confirm;
}catch(PDOException $e){
	die('error' .$e->getMessage);
}
}
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
function mostrarNovedad($conexion){
	try{ 
		$stmt=$conexion->query("SELECT * FROM productos where id<=15 order by id desc");
		$stmt->setFetchMode(PDO:: FETCH_ASSOC);
		$i=0;
		while($row=$stmt->fetch()) {
			$registros[$i]=$row;
			$i++;
		}if(isset($registros)){
		return $registros;}else{
            $registros='';
            return $registros;
            $id--;
        }
		return $registros;
	}catch (PDOException $e){
		die('error'.$e->getMessage());
	}
}
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
function mostrarArte($conexion){
	try{ 
		$stmt=$conexion->query("SELECT * FROM productos where id<=15 AND categoria='Arte' order by id desc");
		$stmt->setFetchMode(PDO:: FETCH_ASSOC);
		$i=0;
		while($row=$stmt->fetch()) {
			$registros[$i]=$row;
			$i++;
		}if(isset($registros)){
		return $registros;}else{
            $registros='';
            return $registros;
            $id--;
        }
		return $registros;
	}catch (PDOException $e){
		die('error'.$e->getMessage());
	}
}
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
function mostrarInfantil($conexion){
	try{ 
		$stmt=$conexion->query("SELECT * FROM productos where id<=15 AND categoria='Infantil' order by id desc");
		$stmt->setFetchMode(PDO:: FETCH_ASSOC);
		$i=0;
		while($row=$stmt->fetch()) {
			$registros[$i]=$row;
			$i++;
		}if(isset($registros)){
		return $registros;}else{
            $registros='';
            return $registros;
            $id--;
        }
		return $registros;
	}catch (PDOException $e){
		die('error'.$e->getMessage());
	}
}