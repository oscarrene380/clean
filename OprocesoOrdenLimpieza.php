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
          <h1 class="h3 mb-4 text-gray-800">Service Time - Realizando Orden de Limpieza</h1>

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
                                   <?php
								   include("include/conexionDirectaPruebas.php");
										
											if(isset($_GET['orden'])){
												
												
												$idOrden = $_GET['orden'];
												
					
										$query="select ord.idOrden,ord.titulo,ord.descripcion,ord.fechaCreacion,ord.fechaInicio,ord.fechaProyectadaFin, ord.idEstadoOrden,ord.idLab,lb.nombre as laboratorio,
										ost.nombre as estadoOrden  from ordenlimpiezalab ord
										inner join laboratorio lb on lb.idLab=ord.idLab 
										inner join estadoordenlimpieza ost on ost.idEstadoOrden=ord.idEstadoOrden 
										where idOrden=$idOrden;";
										   
										//$query="SELECT * FROM ordenlimpiezalab where idOrden=5";
								
											$ejecutar = mysqli_query($conn,$query) ;
											
											$i=0;
											
											while($fila=mysqli_fetch_array($ejecutar)){
												$id = $fila['idOrden'];
												$titulo = $fila['titulo'];
												$desc =$fila['descripcion'];
												$fecha = $fila['fechaCreacion'];
												$fechaI = $fila['fechaInicio'];
												$fechaF = $fila['fechaProyectadaFin'];
												$lab = $fila['laboratorio'];
												$estado = $fila['estadoOrden'];
															
																
																
																
												}
												
											}
												
											?>
				
								
								
								
								
								
								
								
								
                                    <tr>
                                        <td width="25%" ><h5 class="font-weight-bold text-gray-800">Orden de Trabajo: </h5></td>
                                        <td><h5 class="text-gray-800"><?php echo $id?></h5></td>
                                    </tr>
                                    <tr>
                                        <td width="25%" ><h5 class="font-weight-bold text-gray-800">Fecha de Asignación: </h5></td>
                                        <td><h5 class="text-gray-800"><?php echo $fecha?></h5></td>
                                    </tr>   
                                    <tr>
                                        <td width="25%" ><h5 class="font-weight-bold text-gray-800">Descripcion: </h5></td>
                                        <td><h5 class="text-gray-800"><?php echo $desc?></h5></td>
                                    </tr>
                                    <tr>
                                        <td width="25%" ><h5 class="font-weight-bold text-gray-800">Laboratorio: </h5></td>
                                        <td><h5 class="text-gray-800"><?php echo $lab?></h5></td>
                                    </tr>
                                    <tr>
                                        <td width="25%" ><h5 class="font-weight-bold text-gray-800">Tiempo estimado de finalización: </h5></td>
                                        <td><h5 class="text-gray-800"><?php echo $fechaI?> / <?php echo $fechaF?></h5></td>
                                    </tr>
                                    <tr>
                                        <td width="25%" ><h5 class="font-weight-bold text-gray-800">Estado actual: </h5></td>
                                        <td><h5 class="text-gray-800"><?php echo $estado?></h5></td>
                                    </tr>
                                    <tr>
									
										  <?php
										  
										     include("include/conexionDirectaPruebas.php");
											 
                                                 if(isset($_GET['orden'])){
												$idDato = $_GET['orden'];
												$consulta = "SELECT * FROM ordenlimpiezalab WHERE idOrden=$idDato";
												
												$ejecutar = mysqli_query($conn,$consulta);
							                   
											
							                  
												while($fila=mysqli_fetch_array($ejecutar)){
													$id = $fila['idOrden'];
													$estado = $fila['idEstadoOrden'];
																								
													$i++;
												}
												if($estado =='EP' ){
													$estBtn='none'; 
													
													} else{
														$estBtn='inline';
													
													}
													
													if($estado =='EP' ){
													$estBtn2='inline'; 
													
													} else{
														$estBtn2='none';
													
													}
												
											}
							
						                     	?>
									<form action="logica/cambioEstado2.php?v1=<?php echo $idOrden?>" method="post">
                                        <td colspan="2">
										
										
										    
										<span class="icon text-white-50 btn btn-danger ">
                                                  <i class="fas fa-trash"></i>
                                        </span>
										<INPUT   class="btn btn-danger "   name="B_Rechazar" TYPE="submit"   VALUE="Cancelar">
										
										<!--configurando pausa y continuar-->
										<span class="icon text-gray-50 btn btn-primary"  style="display:<?php echo$estBtn2?> ;" >
                                                  <i class="fas fa-arrow-right"></i>
                                                </span>
										<INPUT class="btn btn-primary "  name="D_continuar" TYPE="submit"  style="display:<?php echo$estBtn2?> ;" VALUE="Continuar">
										
										
										<span class="icon text-gray-50 btn btn-light"  style="display:<?php echo$estBtn?> ;">
                                                  <i class="fas fa-arrow-right"></i>
                                                </span>
										<INPUT class="btn btn-light "  name="C_espera" TYPE="submit"  style="display:<?php echo$estBtn?> ;" VALUE="En Espera">
										
										<!---------------------------------r-->
										
										
										 <span class="icon text-white-50 btn btn-success ">
                                                  <i class="fas fa-check"></i>
                                                </span>
										<INPUT class="btn btn-success "  name="B_aprovar" TYPE="submit"   VALUE="Finalizar">
										
									</form>	

                                           

											  
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
          <h5 class="modal-title" id="exampleModalLabel">¿Desea cancelar la orden?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Seleccione "Confirmar" a continuación, si desea cancelar la orden, se le redireccionará al inicio y podra cerrar sesión de forma normal.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
          <a class="btn btn-primary" href="logica/cerrarSesion.php">Confirmar</a>
        </div>
      </div>
    </div>
  </div>
  


  <!-- Cancel-->
  <div class="modal fade" id="Cancel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">¿Desea cancelar la orden?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Seleccione "Confirmar" a continuación, si desea cancelar la orden.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
          <a class="btn btn-primary" href="OordenLimpieza.php">Confirmar</a>
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
    })
  </script>

</body>

</html>