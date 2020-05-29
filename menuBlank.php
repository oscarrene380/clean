<!DOCTYPE html>
<?php session_start();?>
<html lang="en">





<?php
/**/

/*
  

if (!isset($_SESSION['user']) or $_SESSION['nivel'] !== 1 ){
     
	   
	  header( "refresh:0.5;url=logica/cerrarSesion.php" ); 
         }

*/
?>

 


</head>

<!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="blank.php">
        <div class="sidebar-brand-icon ">
          <i class="fas fa"><img  style="width: 4rem;" src="img/icon-utec.png" alt=""></i>
        </div>
        <div class="sidebar-brand-text mx-3"><i class="fa fa-cog fa-spin fa-3x fa-fw"></i>
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
			<a class="nav-link" href="">
			  <i class="fas fa-fw fa-home"></i>
			  <span>INICIO</span></a>
		  </li> 

      <!-- Divider -->
      <hr class="sidebar-divider">

 
	   <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="">
          <i class="fas fa-fw fa-user-cog"></i>
          <span>Blanco 1</span></a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="">
		   <i class="fas fa-building"></i>
          <span>Blanco 2</span></a>
		  
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="">
          <i class="fas fa-desktop"></i>
          <span>Blanco 3</span></a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="">
          <i class="fas fa-eye"></i>
          <span>Blanco 4</span></a>
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
