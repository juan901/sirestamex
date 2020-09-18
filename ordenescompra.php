<?php 
include_once "modelos/productos.modelos.php";
include_once "controlador/productos.controlador.php";
?>

<!doctype html>
<html lang="es">

<head>



  <!--=====================================
  PLUGINS DE CSS
  ======================================-->
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="lib/bootstrap/css/bootstrap.css">

    <!-- FontAwesome -->
    <link rel="stylesheet" href="lib/fontawesome/css/all.min.css">

    <!-- FontAwesome -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,800;1,100&display=swap" rel="stylesheet">

    <!-- Estilos Personalizado-->
    <link rel="stylesheet" href="css/estilos.css">

   


  <!--=====================================
  PLUGINS DE JS
  ======================================-->

     <!-- FavIcon-->
     <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon//favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">




    <title> SIRES | Ordenes de compra </title>


</head>

<body>

   <!-- jQuery -->   


<!-- Sección de Navegación del Sitio -->    
<nav class="navbar navbar-expand-sm navbar-dark px-0" id="navegacion">
  <div class="container">


  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <a class="navbar-brand" href="#">
    <img src="img/logo.png" alt="Logo Bistro-Petit">
  </a>
  

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Inicio<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="productos.php">Productos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="proveedores.php">Proveedor</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="ordenescompra.php">Ordenes de Compra</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="entrada.php">Entrada</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Salida</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Inventario</a>
      </li>
    </ul>
  </div>
  <div class="dropdown">
    <button class="btn btn-primary dropdown-toggle"
            type="button" id="menulogin" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-user-circle fa-layer-group fa-2x"></i> 
            
    </button>
    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="menulogin">
      <a class="dropdown-item" href="#!">Iniciar</a>
      <a class="dropdown-item" href="#!">Salir</a>
    </div>
  </div>

</div>
</nav>

<br>
<div class="container">
   <!-- Button trigger modal -->
<button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#agregarProductos">
    Agregar Orden de Compra
  </button>
</div>

<br>



<!-- Tabla de Proovedores-->
<div class="container">
  <h2>Ordenes Compra</h2>
  <p>Realiza una Busqueda de Productos</p>         
  <table class="table table-striped table-responsive">
    <thead>
      <tr>
        <th>ID</th>
        <th>Proovedor</th>
        <th>Fecha</th>
        <th>Autorizo</th>
        <th>Forma de Pago </th>
        <th>Estatus de Pago</th>
        <th>Facturacion</th>
        <th>Edicion</th>
  
      </tr>
    </thead>
    <tbody>


      <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td> 
        <td></td> 
        
   

      
          <td><div class="btn-group"> 
          <button class="btn-sm btn-warning btnEditarUsuario" data-toggle="modal" data-target="#modalEditarUsuario"><i class="fa fa-pencil-alt"></i></button>
          <button class="btn-sm btn-danger"><i class="fa fa-times-circle"></i></button>
        </div>
        </td>
      </tr>
    </tbody>
  </table>
</div>












  <!-- Modal para Agregar Proveedores -->
  <div class="modal fade bd-modal-lg" id="agregarProductos" tabindex="-1" role="dialog" aria-labelledby="agregarProductos" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Nuevo Proveedor </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        

     <!-- Formulario de Ordenes de Compras -->
<div class="card">
    <div class="card-body">
        <h4 class="card-title">Ingrese una Nueva Orden de Compras</h4>
        <h6 class="card-subtitle  text-muted">Ingresa productos a tu Inventario</h6> </br>
  
<form class="form-group" method="POST" >
    <label class="sr-only" for="Group1">ID/UPC/CODIGOBARRAS</label>
    <div class="input-group mb-3 mr-lg-3">
      <div class="input-group-prepend">
        <div class="input-group-text"><i class="fa fa-barcode" aria-hidden="true"></i>
        </div>
      </div>
      <input name="upc" type="text" class="form-control" id="upc" placeholder="UPC/ID/Cod. Barras" required>
    </div>


        <label class="sr-only" for="Group1">Producto</label>
        <div class="input-group mb-3 mr-lg-3">
          <div class="input-group-prepend">
            <div class="input-group-text"><i class="fa fa-hamburger" aria-hidden="true"></i>
            </div>
          </div>
          <input name="nomproducto" type="text" class="form-control" id="nomproducto" placeholder="Producto" required>
        </div>
    
