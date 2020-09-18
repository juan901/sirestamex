<?php
class ControladorProductos{


	/*=============================================
	            REGISTRO DE PRODUCTO
	=============================================*/

static public function ctrCrearProducto(){
	if(isset($_POST['insertar'])){
			   $tabla = "producto";
			   $datos = array (	"upc"=>$_POST["upc"],
			   					"nomproducto"=>$_POST["nomproducto"],
			   					"precioproducto"=>$_POST["precioproducto"],
			   					"iva"=>$_POST["iva"],
								"unidadproducto"=>$_POST["unidadproducto"],
								"categoriaproducto"=>$_POST["categoriaproducto"],
								"proveedorp"=>$_POST["proveedorp"],
								"estatus"=>$_POST["estatus"]);
							

								
			 $respuesta = ModeloProductos::mdlIngresarProducto($tabla,$datos);
		
			} 
	/*=============================================
						MOSTRAR PRODUCTOS 
	=============================================*/


	}

	static public function ctrMostrarProductos($item, $valor){
		$tabla = "producto";
		$respuesta = ModeloProductos::mdlMostrarProductos($tabla, $item, $valor);
		return $respuesta;
		

	}

	static public function ctrMostrarProveedores($itempro, $valor){
		$tabla = "proveedores";
		$respuestapro = ModeloProductos::mdlMostrarProveedores($tabla, $itempro, $valor);
		return $respuestapro;
		

	}
}





		





		
		
		


