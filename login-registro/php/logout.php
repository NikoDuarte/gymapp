<?php 
session_start();
unset($_SESSION['user']);
unset($_SESSION['correo']);
unset($_SESSION['username']);
session_destroy();
header("location: ../login.php");
exit();

?>