<!-- Sección Unidad, Categoria y Proveedor-->    
<div class="form-inline">
  
    <label class="sr-only" for="Group1">Precio Neto</label>
    <div class="input-group mb-4 mr-lg-3">
      <div class="input-group-prepend">
        <div class="input-group-text"><i class="fa fa-dollar-sign" aria-hidden="true"></i>
        </div>
      </div>
      <input name="precioproducto" type="text" class="form-control" id="precioproducto" placeholder="Precio Neto" required>
    </div>

    <label class="sr-only" for="Group1">IVA</label>
    <div class="input-group mb-4 mr-lg-3">
      <div class="input-group-prepend">
        <div class="input-group-text"><i class="fa fa-money-check-alt"></i></i>
        </div>
      </div>
      <input name="iva" type="text" class="form-control" id="iva" placeholder="I.V.A">
    </div>

</div>
 <!-- Sección Unidad, Categoria y Proveedor-->    
<div class="form-inline">
   <!-- UNIDADES-->   
    <div class="input-group mb-3 mr-lg-3">
      <div class="input-group-prepend">
        <div class="input-group-text"><i class="fa fa-balance-scale-right" aria-hidden="true"></i>
        </div>
      </div>
        
      <select name="unidadproducto" class="selecciona" id="unidadproducto" required>
        <option selected>Selecciona Unidad ...</option>
        <option value="Kg.">Kg.-> Kilogramo</option>
        <option value="Lts.">Lts.-> Litros</option>
        <option value="Pza.">Pza.-> Pieza </option>
        <option value="Grs.">Grs.-> Gramos </option>
        <option value="Cjs.">Cjs.-> Cajas  </option>
        <option value="Und.">Und.-> Unidad  </option>
        <option value="Bot.">Bot.-> Botella  </option>
        <option value="Bols.">Bol.-> Bolsa  </option>
      </select>
    </div>
   <!--CATEGORIAS --> 
    <label class="form-inline sr-only" for="Group1">Categorias</label>
    <div class="input-group mb-3 mr-lg-3">
      <div class="input-group-prepend">
        <div class="input-group-text"><i class="fa fa-tape" aria-hidden="true"></i>
        </div>
      </div>
       
      <select name="categoriaproducto" class="selecciona" id="categoriaproducto" required>
        <option selected>Selecciona Categoria ...</option>
        <option value=""><< >></option>
        
        <option value="Cerveza">Cerveza</option>
        <option value="Cafeteria">Cafeteria</option>
        <option value="Condimentos">Condimentos</option>
        <option value="Frutas">Frutas</option>
        <option value="Licores">Licores</option>
        <option value="Papeleria">Lacteos</option>
        <option value="Papeleria">Papeleria</option>
        <option value="Refrescos">Refrescos</option>
        <option value="Quimicos">Quimicos</option>
        <option value="Vinos Tintos">Vinos Tintos</option>
        <option value="Vinos Blancos">Vinos Blancos</option>
        <option value="Verduras">Verduras</option>
  
      </select>
    </div>
  
   <!--PROVEDORES --> 
   

    <label class="sr-only" for="Group1">IVA</label>
    <div class="input-group mb-4 mr-lg-3">
      <div class="input-group-prepend">
        <div class="input-group-text"><i class="fa fa-money-check-alt"></i></i>
        </div>
      </div>
      <input name="proveedorp" type="text" class="form-control" id="proveedorp" placeholder="proveedor">
    </div>

  
</div>
<label class="sr-only" for="Group1">IVA</label>
    <div class="input-group mb-4 mr-lg-3">
      <div class="input-group-prepend">
        <div class="input-group-text"><i class="fa fa-money-check-alt"></i></i>
        </div>
      </div>
      <input name="estatus"  type="text" class="form-control" id="estatus" placeholder="estatus" required>
    </div>
    
   
    </div>

   
   

  

  </div>

  <div class="modal-footer">
 
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
    <button name="insertar" type="submit" class="btn btn-primary">Guardar</button>
 
  </div>
 
  <?php
          $crearProductos = new ControladorProductos();
          $crearProductos -> ctrCrearProducto();
          ?>
   </form>
</div>

</div>


    
</div>
</div>

<footer id="sticky-footer" class="py-4 bg-primary text-white-50">
  <div class="container text-center">
    <small>Copyright &copy;Liberado Bajo Licencia Educativa para Joaquin Rojas  <a rel="license" href="http://creativecommons.org/licenses/by-nd/4.0/"><img alt="Licencia de Creative Commons" style="border-width:0" src="https://i.creativecommons.org/l/by-nd/4.0/88x31.png" /></a><br /> </small>
  </div>
</footer>
  


    
    <!-- jQuery -->
    <script src="lib/jquery/jquery-3.5.1.js"></script>
    <!-- Popper.js -->
    <script src="lib/popper.js/popper.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="lib/bootstrap/js/bootstrap.min.js"></script>

</body>

</html>