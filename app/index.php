<?php

session_start();
ob_start();

$correo = $_SESSION['correo'];
$id = $_SESSION['user'];
$name = $_SESSION['username'];
if (!isset($_SESSION['user'],$_SESSION['correo'],$_SESSION['username'])) {
    header("location:../login-registro/login.php");
}

include("../config/conexion.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> GYMAPP | PRINCIPAL</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="./EstiloW.css">
    <link href="https://fonts.googleapis.com/css?family=Baloo+Da+2:400,700,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="icon" href="https://i.ibb.co/7bxtrvw/GYMAPP-Convert-Image.png">
    <link rel="stylesheet" href="assets/css/publicacion.css">
</head>
<body style="background-color: rgb(21, 128, 0);background: linear-gradient(to right, #61aa56a8, #1290e4);">
<!--menu import-->
<?php
include("parents/menu.php");
?>

<div class="content">
<?php 
include("parents/publicacion.php");
?>
<br>

<!--Recorrido consulta publicacion-->
<?php
                  $con = New Conexion();
                  $consulta=$con->query("SELECT rol FROM usuarios WHERE id = $id");
                  $fila = $consulta->fetch_object();

                  $rol = $fila->rol;

                  switch ($rol) {
                    case 'Gimnasio':
                      include("parents/recorridoPublic.php");
                      break;
                      case 'Usuario':
                        include("parents/recoPublicUser.php");
                        break;  
                    
                    default:
                      # code...
                      break;
                  }

                ?>

</div>
<br>
<br>
<br>

<!------------------------------------- PIE DE PAGINA ------------------------------------------------>
<footer style="color: #999985; padding-left: 8%; padding-right: 5%; padding-top: 2%; margin-top: 7%; backdrop-filter: brightness(0.3);"><font face="sans-serif" weight="normal">
  <div class="row">
      <div class="float-left col-6">
        <p class="footer-top" style="text-align: left;" >
          <font color="gray">¿Preguntas? Llama al</font>
         <a class="footer-top-a" href=""><font color="blue">000000000000</font> </a><br>
        </p>
      </div>
      <div class="float-right col-6">
          <p>GYMAPP</p>
      </div>
  </div>
  <div class="row">
      <div class="col-6">
        <a href="..."><font color="gray">centro de ayuda</font></a><br>
        
      </div>
      <div class="col-6">
        <a href="..."><font color="gray">contactanos</font></a><br>
        
      </div>
  </div><br>
  <div class="row">
    <div class="col-6">
      
      <a href="..."> <font color="gray">terminos de uso</font></a>
    </div>
    <div class="col-6">
      
      <a href="..."> <font color="gray">privacidad</font> </a>
    </div>
</div><br>
  <div class="row">
    <div class="col-6">
        <img style="width: 20px;" src="https://image.flaticon.com/icons/svg/733/733547.svg" alt="">
        <a href="..."><font color="gray">GYMAPP</font></a><br>
        
    </div><br>
    <div class="col-6">
        <img style="width: 20px;" src="https://image.flaticon.com/icons/svg/733/733579.svg" alt="">
        <a href="..."><font color="gray">@GYMAPP</font></a><br>
        
    </div>
  </div><br>
  <!--------------------------------->
  <div class="row">
    <div class="col-6">
        
        <img style="width:20px;" src="https://image.flaticon.com/icons/svg/733/733558.svg" alt="">
        <a href="..."> <font color="gray">@GYMAPP</font></a><br>
    </div><br>
    <div class="col-6">
        
        <img style="width: 20px;" src="https://image.flaticon.com/icons/svg/124/124034.svg" alt="">
          <a href="..."><font color="gray">3143356577</font></a><br><br>
          &copy; 2020 Aplux
    </div>
  </div><br>
  
</footer>
</body>
<script src="assets/js/publicacion.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/a81368914c.js"></script>

​
</html>