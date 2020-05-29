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
          <h1 class="h3 mb-4 text-gray-800">Service Time - Cambiar Contraseña</h1>

        </div>
      <!-- /.container-fluid -->

    <div class="row">
  
            <div class="col-lg-10 mb-4 rounded mx-auto d-block ">

            
				  <div class="card shadow mb-4">
					<div class="card-header py-3">
					  <h6 class="m-0 font-weight-bold text-primary"></h6>
					</div>
					<div class="card-body">
					  <div class="text-center">
						<h4>Cambiar Contraseña</h4><p>
						<center>
						<div><img src="img/user.jpg"/></div>
						<div class="col-xl-8 col-md-6 mb-4">
									<div class="card border-left-primary shadow h-100 py-2">
										<div class="card-body">
											<div class="row no-gutters align-items-center">
												<div class="col mr-2">
							<div>
							
							<!--form  para no perderlo :'v-->
							<form class="user"  method="POST" action="logica/controller.php">
							<?php $user=$_SESSION['user']; ?>
								<label align="left">Usuario: </label><p>
								<div class="input-group mb-2">
										
										<input type="label" class="form-control" value="<?php echo $user  ?>" aria-label="Username" aria-describedby="basic-addon1"   name="usuario" >
								</div>
								
								
								<label>Cambio de contraseña: </label>
								<div class="input-group mb-3">
										</br>
										<input type="password" class="form-control" placeholder="Nueva contraseña" aria-label="Username" aria-describedby="basic-addon1" name="clave1" required>
								</div>
								<label>Confirmar: </label>
								<div class="input-group mb-3">
										</br>
										<input type="password" class="form-control" placeholder="Repetir contraseña" aria-label="Username" aria-describedby="basic-addon1" name="clave2" required>
								</div>
                                <hr>
								<input type="submit" class="btn btn-primary col-sm-2" name="btnCambiarContraOrdenanza" >
								<hr>	

                             </form>								
						
						
						
						
						</div>

												
												
												</div>
												
											</div>
										</div>
									</div>
								</div></center>
						
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
