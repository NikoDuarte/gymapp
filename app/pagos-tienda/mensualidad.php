<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAGO MENSUALIDAD GYM | GYMAPP</title>
    <!----------logo------------>
    <link rel="icon" href="https://i.ibb.co/7bxtrvw/GYMAPP-Convert-Image.png">
    <!------------------------->
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body  style="background: red; background: linear-gradient(to right, #61aa56a8, #1290e4);">
<!------------------------------------ BARRA DE NAVEGACIÓN ---------------------------------------------------------------->
<nav  class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
    <a href="../index.php"><b><font color="green">GYMAPP</font> </b> </a>
  <div  class="container" >
      <a  class="navbar-brand" href="../index.php">
          <!------------------------------------------ LOGO ----------------------------------------------->
          <img style="width: 60px;"  src="https://i.ibb.co/7bxtrvw/GYMAPP-Convert-Image.png" style="width: 7rem;">
          
      </a>
      <a style="text-align: left;" href="../index.html"><b>Pagina principal</b> </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
  </div>
</nav><br>
<!----------------------------------------------- PLAN ----------------------------------------------------------------->
<center><div class="card" style="width: 60rem;">
    <div style="background: red; background: linear-gradient(to right, #61aa56a8, #1290e4);" class="card-body">
        <center  >
            <div    style="width: 900px;"  class="card-colums"  style="width: 18rem;"><br>
                <div style="text-align: left;" class="card-body">
                    <h3 class="steptitle" data-uia="steptitle" ><b>Selecciona el plan ideal para ti.</b></h3>
                    <h6>Escoje  un plan inferior o superior el cual desee.</h6>
                </div>
                <div  class="row">
                    <div  style="text-align: left;"  class="col-md" >
                        <h2><b>DESCRICIÓN</b></h2>
                        <hr><h6>Precio mensual</h6>
                        <hr><h6>Entrenador personal</h6>
                        <hr><h6>Vestidores.</h6>
                        <hr><h6>Parqueadero</h6>
                    </div>
    ​
                    <div class="col-md"  >
                    <a href="PAGOS.php?cod=1" class="btn btn-danger btn-block"><?php 	//include("./conexionbd.php");  
											
						/*$con = New Conexion();
                        $resultados = $con->query("SELECT tiempo FROM planes WHERE id_planes = '1'");
                        while ($consulta = mysqli_fetch_array($resultados)) {
                            echo $consulta ['tiempo'];
                            
                        }*/
							
						                                                    
			            ?></a>
                        <hr><h6><?php 	 
											/*
                                            $resultados = $con->query("SELECT precio FROM planes WHERE id_planes = '1'");
                                            while ($consulta = mysqli_fetch_array($resultados)) {
                                                echo $consulta ['precio'];
                                                
                                            }*/
                                  ?></h6>
                        <hr><h6>SI</h6>
                        <hr><h6>SI</h6>
                        <hr><h6>NO</h6>
                    </div> 
               
                    <div class="col-md" >
                    <a href="PAGOS.php?cod=2" class="btn btn-danger btn-block">
                                            <?php 
                                            /*	
                                            $resultados = $con->query("SELECT tiempo FROM planes WHERE id_planes = '2'");
                                            while ($consulta = mysqli_fetch_array($resultados)) {
                                                echo $consulta ['tiempo'];
                                                
                                            }
                                               */ 
                                                                                                
                                            ?></a>
                        <hr><h6><?php 	/* 
											
                                            $resultados = $con->query("SELECT precio FROM planes WHERE id_planes = '2'");
                                            while ($consulta = mysqli_fetch_array($resultados)) {
                                                echo $consulta ['precio'];
                                                
                                            }
                                            */
                                  ?></h6>
                        <hr><h6>Si</h6>
                        <hr><h6>SI</h6>
                        <hr><h6>SI</h6>
                    </div>
                  
                    <div class="col-md" >
                    <a href="PAGOS.php?cod=3" class="btn btn-danger btn-block">
                                            <?php 
                                            /*	
                                            $resultados = $con->query("SELECT tiempo FROM planes WHERE id_planes = '3'");
                                            while ($consulta = mysqli_fetch_array($resultados)) {
                                                echo $consulta ['tiempo'];
                                                
                                            }
                                                */
                                                                                                
                                            ?></a>
                        <hr><h6><?php 	 
											/*
                                            $resultados = $con->query("SELECT precio FROM planes WHERE id_planes = '3'");
                                            while ($consulta = mysqli_fetch_array($resultados)) {
                                                echo $consulta ['precio'];
                                                
                                            }*/
                                  ?></h6>
                        <hr><h6>Si</h6>
                        <hr><h6>Si</h6>
                        <hr><h6>SI</h6>
                    </div>
                </div><br>
                
            </div>
        </center>
            <h6 style="text-align: center;"> Consulta los <button class="btn btn-link btn-sm">Términos de uso</button>  para obtener más información
            </h6>
        <!------------------------>
    </div>
</center>
<!------------------------------------ FOOTER ------------------------------------------------------------------------------------>
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