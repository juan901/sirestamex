<?php 
include_once "modelos/proveedores.modelos.php";
include_once "controlador/proveedores.controlador.php";
?>

<!doctype html>
<html lang="es">

<head>
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

     <!-- FavIcon-->
     <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon//favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">

    <title> SIRES | Proveedores </title>
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
        <a class="nav-link " href="ordenescompra.php">Ordenes de Compra</a>
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
<button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#agregarProovedor">
    Agregar Proveedor
  </button>
</div>





<br>


  
   <!-- Tabla de Proovedores-->
   <div class="container">
    <h2>Proovedores</h2>
    <p>Realiza una Busqueda de Proovedor, Edita o Agrega uno Nuevo</p>            
    <table class="table table-responsive">
      <thead>
        <tr>
          <th>Proovedor</th>
          <th>Razón Social</th>
          <th>R.F.C</th>
          <th>Calle y Numero</th>
          <th>Código Postal</th>
          <th>Colonia</th>
          <th>Ciudad</th>
          <th>Estado</th>
          <th>Titular</th>
          <th>Banco</th>
          <th>Cuenta</th>
          <th>CLABE</th>
          <th>Nombre Repartidor</th>
          <th>Telf. Repar.</th>
          <th>Nombre Corpora</th>
          <th>Telf. Corpora.</th>
          <th>Correo</th>
          <th>Web</th>
          <th>Edicion</th>
        </tr>
      </thead>
      <tbody>
<?php
$item = null; 
$valor = null; 

$provedor = ControladorProveedor::ctrMostrarProveedores($item, $valor);

