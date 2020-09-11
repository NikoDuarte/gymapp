<?php
insertado($_POST['nomGym'],$_POST['tel'],$_POST['correo'],$_POST['pass'],$_POST['codigo']);

function insertado($nomGym,$tel,$correo,$password,$codigo)
{

include("../../config/conexion.php");  
$con = New Conexion();
$sentencia="INSERT INTO usuarios (nombre,telefono,correo,password,codigo_gym,rol) VALUES('".$nomGym."','".$tel."','".$correo."','".$password."','gymapp".$codigo."','Gimnasio')"; 
$resultado=$con->query($sentencia) or die("Error de datos".mysqli_error($con));
}

?>

<script type="text/javascript">

alert("Se inserto los registro correctamente");
window.location.href='../login.php';
</script>