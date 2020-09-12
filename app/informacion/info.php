<?php

session_start();
ob_start();

$correo = $_SESSION['correo'];
$id = $_SESSION['user'];
$name = $_SESSION['username'];
if (!isset($_SESSION['user'],$_SESSION['correo'],$_SESSION['username'])) {
    header("location:../login-registro/login.php");
}

include("../../config/conexion.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informacion Perfiles</title>
    <link href="https://fonts.googleapis.com/css?family=Baloo+Da+2:400,700,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="icon" href="https://i.ibb.co/7bxtrvw/GYMAPP-Convert-Image.png">
    <link rel="stylesheet" href="../assets/css/publicacion.css">
</head>
<body style="background-color: rgb(21, 128, 0);background: linear-gradient(to right, #61aa56a8, #1290e4);">

<ul class="nav nav-tabs" style="background-color: white;">
        <li class="nav-item">
          <img style="width: 60px;" src="https://i.ibb.co/7bxtrvw/GYMAPP-Convert-Image.png" alt="">
        </li>
        <li class="nav-item-active">
          <a class="nav-link" href="../index.php"><b>inicio</b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="info.php"><b>Informacion</b></a>
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
                      <a class='nav-link' href='PAGO MENSUALIDAD GYM.php'><b>Mensualidad de su gimnasio</b></a>
                      </li>";
                      break;
                    
                    default:
                      # code...
                      break;
                  }

                ?>
  </ul>
<?php
  if (isset($_POST['actualizar']))
{
    $id = $_SESSION['user'];

  $nombre = $_POST['nombre'];
  $correo = $_POST['correo'];
  $password = $_POST['password'];


    $sql = $con->query("UPDATE usuarios SET nombre = '$nombre', correo = '$correo', password = '$password' WHERE id = '$id'");
  if ($sql) {
    ?>
    <div class="cont" align="center">
    <h3 class="ok">Se ha modificado tu perfil exitosamente!</h3>
    <meta http-equiv="refresh" content="2;URL=info.php">
    </div>
<?php
}else{
  ?>
  <div class="cont" align="center">
  <h3 class="bad">Ups! a ocurrido un error al editar ti perfil</h3>
  </div>
<?php
}
}
?>

<div class="content">
    <h1>Empieza A Modificar Tu Perfil</h1>
    <form action="" method="post">

          <?php 
      $con = New Conexion();
      if (isset($_POST['consultar'])){
        $id = $_SESSION['user'];
        $resultados = $con->query("SELECT * FROM usuarios WHERE id = '$id'");
      while ($consulta = mysqli_fetch_array($resultados)) {
      
      ?>
      <br><br>
      <h2 class="titulo1">Tu nombre es:</h2>
      <input type="text" name="nombre" id="nombre" value="<?php  echo $consulta ['nombre'];?>">
      <br>
      <h2 class="titulo1">Tu correo es:</h2>
      <input type="text" name="correo" id="correo" value="<?php echo $consulta ['correo'];?>" >
      <?php
      switch($consulta['rol']){
          case 'Gimnasio':
            ?>
            <h2 class="titulo2">Tu codigo gym es:</h2>
            <input type="text" name="codigo_gym" id="codigo_gym" disabled value="<?php echo $consulta ['codigo_gym'];?>">
            <br>
            <?php
            break;
            case 'Usuario':
                ?>
                <h2 class="titulo2">Tu codigo gym es:</h2>
                <input type="text" name="codigo_gym" id="codigo_gym" disabled value="<?php echo $consulta ['codigo_gym_user'];?>">
                <br>
                <?php
                break;
    
            default:

            break;
      }
      ?>       

      <h2 class="titulo2">Tu rol es:</h2>
      <input type="text" name="rol" id="rol" disabled value="<?php echo $consulta ['rol'];?>">
      <br>
      <h2 class="titulo2">Tu contraseña es:</h2>
      <input type="text" name="password" id="password" value="<?php echo $consulta ['password'];?>"><?php }} ?>
      <br>

      <br>

      <input type="submit" class="consultar" name="consultar" id="boton" value="consulta mis datos">
      <input type="submit" class="modificar" name="actualizar" id="boton" value="actualizar datos">
    </form>
</div>
<script src="https://kit.fontawesome.com/a81368914c.js"></script>

</body>
</html>