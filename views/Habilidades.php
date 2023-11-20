<?php
  define("BASE_URL","/Portafolio/views/");
  require_once("../config/conexion.php");
  if(isset($_SESSION["usu_id"])){
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <?php
    require_once("modulos/head.php");
  ?>
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <?php
    require_once("modulos/header.php");
  ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  
  <?php
    require_once("modulos/menú.php");
  ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Redes Sociales</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Inicio</a></li>
              <li class="breadcrumb-item active">Redes Sociales</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="card">
<div class="card-header">
<h3 class="card-title">Habilidades</h3>
</div>

<div class="card-body">
    <button class="btn btn-primary">Nuevo</button>
<table id="example1" class="table table-bordered table-striped">
<thead>
<tr>
<th>Id</th>
<th>Habilidad</th>
<th>Descripción</th>
<th>Estado</th>
</tr>
</thead>
<tbody>
</tbody>

</table>
</div>

</div>

</div>

</div>

</div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php
    require_once("modulos/footer.php");
  ?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<?php
    require_once("modulos/js.php");
  ?>
</body>
</html>

<?php
  }else{
    header("Location:".Conectar::ruta()."/views/404.php");
  }
?>