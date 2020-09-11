<?php
insertado($_POST['nomUser'],$_POST['correo'],$_POST['pass'],$_POST['codUser']);

function insertado($nomUser,$correo,$password,$codigo)
{

include("../../config/conexion.php");  
$con = New Conexion();
$sentencia="INSERT INTO usuarios (nombre,correo,password,codigo_gym_user,rol) VALUES('".$nomUser."','".$correo."','".$password."','".$codigo."','Usuario')"; 
$resultado=$con->query($sentencia) or die("Error de datos".mysqli_error($con));
}

?>

<script type="text/javascript">

alert("Se inserto los registro correctamente");
window.location.href='../login.php';

</script>