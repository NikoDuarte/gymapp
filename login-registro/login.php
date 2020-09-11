<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN | GYMAPP</title>
    <!----------logo------------>
    <link rel="icon" href="https://i.ibb.co/7bxtrvw/GYMAPP-Convert-Image.png">
    <!------------------------->
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="assets/css/estiloslog.css">
</head>
<body  style="background: red; background: linear-gradient(to right, #61aa56a8, #1290e4);">
    <!-- Navigation -->
    <nav  class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
        <a href="../index.html"><b><font color="green">GYMAPP</font> </b> </a>
      <div  class="container" >
          <a  class="navbar-brand" href="../index.html">
              <!------------------------------------------ LOGO ----------------------------------------------->
              <img style="width: 60px;"  src="https://i.ibb.co/7bxtrvw/GYMAPP-Convert-Image.png" style="width: 7rem;">
              <!----------------------------------------------------------------------------------------------->
          </a>
          <a style="text-align: left;" href="../index.html"><b>Pagina Inicial</b> </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
      </div>
    </nav>
    <?php
    include("php/validar.php");
    ?>
    <div class="container" style=" margin-top: 6%;">
      <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
          <div class="card card-signin my-5" style="border: 0; border: radius 1rem; box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.1); background-color: #5bec48;">
            <div class="card-body" style="padding: 2rem;">
              <h5 class="card-title text-center" style="margin-bottom: 2rem; font-weight: 300; font-size: 1.5rem; color: white; font-weight: bold;"><font face="sans-serif">GYMAPP <br> INICIO DE SESIÓN </font></h5>
              <form method="POST" class="form-signin" style="width: 100%;">
                
                <div class="form-label-group" style="position: relative; margin-bottom: 1rem; margin-bottom: 7%;">
                    <!--Ingreso correo-->
                  <input name="correo" type="email" id="inputEmail" class="form-control" style="height: auto; border-radius: 2rem;" placeholder="Correo electronico" required autofocus>
                  
                </div>

                <div class="form-label-group" style="padding: var(--input-padding-y) var(--input-padding-x); margin-bottom: 7%;">
                    <!--Ingreso Password-->
                  <input name="pass" type="password" id="inputPassword" class="form-control" style="height: auto; border-radius: 2rem;" placeholder="Contraseña" required>
                </div>

                <div class="custom-control custom-checkbox mb-3" style="margin-bottom: 7%;">
                  <input type="checkbox" class="custom-control-input" id="customCheck1">
                  <label class="custom-control-label" for="customCheck1" style="color: white;">Recordar contraseña</label>
                </div>
                <a class="btn btn-lg btn-block" type="submit" style="background-color: #6451bda8; color: white;" ><input type="submit" value="Iniciar Sesión" name="iniciar"><font face="sans-serif"></font></a>
              </form>
            </div>
          </div>
        </div>
      </div>
      
       <!----------------------------- CARRUCEL ---------------------------------------->
    <center>
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div  class="carousel-item active">
                <img class="d-block w-70"  src="https://www.dw.com/image/53390134_303.jpg" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-50" src="https://as01.epimg.net/argentina/imagenes/2020/04/15/tikitakas/1586970559_336126_1586972775_noticia_normal_recorte1.jpg" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-50" src="https://images.theconversation.com/files/317906/original/file-20200301-166496-1qxkfiq.jpg?ixlib=rb-1.1.0&rect=0%2C0%2C3594%2C2382&q=45&auto=format&w=496&fit=clip" alt="Third slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div></center>
        <!----------------------------- CARRUCEL ---------------------------------------->
    </div>
    <footer style="color: #999985; padding-left: 8%; padding-right: 5%; padding-top: 2%; margin-top: 7%; backdrop-filter: brightness(0.3);"><font face="sans-serif" weight="normal">
      <div class="row">
          <div class="float-left col-6">
            <p class="footer-top" style="text-align: left;" >
              <font color="gray">¿Preguntas? Llama al</font>
             <a class="footer-top-a" href=""><font color="blue">01 800 917 1564</font> </a><br>
          </p>
          </div>
          <div class="float-right col-6">
              <p>GYMAPP</p>
          </div>
      </div>
      <div class="row">
          <div class="col-6">
            <a href="..."><font color="gray">centro de ayuda</font></a><br>
            <a href="..."> <font color="gray">terminos de uso</font></a>
          </div>
          <div class="col-6">
            <a href="..."><font color="gray">contactanos</font></a><br>
            <a href="..."> <font color="gray">privacidad</font> </a>
          </div>
      </div><br>
      <div class="row">
        <div class="col-6">
            <img style="width: 20px;" src="https://image.flaticon.com/icons/svg/733/733547.svg" alt="">
            <a href="..."><font color="gray">@oiajdf</font></a><br>
            <img style="width:20px;" src="https://image.flaticon.com/icons/svg/733/733558.svg" alt="">
            <a href="..."> <font color="gray">@oiajdf</font></a><br>
        </div><br>
        <div class="col-6">
            <img style="width: 20px;" src="https://image.flaticon.com/icons/svg/733/733579.svg" alt="">
            <a href="..."><font color="gray">@oiajdf</font></a><br>
            <img style="width: 20px;" src="https://image.flaticon.com/icons/svg/124/124034.svg" alt="">
                <a href="..."><font color="gray">3143356577</font></a><br>
            
        </div>
      </div><br>
  </footer>

    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>