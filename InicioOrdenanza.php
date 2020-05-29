<!DOCTYPE html>
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

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  
 <?php
session_start();

  require_once dirname(__FILE__).'/include/config.inc';

if (!isset($_SESSION['user']) or $_SESSION['nivel'] !== 3 ){
     
	   
	  header( "refresh:0.5;url=logica/cerrarSesion.php" ); 
         }
  

  ?>

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

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['user'];?></span>
                <img class="img-profile" src="img/ordenanza.png">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Cerrar Sesion
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Service Time - Aseo de Laboratorio</h1>

        </div>
        <!-- /.container-fluid -->

         <!-- /.container-fluid -->
         <div>

          <div class="card shadow mb-4">
              <div class="card-header py-3">

              </div>
              <div class="card-body">
                  <div class="table-responsive-lg">
                      <table class="table table-bordered">
					   <?php
										
											
												
												$us = $_SESSION['user'];
												
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
											
												
												
												
											
												
												
												
											?>
					  

                          <tbody>
                              <tr>
                                  <td width="25%" ><h5 class="font-weight-bold text-gray-800">ID USER: </h5></td>
                                  <td><h5 class="text-gray-800"><?php echo $v1?></h5></td>
                              </tr>
                              <tr>
                                  <td width="25%" ><h5 class="font-weight-bold text-gray-800">Nombre: </h5></td>
                                  <td><h5 class="text-gray-800"><?php echo $v2?> <?php echo $v3?></h5></td>
                              </tr>   
                              <tr>
                                  <td width="25%" ><h5 class="font-weight-bold text-gray-800">Laboratorio: </h5></td>
                                  <td><h5 class="text-gray-800"><?php echo $v8?></h5></td>
                              </tr>
                              <tr>
                                  <td width="25%" ><h5 class="font-weight-bold text-gray-800">Edad: </h5></td>
                                  <td><h5 class="text-gray-800"><?php echo $v4?></h5></td>
                              </tr>
                              <tr>
                                  <td width="25%" ><h5 class="font-weight-bold text-gray-800">Genero: </h5></td>
                                  <td><h5 class="text-gray-800"><?php echo $v5?></h5></td>
                              </tr>
                              <tr>
                                  <td width="25%" ><h5 class="font-weight-bold text-gray-800">Turno: </h5></td>
                                  <td><h5 class="text-gray-800"><?php echo $v6?></h5></td>
                              </tr>
                              
                          </tbody>
                      </table>
                  </div>
              </div>

          </div>

  </div>



        

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; UTEC 2020</span>
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
          <h5 class="modal-title" id="exampleModalLabel">¿Preparado para irte?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Seleccione "Cerrar Sesión" a continuación, si está listo para finalizar su sesión actual.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
          <a class="btn btn-primary" href="logica/cerrarSesion.php">Cerrar Sesión</a>
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
      $('.menuContainer').load('menuOrdenanza.php');
    });
  </script>

</body>

</html>