foreach ($provedor as $key => $value) {
  echo' 
        <tr>
          <td>'.$value["nombreProveedor"].'</td>
          <td>'.$value["razonSocial"].'</td>
          <td>'.$value["rfcproveedor"].'</td>
          <td>'.$value["callenumeroproveedor"].'</td>
          <td>'.$value["codigopostalproveedor"].'</td>
          <td>'.$value["coloniaprov"].'</td>
          <td>'.$value["ciudadprov"].'</td>
          <td>'.$value["estado"].'</td>
          <td>'.$value["titularcuenta"].'</td>
          <td>'.$value["banco"].'</td>
          <td>'.$value["nocuenta"].'</td>
          <td>'.$value["clabeinter"].'</td>
          <td>'.$value["nombrdespach"].'</td>
          <td>'.$value["telefrep"].'</td>
          <td>'.$value["nombresuper"].'</td>
          <td>'.$value["telefcorpo"].'</td>
          <td>'.$value["email"].'</td>
          <td>'.$value["web"].'</td>';

          echo'
          <td><div class="btn-group"> 
          <button class="btn btn-warning btnEditarUsuario" data-toggle="modal" data-target="#modalEditarUsuario"><i class="fa fa-pencil-alt"></i></button>
          <button class="btn btn-danger"><i class="fa fa-times-circle"></i></button>
        </div>
        </td>
      </tr>';

        }
        ?>
        </tr>
      
      </tbody>
    </table>
  </div>
  


  
  <!-- Modal -->
  <div class="modal fade bd-example-modal-lg" id="agregarProovedor" tabindex="-1" role="dialog" aria-labelledby="agregarProovedor" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Nuevo Proveedor </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        

     <!-- Formulario de Nuevos Productos  -->

 

     <div class="card">
        <div class="card-body">
            <h4 class="card-title">Registra de Proveedor</h4>
            <h6 class="card-subtitle  text-muted">Ingresa los datos a continuación </h6> </br>
      <!--Nombre del Provedor-->
    <form method="post" class="form-group ">
        <label class="sr-only" for="Group1">Nombre proveedor</label>
     
        <div class="input-group mb-3 mr-lg-3">
          <div class="input-group-prepend">
            <div class="input-group-text"><i class="fa fa-id-card-alt" aria-hidden="true"></i>
            </div>
          </div>
          <input name="nombreProveedor" type="text" class="form-control" id="nombreProveedor" placeholder="Nombre Proveedor" required>
        </div>
    
        <!--Razon Social-->
        <form class="form-group col-md-7">
            <label class="sr-only" for="Group1">Razón Social </label>
            <div class="input-group mb-3 mr-lg-3">
              <div class="input-group-prepend">
                <div class="input-group-text"><i class="fa fa-address-card" aria-hidden="true" ></i>
                </div>
              </div>
              <input name="razonSocial"  type="text" class="form-control" id="razonSocial" placeholder="Razón Social" required>
            </div>
    
            <!--RFC-->
            <form class="form-group col-md-7">
                <label class="sr-only" for="Group1">R.F.C</label>
                <div class="input-group mb-3 mr-lg-3">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-barcode" aria-hidden="true"></i>
                    </div>
                  </div>
                  <input name="rfcproveedor" type="text" class="form-control" id="rfcproveedor" placeholder="R.F.C">
                </div>
                    
        
    <!-- Sección Unidad, Categoria y Proveedor-->    
    <p>
    
    
    <div class="form-inline">
    
          <!--Caller y Numero-->
        <div class="input-group mb-2 mr-1">
            <div class="input-group-prepend">
                <div class="input-group-text"><i class="fa fa-map-signs" aria-hidden="true"></i>
                </div>
            </div>
            <input name="callenumeroproveedor" type="text" class="form-control" id="callenumeroproveedor" placeholder="Calle y Numero" required>
        </div>
    
        <!--C.P-->
        <div class="input-group mb-2 mr-1">
            <div class="input-group-prepend">
                <div class="input-group-text"><i class="fa fa-inbox"></i></i>
                </div>
            </div>
            <input name="codigopostalproveedor"  type="text" class="form-control" id="codigopostalproveedor" placeholder="C.P">
        </div>
    
    <!--Colonia-->
    <div class="input-group mb-2 mr-1">
        <div class="input-group-prepend">
            <div class="input-group-text"><i class="fa fa-map-pin"></i></i>
            </div>
        </div>
        <input name="coloniaprov" type="text" class="form-control" id="coloniaprov" placeholder="Colonia" required>
    </div>
    
    <!--Ciudad-->
    <div class="input-group mb-3 mr-1">
        <div class="input-group-prepend">
            <div class="input-group-text"><i class="fa fa-map-pin"></i></i>
            </div>
        </div>
        <input name="ciudadprov" type="text" class="form-control" id="ciudadprov" placeholder="Ciudad" required>
    </div>
    
    <!--Estados-->
    <div class="input-group mb-3 mr-lg-3">
        <div class="input-group-prepend">
            <div class="input-group-text"><i class="fa fa-map-pin" aria-hidden="true"></i>
            </div>
        </div>
        <select name="estado" class="selecciona" id="estado">
            <option selected>Seleccione Estado...</option>
            <option value="Aguascalientes">Aguascalientes</option>
            <option value="Baja California">Baja California</option>
            <option value="Baja California Sur">Baja California Sur</option>
            <option value="Campeche">Campeche </option>
            <option value="Coahuila">Coahuila</option>
            <option value="Colima">Colima</option>
            <option value="Chiapas">Chiapas</option>
            <option value="Chihuahua">Chihuahua</option>
            <option value="Distrito Federal">Distrito Federal</option>
            <option value="Durango">Durango</option>
            <option value="Guanajuato">Guanajuato</option>
            <option value="Guerrero">Guerrero</option>
            <option value="Hidalgo">Hidalgo</option>
            <option value="Jalisco">Jalisco</option>
            <option value="Mexico">México</option>
            <option value="Michoacan">Michoacán </option>
            <option value="Morelos">Morelos</option>
            <option value="Nayarit">Nayarit</option>
            <option value="Nuevo Leon">Nuevo León</option>  
            <option value="Oaxaca">Oaxaca</option> 
            <option value="Puebla">Puebla</option> 
            <option value="Queretaro">Querétaro</option> 
            <option value="Quintana Roo">Quintana Roo</option> 
            <option value="San Luis Potosi">San Luis Potosí</option> 
            <option value="Sinaloa">Sinaloa</option> 
            <option value="Sonora">Sonora</option> 
            <option value="Tabasco">Tabasco</option> 
            <option value="Tamaulipas">Tamaulipas</option> 
            <option value="Tlaxcala">Tlaxcala</option> 
            <option value="Tlaxcala">Veracruz </option> 
            <option value="Yucatan">Yucatán </option> 
            <option value="Zacatecas">Zacatecas </option>          
        </select>
    </div>
    </div>
    
    <!--Titular-->
    <form class="form-group col-md-7">
        <label class="sr-only" for="Group1">Titular</label>
        <div class="input-group mb-3 mr-lg-3">
            <div class="input-group-prepend">
                <div class="input-group-text"><i class="fa fa-id-card-alt" aria-hidden="true"></i>
                </div>
            </div>
            <input name="titularcuenta"  type="text" class="form-control" id="titularcuenta" placeholder="Titular">
    </div>
    
    
    <!--BANCO-->
    <div class="form-inline">
    
        <div class="input-group mb-3 mr-lg-3">
            <div class="input-group-prepend">
                <div class="input-group-text"><i class="fa fa-money-bill-alt" aria-hidden="true"></i>
                </div>
            </div>
            <select name="banco" class="selecciona"" id="banco">
                <option selected>Seleccione Banco...</option>
                <option value="Actinver">Actinver</option>
                <option value="BBVA">BBVA</option>
                <option value="Banco Azteca">Banco Azteca</option>
                <option value="Inbursa">Banco Inbursa</option>
                <option value="HSBC">HSBC</option>
                <option value="BanCoppel">BanCoppel</option>
                <option value="Banamex">Banamex</option>
                <option value="Santander">Santander</option>
                <option value="Banorte">BanNorte</option>
                <option value="Scotiabank">Scotiabank</option>
                <option value="Scotiabank">CiBanco</option>
                <option value="Pago Efectivo">Pago Efectivo</option>
                
    
            </select>
        </div>
    
    <!--CUENTA-->
    <label class="form-inline sr-only" for="Group1">Cuenta</label>
    <div class="input-group mb-3 mr-3">
        <div class="input-group-prepend">
            <div class="input-group-text"><i class="fa fa-money-bill-alt"></i></i>
            </div>
        </div>
        <input  name="nocuenta" type="text" class="form-control" id="nocuenta" placeholder="Cuenta">
    </div>
    </div>
     
    <!-- CLABE INTERBANCARIA -->
    <div class="input-group mb-3 mr-lg-3">
        <div class="input-group-prepend">
            <div class="input-group-text"><i class="fa fa-money-bill-alt" aria-hidden="true"></i>
            </div>
        </div>
        <input name="clabeinter" type="text" class="form-control" id="clabeinter" placeholder="CLABE">
    </div>
    
    <!-- Contacto 1 -->
    <div class="input-group mb-3 mr-lg-3">
        <div class="input-group-prepend">
            <div class="input-group-text"><i class="fa fa-motorcycle" aria-hidden="true"></i>
            </div>
        </div>
        <input name="nombrdespach"  type="text" class="form-control" id="nombrdespach" placeholder="Repartidor/Despachador" required>
    </div>
    
    <!-- Telefono 1 -->
    <div class="input-group mb-3 mr-lg-3">
        <div class="input-group-prepend">
            <div class="input-group-text"><i class="fa fa-user-tie" aria-hidden="true"></i>
            </div>
        </div>
        <input name="telefrep" type="text" class="form-control" id="telefrep" placeholder="Telefono Rep./Despach" required>
    </div>
    
    <!-- Contacto 2 -->
    <div class="input-group mb-3 mr-lg-3">
        <div class="input-group-prepend">
            <div class="input-group-text"><i class="fa fa-phone-alt" aria-hidden="true"></i>
            </div>
        </div>
        <input name="nombresuper" type="text" class="form-control" id="nombresuper" placeholder="Coorporativo/Supervisor  ">
    </div>
    
    <!-- Telefono 2 --> 
    <div class="input-group mb-3 mr-lg-3">
        <div class="input-group-prepend">
            <div class="input-group-text"><i class="fa fa-phone-alt" aria-hidden="true"></i>
            </div>
        </div>
        <input name="telefcorpo"  type="text" class="form-control" id="telefcorpo" placeholder="Telefono Coorporativo">
    </div>
    
    <!-- Correo Electornico -->
    <div class="input-group mb-3 mr-lg-3">
        <div class="input-group-prepend">
            <div class="input-group-text"><i class="fa fa-envelope" aria-hidden="true"></i>
            </div>
        </div>
        <input name="email" type="text" class="form-control" id="email" placeholder="Correo Electronico">
    </div>
    
    
    <!-- Sitio Web  -->
    <div class="input-group mb-3 mr-lg-3">
        <div class="input-group-prepend">
            <div class="input-group-text"><i class="fa fa-desktop" aria-hidden="true"></i>
            </div>
        </div>
        <input  name="web" type="text" class="form-control" id="web" placeholder="Página Web">
    </div>
    
    
      
    
       <!-- Termina Formulario-->


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button name="insertarproveedor" type="submit" class="btn btn-primary">Guardar</button>
        </div>

       
        
      </div>
    
    </div>
    <?php
          $crearProveedor = new ControladorProveedor();
          $crearProveedor -> ctrCrearProveedor();
          ?>
      </form>

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

 <!-- Copyright -->

 
</body>

</html>