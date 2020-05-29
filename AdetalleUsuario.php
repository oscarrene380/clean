<!DOCTYPE html>
<?php 
  session_start();
  require_once dirname(__FILE__).'/include/config.inc';
  include("include/conexionDirectaPruebas.php");
?>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Service Time - Aseo de Laboratorio</title>
  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<?php
  if(!isset($_SESSION['user']) or $_SESSION['nivel'] !== 1)
  {
  	header( "refresh:0.5;url=logica/cerrarSesion.php" );
  }
?>
<!-- Custom styles for this template-->
<link href="css/sb-admin-2.min.css" rel="stylesheet">
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
	
    <?php/*---------------------MENU, el scrip esta hasta abajo*/--------------------?>
	<div class="menuContainer" id="wrapper"></div>
	

    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

       
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

   

            <!-- Nav Item - User Information -->



            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['user'];?></span>
                <img class="img-profile rounded-circle" src="img/user.jpg">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
            
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- TABLA DE CONTENDO INICIO-------------------------------------------------------------------------------------------------------------------------------------------------- -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Service Time - Agregar Usuario</h1>
           
          </div>

      
    <!-- Content Column -->
          <div class="row">
  
            <div class="col-lg-8 mb-4 rounded mx-auto d-block ">

            
				  <div class="card shadow mb-4">
					<div class="card-header py-3">
					  <h6 class="m-0 font-weight-bold text-primary"></h6>
					</div>
					<div class="card-body">
					<div class="text-center">
		  <!--FORM PARA NO PERDERLO :v -->
			<!--<form class="user"  method="POST" action="logica/controller.php">-->
			<div>
			               <?php
										
											if(isset($_GET['buscar'])){
												
												
												$us = $_GET['buscar'];
												
                                            $params = array("buscar" => $us);
											$response = peticion_get($EndPointUsuario, $params); 
											
											if(!array_key_exists("error", $response)) // comprobamos que no hayamos recibido un error
											{
												foreach ($response as $key => $value){
      								              $v1 = $response[$key]->idUser;
												  $v2 = $response[$key]->nombre;
												  $v3 = $response[$key]->apellido;
												  $v4 = $response[$key]->edad;
												  $v5 = $response[$key]->genero;
												  $v6 = $response[$key]->turno;
												  $v7 = $response[$key]->tipo;
												  $v8 = $response[$key]->laboratorio;
												}
												
												
											}
											else
											{
												echo "<script>alert('Error');</script>";
												header( "refresh:0.5;url=../index.php" );
											}
											
												
												
												
											}
												
												
												
											?>
				
			
			
            
					    <div class="form-group row">

								<div class="col-sm-6 mb-3 mb-sm-0 ">
														         <label>Usuario:</label>
												  <input type="email" class="form-control form-control-user"  name="idUser" value="<?php echo $v1?>" disabled>
							   </div>
  						</div>
  						<div class="form-group row">
  							  <div class="col-sm-6 mb-3 mb-sm-0">
							     <label>Nombre:</label>
  								  <input type="text" class="form-control form-control-user" id="" name="" value="<?php echo $v2?> <?php echo $v3?>" disabled>
  							  </div>
  						</div>
  						<div class="form-group row">
						        
  							  <div class="col-sm-6 mb-3 mb-sm-0">
							     <label>Edad:</label>
  								  <input type="text" class="form-control form-control-user" id="" name="" value="<?php echo $v4?>" disabled>
  							  </div>
  						</div>
						<div class="form-group row">
						        
  							  <div class="col-sm-6 mb-3 mb-sm-0">
							  <label>Genero:</label>
  								  <input type="text" class="form-control form-control-user" id="" name="" value="<?php echo $v5?>" disabled>
  							  </div>
  						</div>
						<div class="form-group row">
						       
  							  <div class="col-sm-6 mb-3 mb-sm-0">
							   <label>Turno:</label>
  								  <input type="text" class="form-control form-control-user" id="" name="" value="<?php echo $v6?>" disabled>
  							  </div>
  						</div>
						<div class="form-group row">
						       
  							  <div class="col-sm-6 mb-3 mb-sm-0">
							   <label>Tipo:</label>
  								  <input type="text" class="form-control form-control-user" id="" name="" value="<?php echo $v7?>" disabled>
  							  </div>
  						</div>
						<div class="form-group row">
						        
  							  <div class="col-sm-6 mb-3 mb-sm-0">
							  <label>Laboratorio:</label>
  								  <input type="text" class="form-control form-control-user" id="" name="" value="<?php echo $v8?>" disabled>
  							  </div>
  						</div>
						

  						
  						
  						
  						
  						
           
			   
			 
			   
			   
			   
			 </div>
  						<hr>		
  					  <!-- submit -->
  					   <div class="form-group">
  					  <a href="AgestionarUsuarios.php" class="btn btn-info btn-icon-split ">
  								<span class="icon text-white-50">
  								  <i class="fas fa-arrow-left"></i>
  								</span>
  								<span class="text">Volver</span>
  						 </a> 
  					  
  					  </div>
					<!--  </form>-->
					  </div>		 
					</div>
				  </div>

            
            </div>
        

        </div>
        

      </div>
      <!-- TABLA DE CONTENIDO FIN--------------------------------------------------------------------------------------------------------------------------------------------- -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>utec</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Preparado para irme?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Seleccione "Cerrar sesión" a continuación si está listo para finalizar su sesión actual.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="logica/cerrarSesion.php">cerrar sesión</a>
        </div>
      </div>
    </div>
  </div>
  

 <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  
  

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>
 
  <!-- usé un div con la class "menuContainer" y el menu lo he puesto en un archivo llamado menuAdmin.php  -->
  <script>
    $(document).ready(function () {
      $('.menuContainer').load('menuAdmin.php');
    });
  </script>

</body>

</html>
