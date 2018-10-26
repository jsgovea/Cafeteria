<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php"> ← Regresar al menu principal</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="pago_clientes.php?id=0">Clientes</a></li>
        <li><a href="kiosco_admin.php">Kiosco</a></li>
        <li><a href="caja_admin.php?id=0">Venta en caja</a></li>
      </ul>
      <form class="navbar-form navbar-right" action="php/cerrarSesion.php" method="post">
        <button type="submit" class="btn btn-primary">Cerrar sesión</button>
      </form>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>