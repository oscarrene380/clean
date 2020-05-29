<!DOCTYPE html>
<html lang="es">

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
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#" data-toggle="modal" data-target="#Cancel">
        <img src="img/icon-utec.png" height="300%">
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Interface
      </div>

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="modal" data-target="#Cancel">
          <i class="fas fa-fw fa-home"></i>
          <span>Inicio</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider m-0">

      

      <!-- Nav Item - Orden de Limpieza Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="modal" data-target="#Cancel">
          <i class="fas fa-fw fa-broom"></i>
          <span>Orden de Limpieza</span>
        </a>
      </li>

      <!-- Nav Item - Laboratorios Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="modal" data-target="#Cancel">
          <i class="fas fa-fw fa-tv"></i>
          <span>Laboratorios Asignados</span>
        </a>
      </li>

       <!-- Nav Item - Historico de Ordenes Collapse Menu -->
       <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="modal" data-target="#Cancel">
          <i class="fas fa-fw fa-newspaper"></i>
          <span>Historico de Ordenes</span>
        </a>
      </li>

       <!-- Nav Item - Cambiar Contraseña Collapse Menu -->
       <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="modal" data-target="#Cancel">
          <i class="fas fa-fw fa-pen"></i>
          <span>Cambiar Contraseña</span>
        </a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
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
          <h1 class="h3 mb-4 text-gray-800">Service Time - Proceso Finalizado</h1>

        </div>
        <!-- /.container-fluid -->
        <div>

            <div class="card shadow mb-4">
                <div class="card-header py-3">

                </div>
                <div class="card-body">
                    <div class="table-responsive-lg">
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <td width="25%" ><h5 class="font-weight-bold text-gray-800">Orden de Limpieza: </h5></td>
                                    <td><h5 class="text-gray-800"></h5></td>
                                </tr>
                                <tr>
                                    <td width="25%" ><h5 class="font-weight-bold text-gray-800">Fecha de finalización: </h5></td>
                                    <td><h5 class="text-gray-800"></h5></td>
                                </tr>   
                                <tr>
                                    <td width="25%" ><h5 class="font-weight-bold text-gray-800">Estado actual: </h5></td>
                                    <td><h5 class="text-gray-800"></h5></td>
                                </tr>
                                <tr>
                                    <td width="25%" ><h5 class="font-weight-bold text-gray-800">Comentario: </h5></td>
                                    <td>
                                        <form>
                                            <div class="form-group">
                                              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                            </div>
                                          </form>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <a href="OordenLimpieza.php" class="btn btn-success btn-icon-split">
                                            <span class="icon text-white-50">
                                              <i class="fas fa-check"></i>
                                            </span>
                                            <span class="text">Listo</span>
                                          </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
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
          <h5 class="modal-title" id="exampleModalLabel">¿Listo para finalizar?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Seleccione "Confirmar" para terminar el proceso de limpieza, se le redireccionará al inicio para que pueda cerrar sesion normalmente.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
          <a class="btn btn-primary" href="InicioOrdenanza.html">Confirmar</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Cancel-->
  <div class="modal fade" id="Cancel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">¿Listo para finalizar?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Seleccione "Listo" para terminar el proceso de limpieza y poder regresar a las ordenes de limpieza.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">O.K.</button>
          
          
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

</body>

</html>