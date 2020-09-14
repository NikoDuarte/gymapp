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
    <title>Pagos</title>
    <link href="https://fonts.googleapis.com/css?family=Baloo+Da+2:400,700,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="icon" href="https://i.ibb.co/7bxtrvw/GYMAPP-Convert-Image.png">
    <link rel="stylesheet" href="assets/css/publicacion.css">
</head>
<body style="background-color: rgb(21, 128, 0);background: linear-gradient(to right, #61aa56a8, #1290e4);">
<?php 
include("../parents/menu.php");
include("../php/envioPagos.php");
?>

<?php
$cod = $_GET['cod'];
$con = New Conexion();

$query = $con->query("SELECT * FROM productos WHERE id_producto = $cod");
while ($resultado = mysqli_fetch_array($query)) {
    ?>
    <table>
       <tr>
          <td>
          <?php
              echo "<img  src='".$resultado ['imagen']."' height='500' />";
          ?>
          </td>
          <td>
          </td>
          <td>
          <h2>Informacion producto:</h2>
              Nombre del producto:
              <br>
              <input type="text" value="<?php echo $resultado['nombre'];?>" disabled>
              <br>
              Tipo de producto:
              <br>
              <input type="text" value="<?php echo $resultado['tipo'];?>" disabled>
              <br>
              El precio del producto es:
              <br>
              <input type="text" value="<?php echo $resultado['precio'];?>" disabled>
              <br>
              <br>
              <textarea name="" value="" disabled><?php echo $resultado['descripcion'];?></textarea>
              <td>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              </td>
              <td>
              <form method="post">
              <h2>Compra el producto:</h2>
              <br>
              <input type="text" name="direccion" id="" placeholder="Ingresa tu direccion...">
              <br>
              <br>
              <input type="text" name="telefono" id="" placeholder="Ingresa tu telefono...">
              <br>
              <br>
              <select name="tipoDoc">
                  <option value="C.C">Cedula de ciudadania</option>
                  <option value="C.E">Cedula de extranjeria</option>
                  <option value="T.I">Tarjeta de identidad</option>
              </select>
              <br>
              <br>
              <input type="text" name="documento" placeholder="Ingresa tu documento">
              <br>
              <br>
              <select name="pago">
                   <option value="tarjetaC">Tarjeta Credito</option>
                   <option value="tarjetaD">Tarjeta Debito</option>
              </select>
              <br>
              <br>
              <input type="text" name="numTarjeta" placeholder="Ingrese el numero de su tarjeta..">
              <br>
              <br>
              <input type="date" name="fechaEx">
              <br>
              <br>
              <p>Si su tarjeta es credito ingresa el codigo CVV</p>
              <input type="text" name="cvv" placeholder="Ingrese el codigo">
              <br>
              <br>
              <input type="submit" value="Comprar" name="compra">
              </form>
              </td>
          </td>
       </tr>
    </table>
<?php
}

?>
    
</body>
</html>