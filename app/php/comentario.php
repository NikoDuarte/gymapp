<?php

session_start();
ob_start();

$correo = $_SESSION['correo'];
$id = $_SESSION['user'];
$name = $_SESSION['username'];
if (!isset($_SESSION['user'],$_SESSION['correo'],$_SESSION['username'])) {
    header("location:../login-registro/login.php");
}


insertado($id,$_POST['id_publi'],$_POST['comentario']);


    
        ?>
        <script type="text/javascript">

         alert("Se inserto el comentario correctamente");
         window.location.href='../index.php';

        </script>

        <?php


function insertado($id,$id_publi,$comentario)
{

include("../../config/conexion.php");  
$con = New Conexion();
$sentencia="INSERT INTO comentarios (id_user,id_publi,descripcion,fecha) VALUES('".$id."','".$id_publi."','".$comentario."',now())"; 
$resultado=$con->query($sentencia) or die("Error de datos".mysqli_error($con));

}


?>