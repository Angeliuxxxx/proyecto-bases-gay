<?php
include ('../app/config.php');
include ('../layout/sesion.php');
include ('../layout/parte1.php');?>


<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1 class="m-0">Registro de usuarios</h1>
          </div><!-- /.col -->
          
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
        <!-- /.content-header -->
                    
                    <!-- Main content -->
                    <div class="content">
                    <div class="container-fluid">
                      <div class= "row">
                        <div class="col-md-5">
                        <div class="card card-primary collapsed-card">
<div class="card-header">
<h3 class="card-title">Llenar datos nuevos</h3>
<div class="card-tools">
<button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
</button>
</div>

</div>

<div class="card-body" style="display: block;">
<div class="row">
  <div class="col-md-12">
    <form action="../app/controllers/usuarios/create.php" method = "post">
      <div class="form-group">
        <label for="">Nombres</label>
        <input type="text" name="nombres" class="form-control" placeholder="Escriba el nombre del nuevo usuario...">
      </div>
      <div class="form-group">
        <label for="">Email</label>
        <input type="email" name="email" class="form-control" placeholder="Escriba el correo del nuevo usuario...">
      </div>
      <div class="form-group">
        <label for="">Contraseña</label>
        <input type="text" name="password_user" class="form-control">
      </div>
      <div class="form-group">
        <label for="">Confirmar contraseña</label>
        <input type="text" name="password_repeat" class="form-control">
      </div>
      <hr>
      <div class="form-group">
        <a href=""class="btn btn-secondary">Cancelar</a>
        <button type="submit" class="btn btn-primary">Guardar</button>
      </div>
    </form>
  </div>
</div>
</div>

</div>
        </div>
                        </div>
                      </div>



        </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- /.control-sidebar -->

    <?php include ('../layout/parte2.php');?>