<?php

$correo = $_SESSION['correo'];
$id = $_SESSION['user'];
$name = $_SESSION['username'];
if (!isset($_SESSION['user'],$_SESSION['correo'],$_SESSION['username'])) {
    header("location:../login-registro/login.php");
}


if (isset($_POST['envio'])) {
    
    $con = New Conexion();

    $titulo = $_POST['nombre'];
    $descrip = $_POST['descripcion'];
    $tipo = $_POST['tipo'];
    $precio = $_POST['precio'];

    $nomImg = $_FILES['imagen']['name'];

    $ruta = "img";
    $ruta = $ruta."/".$nomImg;

    $query = $con->query("SELECT * FROM usuarios WHERE id = $id");

    $numfilas = $query->num_rows;

        $fila = $query->fetch_object();
        $codigo= $fila->codigo_gym;




    $consulta = $con->query("INSERT INTO productos (nombre,descripcion,tipo,precio,imagen)VALUES('".$titulo."','".$descrip."','".$tipo."','".$precio."','".$ruta."')");
    if ($consulta) {
        $archivo = $_FILES['imagen']['tmp_name'];
        move_uploaded_file($archivo, $ruta);
        ?>
            <div class="cont" align="center">
            <h3 class="ok">Se a publicado con exito</h3>
            <meta http-equiv="refresh" content="1.5;URL=index.php">
            </div>
        <?php
    }else{
        ?>
        <div class="cont" align="center">
        <h3 class="bad">Ups, ocurrio un error al publicar</h3>
        <meta http-equiv="refresh" content="1.5;URL=index.php">
        </div>
        <?php
    }
}





?>