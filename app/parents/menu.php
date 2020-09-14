<ul class="nav nav-tabs" style="background-color: white;">
        <li class="nav-item">
          <img style="width: 60px;" src="https://i.ibb.co/7bxtrvw/GYMAPP-Convert-Image.png" alt="">
        </li>
        <li class="nav-item-active">
          <a class="nav-link" href="index.php"><b>inicio</b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="informacion/info.php"><b>Informacion</b></a>
        </li>
        <?php
                  $con = New Conexion();
                  $consulta=$con->query("SELECT rol FROM usuarios WHERE id = $id");
                  $fila = $consulta->fetch_object();

                  $rol = $fila->rol;

                  switch ($rol) {
                    case 'Usuario':
                      echo "
                      <li class='nav-item'>
                      <a class='nav-link' href='pagos-tienda/mensualidad.php'><b>Mensualidad de su gimnasio</b></a>
                      </li>";
                      break;
                    
                    default:
                      # code...
                      break;
                  }

                ?>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><b>TIENDA</b></a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="pagos-tienda/tienda-ropa.php">ROPA</a>
            <a class="dropdown-item" href="pagos-tienda/tienda-accesorios.php">ACCESORIOS</a>
            <a class="dropdown-item" href="pagos-tienda/tienda-vitaminas.php">VITAMINAS </a>
          </div>
        </li>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><b> <?php echo $_SESSION['correo'] ?></b></a>
        <div class="dropdown-menu">
        <a class="dropdown-item" href="../login-registro/php/logout.php">Cerrar sesion</a>
        </div>
        </li>
  </ul>