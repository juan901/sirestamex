<?php

require_once "modelos/conexion.php";

class ModeloProductos{ 
	
	static public function mdlMostrarProductos($tabla, $item, $valor) {
    if($item != null){
    $stmt = Conexion::conectar() -> prepare("SELECT * FROM $tabla WHERE $item = :$item");
    $stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);
    $stmt -> execute();
    return $stmt -> fetch();

    } else {
    $stmt = Conexion::conectar() -> prepare("SELECT * FROM $tabla");
    $stmt -> execute();
    return $stmt -> fetchAll();
    }

		$stmt -> close();
		$stmt = null;
	}


	static public function mdlMostrarProveedores($tabla, $itempro, $valor) {	
		if($item != null){
		$stmt = Conexion::conectar() -> prepare("SELECT $itempro FROM $tabla");
		$stmt -> bindParam($itempro, $valor);
		$stmt -> execute();
		return $stmt -> fetch();
		} else {
		$stmt = Conexion::conectar() -> prepare("SELECT * FROM $tabla");
		$stmt -> execute();
		return $stmt -> fetchAll();
		}
	
			$stmt -> close();
			$stmt = null;
		}
	


  /*-=====================================
  =           MODAL AGREGAR PRODUCTO         =
  ======================================*/

 static public function mdlIngresarProducto($tabla,$datos){

  	$stmt = Conexion::conectar() -> prepare("INSERT INTO $tabla(
  		upcid,producto,precio,iva,unidad,categoria,proveedor,estatus) 
		  VALUES (:upcid,:producto,:precio,:iva,:unidad,:categoria,:proveedor,:estatus)");

	$stmt -> bindParam(":upcid", $datos["upc"],PDO::PARAM_STR);
  	$stmt -> bindParam(":producto", $datos["nomproducto"],PDO::PARAM_STR);
  	$stmt -> bindParam(":precio", $datos["precioproducto"],PDO::PARAM_STR);
  	$stmt -> bindParam(":iva", $datos["iva"],PDO::PARAM_STR);
	$stmt -> bindParam(":unidad", $datos["unidadproducto"],PDO::PARAM_STR);
	$stmt -> bindParam(":categoria", $datos["categoriaproducto"],PDO::PARAM_STR);
	$stmt -> bindParam(":proveedor", $datos["proveedorp"],PDO::PARAM_STR);
	$stmt -> bindParam(":estatus", $datos["estatus"],PDO::PARAM_STR);

	

  	if($stmt -> execute()){
		
  		return  "ok"; 
  	} else {
  		return  "error";
  	}
	
  	$stmt -> close();
  	$stmt = null; 

  }


}