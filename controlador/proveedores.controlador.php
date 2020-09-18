<?php
class ControladorProveedor{


	/*=============================================
	            REGISTRO DE PROVEEDORES
	=============================================*/

static public function ctrCrearProveedor(){
	if(isset($_POST['insertarproveedor'])){
			   $tabla = "proveedores";
			   $datos = array ("nombreProveedor"=>$_POST["nombreProveedor"],
			   					"razonSocial"=>$_POST["razonSocial"],
			   					"rfcproveedor"=>$_POST["rfcproveedor"],
			   					"callenumeroproveedor"=>$_POST["callenumeroproveedor"],
								"codigopostalproveedor"=>$_POST["codigopostalproveedor"],
								"coloniaprov"=>$_POST["coloniaprov"],
								"ciudadprov"=>$_POST["ciudadprov"],
								"estado"=>$_POST["estado"],
								"titularcuenta"=>$_POST["titularcuenta"],
								"banco"=>$_POST["banco"],
								"nocuenta"=>$_POST["nocuenta"],
								"clabeinter"=>$_POST["clabeinter"],
								"nombrdespach"=>$_POST["nombrdespach"],
								"telefrep"=>$_POST["telefrep"],
								"nombresuper"=>$_POST["nombresuper"],
								"telefcorpo"=>$_POST["telefcorpo"],
								"email"=>$_POST["email"],
								"web"=>$_POST["web"]);
							


			 $respuesta = ModeloProveedores::mdlIngresarProveedor($tabla,$datos);
		
			 
			} 
	/*=============================================
						MOSTRAR PROVEEDORES
	=============================================*/

	}

	static public function ctrMostrarProveedores($item, $valor){
		$tabla = "proveedores";
		$respuesta = ModeloProveedores::mdlMostrarProveedores($tabla, $item, $valor);
		return $respuesta;
		

	}

	static public function ctrMostrarProv($item, $valor){
		$tabla = "proveedores";
		$respuesta = ModeloProveedores::mdlMostrarProvee($tabla, $item, $valor);
		return $respuesta;
		

	}
}
