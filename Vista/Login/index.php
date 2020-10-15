<nav class="mt-2">
</nav>
  </aside>
<!-- sdfsdfdsfdsfdsdsdsfdsfdsfdsfdsfdsfdsfdsfdsfdsf -->
<div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Bienvenido</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <div class="login-box">
      <div class="login-logo">
        <a href="#"><b>Admin</b> Mesa de Partes</a>
      </div>
      <div class="card">
        <div class="card-body login-card-body">
          <p class="login-box-msg">Inicio de sesión</p>

          <form method="post">
            <div class="input-group mb-3">
              <input type="text" name="DNI" class="form-control" placeholder="DNI">
            </div>
            <div class="input-group mb-3">
              <input type="password" name="contrasenia" class="form-control" placeholder="Contraseña">
            </div>
            <div class="row">
              <div class="col-8">
                <div class="icheck-primary">
                  <input type="checkbox" id="remember">
                  <label for="remember">
                    Recordar credenciales
                  </label>
                </div>
              </div>
              <div class="col-4">
                <button type="submit" class="btn btn-primary btn-block">Ingresar</button>
              </div>
            </div>
          </form>
          <p class="mb-1 text-danger">
            <?php echo $datos;?>
          </p>
          
        </div>
      </div>
    </div>
