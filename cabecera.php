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
      <a class="navbar-brand" href="index.php">Cafeteria CESUN</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="tabla.php">Usuarios</a></li>
        <li><a href="inventario.php">Productos</a></li>
        <li><a href="platillos.php">Platillos</a></li>
        <li><a href="ingredientes.php">Ingredientes</a></li>
      </ul>
      <form class="navbar-form navbar-right" action="caja.php?id=0" method="post">
        <button type="submit" class="btn btn-danger">Realizar venta</button>
      </form>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>