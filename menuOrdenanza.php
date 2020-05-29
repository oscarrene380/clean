<!DOCTYPE html>
<?php session_start();?>
<html lang="en">


</head>

<!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="inicioEncargado.php">
        <div class="sidebar-brand-icon ">
          <i class="fas fa"><img  style="width: 4rem;" src="img/icon-utec.png" alt=""></i>
        </div>
        <div class="sidebar-brand-text mx-3"><i class="fas fa-broom fa-spin fa-3x fa-fw"></i>
<span class="sr-only">Loading...</span></i></div>  
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

     

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Interfaz
      </div>

  

      <!-- Nav Item - Utilities Collapse Menu -->
   <!-- Nav Item - Tables -->
		  <li class="nav-item">
			<a class="nav-link" href="inicioOrdenanza.php">
			  <i class="fas fa-fw fa-home"></i>
			  <span>INICIO</span></a>
		  </li> 

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Nav Item - Orden de Limpieza Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link" href="OordenLimpieza.php">
          <i class="fas fa-fw fa-broom"></i>
          <span>Orden de Limpieza</span>
        </a>
      </li>

      <!-- Nav Item - Laboratorios Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link" href="OlaboratoriosOrdenanza.php">
          <i class="fas fa-fw fa-tv"></i>
          <span>Laboratorios Asignados</span>
        </a>
      </li>

       <!-- Nav Item - Historico de Ordenes Collapse Menu -->
       <li class="nav-item">
        <a class="nav-link" href="OhistoricoOrdenanza.php">
          <i class="fas fa-fw fa-newspaper"></i>
          <span>Historico de Ordenes</span>
        </a>
      </li>

       <!-- Nav Item - Cambiar Contraseņa Collapse Menu -->
       <li class="nav-item">
        <a class="nav-link" href="OcambiarContraOrdenanza.php">
          <i class="fas fa-fw fa-pen"></i>
          <span>Cambiar Contrase&ntilde;a</span>
        </a>
      </li>
	
      
	  
	  
	  

      
	
   
 
   

      <!-- Nav Item - Tables 
      <li class="nav-item">
        <a class="nav-link" href="tables.html">
          <i class="fas fa-fw fa-table"></i>
          <span>Tables</span></a>
      </li> -->

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>


  
  

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>



</html>
