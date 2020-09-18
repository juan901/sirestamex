<?php

require_once "modelos/conexion.php";

class ModeloProveedores{ 
	
	static public function mdlMostrarProveedores($tabla, $item, $valor) {
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


  /*-=====================================
  =           MODAL AGREGAR PRODUCTO         =
  ======================================*/

 static public function mdlIngresarProveedor($tabla,$datos){

  	$stmt = Conexion::conectar() -> prepare("INSERT INTO $tabla(
  		nombreProveedor,razonSocial,rfcproveedor,callenumeroproveedor,codigopostalproveedor,
		coloniaprov,ciudadprov,estado,titularcuenta,banco,nocuenta,clabeinter,nombrdespach,telefrep,nombresuper,telefcorpo,email,web) 
		VALUES (:nombreProveedor,:razonSocial,:rfcproveedor,:callenumeroproveedor,:codigopostalproveedor,
		:coloniaprov,:ciudadprov,:estado,:titularcuenta,:banco,:nocuenta,:clabeinter,:nombrdespach,:telefrep,:nombresuper,
		:telefcorpo,:email,:web)");

	$stmt -> bindParam(":nombreProveedor", $datos["nombreProveedor"],PDO::PARAM_STR);
  	$stmt -> bindParam(":razonSocial", $datos["razonSocial"],PDO::PARAM_STR);
  	$stmt -> bindParam(":rfcproveedor", $datos["rfcproveedor"],PDO::PARAM_STR);
  	$stmt -> bindParam(":callenumeroproveedor", $datos["callenumeroproveedor"],PDO::PARAM_STR);
	$stmt -> bindParam(":codigopostalproveedor", $datos["codigopostalproveedor"],PDO::PARAM_STR);
	$stmt -> bindParam(":coloniaprov", $datos["coloniaprov"],PDO::PARAM_STR);
	$stmt -> bindParam(":ciudadprov", $datos["ciudadprov"],PDO::PARAM_STR);
	$stmt -> bindParam(":estado", $datos["estado"],PDO::PARAM_STR);
	$stmt -> bindParam(":titularcuenta", $datos["titularcuenta"],PDO::PARAM_STR);
	$stmt -> bindParam(":banco", $datos["banco"],PDO::PARAM_STR);
	$stmt -> bindParam(":nocuenta", $datos["nocuenta"],PDO::PARAM_STR);
	$stmt -> bindParam(":clabeinter", $datos["clabeinter"],PDO::PARAM_STR);
	$stmt -> bindParam(":nombrdespach", $datos["nombrdespach"],PDO::PARAM_STR);
	$stmt -> bindParam(":telefrep", $datos["telefrep"],PDO::PARAM_STR);
	$stmt -> bindParam(":nombresuper", $datos["nombresuper"],PDO::PARAM_STR);
	$stmt -> bindParam(":telefcorpo", $datos["telefcorpo"],PDO::PARAM_STR);
	$stmt -> bindParam(":email", $datos["email"],PDO::PARAM_STR);
	$stmt -> bindParam(":web", $datos["web"],PDO::PARAM_STR);


  	if($stmt -> execute()){
		
  		return  "ok"; 
  	} else {
  		return  "error";
  	}
	
  	$stmt -> close();
  	$stmt = null; 

  }


}